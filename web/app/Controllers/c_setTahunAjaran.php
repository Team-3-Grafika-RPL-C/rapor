<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PHPUnit\Framework\Constraint\IsEqualWithDelta;

class c_setTahunAjaran extends BaseController
{
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Tahun Ajaran',
        ];

        $response = $this->client->request('GET', 'tahun-ajaran', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $body_response = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $body_response;
        } else {
            $data['data_err'] = $body_response;
        }

        return view('dashboard/setting_data/set-tahun_ajaran', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Tahun Ajaran',
            'page' => 'create'
        ];
        return view('dashboard/setting_data/form-set_tahun_ajaran', $data);
    }
    public function create()
    {
        $tahun_ajaran = $this->request->getVar('tahun_ajaran');

        $request_client_data = [
            'academic_year' => $tahun_ajaran,
        ];

        $response = $this->client->request('POST', 'tahun-ajaran', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/set-tahun_ajaran');
    }
    public function form_edit($id)
    {
        $data = [
            'title' => 'Rapodig - Edit Tahun Ajaran',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'tahun-ajaran/' . $id);

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/setting_data/form-set_tahun_ajaran', $data);
    }
    public function form_edit_process($id)
    {
        $tahun_ajaran = $this->request->getVar('tahun_ajaran');

        $request_client_data = [
            'academic_year' => $tahun_ajaran,
        ];

        $response = $this->client->request('PUT', 'tahun-ajaran/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/set-tahun_ajaran');
    }
    public function set_aktif($id = null)
    {
        $response = $this->client->request('POST', 'tahun-ajaran-active/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/set-tahun_ajaran');
    }
    public function set_nonaktif($id = null)
    {
        $response = $this->client->request('POST', 'tahun-ajaran-nonactive/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/set-tahun_ajaran');
    }
    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'tahun-ajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            $body_response = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $body_response);
        }

        return redirect()->to('/set-tahun_ajaran');
    }
}
