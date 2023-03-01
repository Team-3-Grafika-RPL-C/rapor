<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPUnit\Util\Json;

class c_setGuruPelajaran extends BaseController
{
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }

    public function index()
    {
        $response = $this->client->request('GET', 'guru-pelajaran', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Set Guru Pelajaran',
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data["data_err"] = $response_body;
        }

        return view('dashboard/setting_data/set-guru_pelajaran', $data);
    }

    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Guru Pelajaran',
            'page' => 'create'
        ];

        $response = $this->client->request('GET', 'gp-option-guru', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_guru'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-option-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_kelas'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-data-mapel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_mapel'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/setting_data/form-set_guru_pelajaran', $data);
    }

    public function form_detail($id)
    {
        $data = [
            'title' => 'Rapodig - Detail Guru Pelajaran',
        ];

        $response = $this->client->request('GET', 'guru-pelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        $response = $this->client->request('GET', 'guru-pelajaran-detail/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['detail'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/setting_data/form-set_guru_pelajaran_detail', $data);
    }

    public function form_edit($id)
    {
        $data = [
            'title' => 'Rapodig - Edit Guru Pelajaran',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'guru-pelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['guru_pelajaran'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'guru-pelajaran-detail/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['detail'] = json_decode($response->getBody());
            $array_detail= [];
    
            foreach ($data['detail']->guru_pelajaran_detail as $key => $value) {
                array_push($array_detail, $value->id_subject);
            }
            $data['detail_id'] = $array_detail;

        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-option-guru', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_guru'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-option-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_kelas'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'gp-data-mapel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if (response()->getStatusCode() === 200) {
            $data['data_mapel'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/setting_data/form-set_guru_pelajaran', $data);
    }

    public function insert()
    {
        $id_teacher = $this->request->getVar('guru');
        $id_class = $this->request->getVar('kelas');
        $id_academic_year = $this->request->getVar('tahun');
        $id_subject = $this->request->getVar('mapel');

        $request_client_data = [
            'id_academic_year' => $id_academic_year,
            'id_class' => $id_class,
            'id_teacher' => $id_teacher,
        ];

        $response = $this->client->request('POST', 'guru-pelajaran', [
            'json'=>$request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $body_response = json_decode($response->getBody());


        foreach ($id_subject as $key => $value) {
            $request_client_data_detail = [
                'id_subject' => $value,
                'id_teacher_subject' => $body_response->data
            ];

            $response = $this->client->request('POST', 'guru-pelajaran-detail', [
                'json' => $request_client_data_detail,
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token')
                ],
                'http_errors' => false
            ]);

            if ($response->getStatusCode() != 201) {
                return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
            }
        }

        return redirect()->to('/set-guru_pelajaran');
    }

    public function form_edit_process($id)
    {
        $id_teacher = $this->request->getVar('guru');
        $id_class = $this->request->getVar('kelas');
        $id_academic_year = $this->request->getVar('tahun');
        $id_subject = $this->request->getVar('mapel');

        $request_client_data = [
            'id_academic_year' => $id_academic_year,
            'id_class' => $id_class,
            'id_teacher' => $id_teacher,
        ];

        $response = $this->client->request('PUT', 'guru-pelajaran/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() != 200) {
            return redirect()->back()->withInput()->with('data_errr', json_decode($response->getBody()));
        }

        // Hapus
        $response = $this->client->request('DELETE', 'guru-pelajaran-detail/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() != 200) {
            return redirect()->back()->withInput()->with('data_errr', json_decode($response->getBody()));
        }

        // Insert
        foreach ($id_subject as $key => $value) {
            $request_client_data_detail = [
                'id_subject' => $value,
                'id_teacher_subject' => $id
            ];

            $response = $this->client->request('POST', 'guru-pelajaran-detail', [
                'json' => $request_client_data_detail,
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token')
                ],
                'http_errors' => false
            ]);
            if ($response->getStatusCode() != 201) {
                return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
            }
        }

        return redirect()->to('/set-guru_pelajaran');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'guru-pelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', $response_body);
        }

        return redirect()->to('/set-guru_pelajaran');
    }
}
