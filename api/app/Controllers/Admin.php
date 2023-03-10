<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Admin extends ResourceController
{
    private $api_helpers, $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper("Helpers");
    }

    public function addStudent() //POST
    {
        $jwt = $this->request->getCookie('jwt');
        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        if (!$this->api_helpers->isAdmin($token)) {
            return $this->respond([
                'message' => lang('Message.doesnt_allow')
            ], 403);
        }

        if (!$this->validate([
            'nis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.nis')])
                ]
            ], 'nisn' => [
                'rules' => 'required|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.nisn')]),
                    'min_length' => lang('Validation.min_length', [3, lang('Field.nisn')]),
                    'max_length' => lang('Validation.max_length', [21, lang('Field.nisn')])
                ]
            ], 'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.nisn')])
                ]
            ], 'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.gender')])
                ]
            ], 'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.address')])
                ]
            ], 'birthplace' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.birthplace')])
                ]
            ], 'birthdate' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.birthdate')]),
                    'valid_date' => lang('Validation.format', [lang('Field.birthdate')])
                ]
            ], 'religion' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.religion')])
                ]
            ], 'father_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.father_name')])
                ]
            ], 'mother_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.mother_name')])
                ]
            ], 'father_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.father_job')])
                ]
            ], 'mother_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.mother_job')])
                ]
            ], 'parents_address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.parents_address')])
                ]
            ], 'guardian_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_name')])
                ]
            ], 'guardian_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_job')])
                ]
            ], 'guardian_address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_address')])
                ]
            ]
        ])) {
            $errors_validation = $this->validation->getErrors();
            if (!$this->validation->hasError('gender')) {
                $gender = $this->request->getJsonVar('gender');
                if (!is_bool($gender)) {
                    if (!($gender == 0 || $gender == 1)) {
                        $errors_validation['gender'] = lang('Validation.format', [lang('Field.gender')]);
                    }
                }
            }
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $nis = $this->request->getJsonVar('nis');
        $nisn = $this->request->getJsonVar('nisn');
        $name = $this->request->getJsonVar('name');
        $gender = $this->request->getJsonVar('gender');
        if (!is_bool($gender)) {
            if ($gender == 0) {
                $gender = false;
            } elseif ($gender == 1) {
                $gender = true;
            } else {
                $errors_validation['gender'] = lang('Validation.format', [lang('Field.gender')]);
                return $this->respond([
                    'message' => lang('Message.validation_error'),
                    'errors' => $errors_validation
                ], 400);
            }
        }
        $address = $this->request->getJsonVar('address');
        $birthplace = $this->request->getJsonVar('birthplace');
        $birthdate = $this->request->getJsonVar('birthdate');
        $religion = $this->request->getJsonVar('religion');
        $father_name = $this->request->getJsonVar('father_name');
        $mother_name = $this->request->getJsonVar('mother_name');
        $father_job = $this->request->getJsonVar('father_job');
        $mother_job = $this->request->getJsonVar('mother_job');
        $parents_address = $this->request->getJsonVar('parents_address');
        $guardian_name = $this->request->getJsonVar('guardian_name');
        $guardian_job = $this->request->getJsonVar('guardian_job');
        $guardian_address = $this->request->getJsonVar('guardian_address');

        $data = [
            'username' => $nis,
            'password' => passwordHash($nisn)
        ];

        $tblUser = $this->model->db->table('accounts.account');
        $hasil = $tblUser->insert($data);
        if (!$hasil) {
            return $this->respond([
                'message' => lang('Message.unexpected'),
            ], 500);
        }

        $query = "SELECT a.id FROM accounts.account a ORDER BY a.created_date DESC LIMIT 1";
        $id_account = $this->api_helpers->queryGetFirst($query)['id'];

        $data = [
            'id_account' => $id_account,
            'nis' => $nis,
            'nisn' => $nisn,
            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'birthplace' => $birthplace,
            'birthdate' => $birthdate,
            'religion' => $religion,
            'father_name' => $father_name,
            'mother_name' => $mother_name,
            'father_job' => $father_job,
            'mother_job' => $mother_job,
            'parents_address' => $parents_address,
            'guardian_name' => $guardian_name,
            'guardian_job' => $guardian_job,
            'guardian_address' => $guardian_address
        ];

        $tblUser = $this->model->db->table('schools.students');
        $hasil = $tblUser->insert($data);
        if (!$hasil) {
            return $this->respond([
                'message' => lang('Message.unexpected'),
            ], 500);
        }

        $query = "SELECT ss.id FROM schools.students ss ORDER BY ss.created_date DESC LIMIT 1";
        $id_students = $this->api_helpers->queryGetFirst($query)['id'];
        $id_token_students = generateIdTokenWithId($id_students);

        $query = "UPDATE schools.students ss SET id_token = ? WHERE ss.id = ?";
        if (!$this->api_helpers->queryExecute($query, [$id_token_students, $id_students]))
            $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);

        return $this->respond([
            'message' => lang('Message.request_successfully'),
        ]);
    }

    public function updateStudent(String $id) //PUT
    {
        $jwt = $this->request->getCookie('jwt');
        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        if (!$this->api_helpers->isAdmin($token)) {
            return $this->respond([
                'message' => lang('Message.doesnt_allow')
            ], 403);
        }

        if (!$this->api_helpers->availableCheckerWithId($id, 'schools.students')) {
            return $this->respond([
                'message' => lang('Message.data_not_found')
            ], 404);
        }

        if (!$this->validate([
            'nis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', ['nis'])
                ]
            ], 'nisn' => [
                'rules' => 'required|min_length[10]|max_length[10]',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.nisn')]),
                    'min_length' => lang('Validation.min_length', [3, lang('Field.nisn')]),
                    'max_length' => lang('Validation.max_length', [21, lang('Field.nisn')])
                ]
            ], 'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.nisn')])
                ]
            ], 'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.gender')])
                ]
            ], 'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.address')])
                ]
            ], 'birthplace' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.birthplace')])
                ]
            ], 'birthdate' => [
                'rules' => 'required|valid_date',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.birthdate')]),
                    'valid_date' => lang('Validation.format', [lang('Field.birthdate')])
                ]
            ], 'religion' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.religion')])
                ]
            ], 'father_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.father_name')])
                ]
            ], 'mother_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.mother_name')])
                ]
            ], 'father_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.father_job')])
                ]
            ], 'mother_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.mother_job')])
                ]
            ], 'parents_address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.parents_address')])
                ]
            ], 'guardian_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_name')])
                ]
            ], 'guardian_job' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_job')])
                ]
            ], 'guardian_address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => lang('Validation.required', [lang('Field.guardian_address')])
                ]
            ]
        ])) {
            $errors_validation = $this->validation->getErrors();
            if (!$this->validation->hasError('gender')) {
                $gender = $this->request->getJsonVar('gender');
                if (!is_bool($gender)) {
                    if (!($gender == 0 || $gender == 1)) {
                        $errors_validation['gender'] = lang('Validation.format', [lang('Field.gender')]);
                    }
                }
            }
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }

        $nis = $this->request->getJsonVar('nis');
        $nisn = $this->request->getJsonVar('nisn');
        $name = $this->request->getJsonVar('name');
        $gender = $this->request->getJsonVar('gender');
        if (!is_bool($gender)) {
            if ($gender == 0) {
                $gender = false;
            } elseif ($gender == 1) {
                $gender = true;
            } else {
                $errors_validation['gender'] = lang('Validation.format', [lang('Field.gender')]);
                return $this->respond([
                    'message' => lang('Message.validation_error'),
                    'errors' => $errors_validation
                ], 400);
            }
        }
        $address = $this->request->getJsonVar('address');
        $birthplace = $this->request->getJsonVar('birthplace');
        $birthdate = $this->request->getJsonVar('birthdate');
        $religion = $this->request->getJsonVar('religion');
        $father_name = $this->request->getJsonVar('father_name');
        $mother_name = $this->request->getJsonVar('mother_name');
        $father_job = $this->request->getJsonVar('father_job');
        $mother_job = $this->request->getJsonVar('mother_job');
        $parents_address = $this->request->getJsonVar('parents_address');
        $guardian_name = $this->request->getJsonVar('guardian_name');
        $guardian_job = $this->request->getJsonVar('guardian_job');
        $guardian_address = $this->request->getJsonVar('guardian_address');

        $query = "UPDATE schools.students ss SET nis = ?, nisn = ?, name = ?, gender = ?, address = ?, birthplace = ?, birthdate = ?, religion = ?, father_name = ?, mother_name = ?, father_job = ?, mother_job = ?, parents_address = ?, guardian_name = ?, guardian_job = ?, guardian_address = ?";
        if (!$this->api_helpers->queryExecute($query, [$nis, $nisn, $name, $gender, $address, $birthplace, $birthdate, $religion, $father_name, $mother_name, $father_job, $mother_job, $parents_address, $guardian_name, $guardian_job, $guardian_address]))
            $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);

        $query = "SELECT ss.nis, ss.nisn FROM schools.students ss WHERE ss.id = ?";
        $data_student = $this->api_helpers->queryGetFirst($query, [$id]);

        if ($nis != $data_student['nis'] || $nisn != $data_student['nisn']) {
            $query = "UPDATE accounts.account a SET username = ?, password = ? WHERE s.id = (SELECT ss.id_account FROM schools.student ss WHERE ss.id = ?)";
            if (!$this->api_helpers->queryExecute($query, [$nis, $nisn, $id]))
                $this->respond([
                    'message' => lang('Message.unexpected')
                ], 500);
        }

        return $this->respond([
            'message' => lang('Message.request_successfully')
        ]);
    }

    public function deleteStudent(String $id) //DELETE
    {
        $jwt = $this->request->getCookie('jwt');
        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        if (!$this->api_helpers->isAdmin($token)) {
            return $this->respond([
                'message' => lang('Message.doesnt_allow')
            ], 403);
        }

        if (!$this->api_helpers->availableCheckerWithId($id, 'schools.students')) {
            return $this->respond([
                'message' => lang('Message.data_not_found')
            ], 404);
        }

        $query = "UPDATE schools.students ss SET is_deleted = TRUE, deleted_date = extract(epoch FROM now()) WHERE ss.id = ?";
        if (!$this->api_helpers->queryExecute($query, [$id])) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }

        $query = "UPDATE accounts.account a SET is_deleted = TRUE, deleted_date = extract(epoch FROM now()) WHERE a.id = (SELECT ss.id_account FROM schools.students ss WHERE ss.id = ?)";
        if (!$this->api_helpers->queryExecute($query, [$id])) {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }

        return $this->respond([
            'message' => lang('Message.request_successfully')
        ]);
    }
}
