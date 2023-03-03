<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPUnit\Util\Json;

class c_setPelajaranKelas extends BaseController
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
        $response = $this->client->request('GET', 'pelajaran-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Set Pelajaran Kelas',
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data["data_err"] = $response_body;
        }
        

        return view('dashboard/setting_data/set-pelajaran_kelas', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Pelajaran Kelas',
            'page' => 'create'
        ];
        
        $response = $this->client->request('GET', 'pk-option-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() === 200) {
            $data['option_kelas'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody);
        }
        
        $response = $this->client->request('GET', 'pk-option-semester', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_semester'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }
        
        $response = $this->client->request('GET', 'pk-data-mapel', [
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

        return view('dashboard/setting_data/form-set_pelajaran_kelas', $data);
    }

    public function form_detail($id)
    {
        $data = [
            'title' => 'Rapodig - Detail Pelajaran Kelas',
        ];

        $response = $this->client->request('GET', 'pelajaran-kelas/' . $id, [
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

        $response = $this->client->request('GET', 'pelajaran-kelas-detail/' . $id, [
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
        return view('dashboard/setting_data/form-set_pelajaran_kelas_detail', $data);
    }

    public function form_edit($id)
    {
        
        $data = [
            'title' => 'Rapodig - Edit Pelajaran Kelas',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'pelajaran-kelas/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['pelajaran_kelas'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        // dd($data['pelajaran_kelas']);

        $response = $this->client->request('GET', 'pelajaran-kelas-detail/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['detail'] = json_decode($response->getBody());
            $array_detail= [];
    
            foreach ($data['detail']->pelajaran_kelas_detail as $key => $value) {
                array_push($array_detail, $value->id_subject);
            }
            $data['detail_id'] = $array_detail;

        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'pk-option-kelas', [
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

        $response = $this->client->request('GET', 'pk-option-semester', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_semester'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'pk-data-mapel', [
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

        return view('dashboard/setting_data/form-set_pelajaran_kelas', $data);

    }

    public function insert()
    {
        $id_class = $this->request->getVar('kelas');
        $id_semester = $this->request->getVar('semester');
        $id_subject = $this->request->getVar('mapel');

        $request_client_data = [
            'id_semester' => $id_semester,
            'id_class' => $id_class,
        ];

        $response = $this->client->request('POST', 'pelajaran-kelas', [
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
                'id_class_subject' => $body_response->data
            ];

            $response = $this->client->request('POST', 'pelajaran-kelas-detail', [
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

        return redirect()->to('/set-pelajaran_kelas');

    }

    public function form_edit_process($id)
    {
        // update parent
        $id_class = $this->request->getVar('kelas');
        $id_semester = $this->request->getVar('semester');
        $id_subject = $this->request->getVar('mapel');

        $request_client_data = [
            'id_semester' => $id_semester,
            'id_class' => $id_class,
        ];

        $response = $this->client->request('PUT', 'pelajaran-kelas/' .$id, [
            'json'=> $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() != 200) {
            return redirect()->back()->withInput()->with('data_errr', json_decode($response->getBody()));
        }

        //hapus child
        $response = $this->client->request('DELETE', 'pelajaran-kelas-detail/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() != 200) {
            return redirect()->back()->withInput()->with('data_errr', json_decode($response->getBody()));
        }

        //insert child
        foreach ($id_subject as $key => $value) {
            $request_client_data_detail = [
                'id_subject' => $value,
                'id_class_subject' => $id
            ];

            $response = $this->client->request('POST', 'pelajaran-kelas-detail', [
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

        return redirect()->to('/set-pelajaran_kelas');

    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'pelajaran-kelas/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }
        return redirect()->to('/set-pelajaran_kelas');
    }


}
