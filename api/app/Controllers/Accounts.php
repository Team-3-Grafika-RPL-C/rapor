<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Accounts extends ResourceController
{
    private $api_helpers, $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper("Helpers");
    }

    public function loginUser() //POST
    {
        if (!$this->validate([
            'nis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validatiton.required', [lang('Field.nis')])
                ]
            ],
            'nisn' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validatiton.required', [lang('Field.nisn')])
                ]
            ]
        ])) {
            $errors_validation = $this->validation->getErrors();
            if ($this->validation->hasError('username')) {
                return $this->respond([
                    'message' => lang('Message.validation_error'),
                    'errors' => $errors_validation
                ], 400);
            }
        }

        $nis = $this->request->getJsonVar('nis');

        $query = "SELECT a.id, a.password FROM accounts.account a WHERE a.username = ? AND a.is_admin = FALSE";
        $data_user = $this->api_helpers->queryGetFirst($query, [$nis]);
        if ($data_user === null) {
            $errors_validation['nis'] = lang('Validation.incorrect', ['nis']);
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }
        if ($errors_validation ?? false) {
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $password = $this->request->getJsonVar('nisn');
        $password_hash = passwordHash($password);

        if ($data_user['password'] != $password_hash) {
            $errors_validation['nisn'] = 'incorrect';
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $i = 0;
        do {
            $generated_token = generateToken($data_user['id']);
            $query = "SELECT count(ases.id) AS jml FROM accounts.session ases WHERE ases.token = ?";
            $is_token_exist = $this->api_helpers->queryGetFirst($query, [$generated_token])['jml'] >= 1;
        } while ($is_token_exist && $i < 10);

        if ($is_token_exist) {
            return $this->respond([
                'message' => lang('Message.no_more_session')
            ], 503);
        }

        $agent = $this->request->getUserAgent();
        $data = [
            'id_account' => $data_user['id'],
            'token' => $generated_token,
            'device' => $agent->getAgentString(),
            'expired_at' => strtotime("+35 seconds")
        ];
        if (!$this->model->db->table('accounts.session')->insert($data)) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 503);
        }

        $jwt = setTokenJwt($generated_token);

        helper('cookie');
        $cookie = [
            'name'   => 'jwt',
            'value'  => $jwt,
            'expire' => 35,
            'httponly' => TRUE
        ];
        $this->response->setCookie($cookie);

        return $this->respond([
            'message' => lang('Message.login_success')
        ]);
    }

    public function loginAdmin() //POST
    {
        if (!$this->validate([
            'nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validatiton.required', [lang('Field.nip')])
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validatiton.required', [lang('Field.password')])
                ]
            ]
        ])) {
            $errors_validation = $this->validation->getErrors();
            if ($this->validation->hasError('username')) {
                return $this->respond([
                    'message' => lang('Message.validation_error'),
                    'errors' => $errors_validation
                ], 400);
            }
        }

        $username = $this->request->getJsonVar('nip');

        $query = "SELECT a.id, a.password FROM accounts.account a WHERE a.username = ? AND a.is_admin = TRUE";
        $data_user = $this->api_helpers->queryGetFirst($query, [$username]);
        if ($data_user === null) {
            $errors_validation['nip'] = lang('Validation.incorrect', [lang('Field.nip')]);
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }
        if ($errors_validation ?? false) {
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $password = $this->request->getJsonVar('password');
        $password_hash = passwordHash($password);

        if ($data_user['password'] != $password_hash) {
            $errors_validation['password'] = 'incorrect';
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $i = 0;
        do {
            $generated_token = generateToken($data_user['id']);
            $query = "SELECT count(ases.id) AS jml FROM accounts.session ases WHERE ases.token = ?";
            $is_token_exist = $this->api_helpers->queryGetFirst($query, [$generated_token])['jml'] >= 1;
        } while ($is_token_exist && $i < 10);

        if ($is_token_exist) {
            return $this->respond([
                'message' => lang('Message.no_more_session')
            ], 503);
        }

        $agent = $this->request->getUserAgent();
        $data = [
            'id_account' => $data_user['id'],
            'token' => $generated_token,
            'device' => $agent->getAgentString(),
            'expired_at' => strtotime("+1 week")
        ];
        if (!$this->model->db->table('accounts.session')->insert($data)) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 503);
        }

        $jwt = setTokenJwt($generated_token);

        helper('cookie');
        $cookie = [
            'name'   => 'jwt',
            'value'  => $jwt,
            'expire' => 604800,
            'httponly' => TRUE
        ];
        $this->response->setCookie($cookie);

        return $this->respond([
            'message' => lang('Message.login_success')
        ]);
    }

    public function checkSession() // GET
    {
        $jwt = $this->request->getCookie('jwt');

        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        $now_time = time();
        $query = "SELECT a.id, a.is_admin FROM accounts.account a WHERE a.id = (SELECT ass.id_user FROM accounts.session ass WHERE ass.token = ? and ass.expired_at > $now_time and ass.is_login = TRUE)";
        $result_user = json_decode(json_encode($this->model->db->query($query, [$token])->getFirstRow()), true);

        if ($result_user === null) {
            if ($this->api_helpers->clearUnusedSession($token, true) !== true) {
                return $this->respond([
                    'message' => lang('Message.unexpected')
                ], 500);
            }
            return $this->respond([
                'message' => lang('Message.relogin_required')
            ], 401);
        }

        if ($this->api_helpers->clearUnusedSession($token) !== true) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }

        $extend_session_result = $this->api_helpers->extendExpiredSession($token, $result_user['is_admin']);

        if (!$extend_session_result) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }

        helper('cookie');
        $cookie = [
            'name'   => 'jwt',
            'value'  => $jwt,
            'expire' => $result_user['is_admin'] == "t" ? 604800 : 35,
            'httponly' => TRUE
        ];
        $this->response->setCookie($cookie);


        return $this->respond([
            'message' => lang('Message.session_validate')
        ]);
    }


    public function logout() // GET
    {
        $jwt = $this->request->getCookie('jwt');

        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        if ($this->api_helpers->clearUnusedSession($token, true) === false) {
            return $this->respond(status: 500);
        }

        $this->response->deleteCookie('jwt');

        return $this->respond(status: 200);
    }
}
