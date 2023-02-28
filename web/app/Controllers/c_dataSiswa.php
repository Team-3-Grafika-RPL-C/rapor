<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataSiswa extends BaseController
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
        $response = $this->client->request('GET', 'siswa', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Siswa',
        ];

        $code = $response->getStatusCode();
        $response_body = json_decode($response->getBody());
        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/data-siswa', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Siswa',
            'page' => 'create'
        ];
        return view('dashboard/data_umum/form-data_siswa', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'siswa/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Detail Data Siswa',
        ];

        $code = $response->getStatusCode();
        $response_body = json_decode($response->getBody());
        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_siswa_detail', $data);
    }

    public function create()
    {
        $nisn = $this->request->getVar('nisn');
        $nis = $this->request->getVar('nis');
        $nama = $this->request->getVar('nama');
        $jenis_kelamin = $this->request->getVar('jenis_kelamin');
        $tempat_lahir = $this->request->getVar('tempat_lahir');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $agama = $this->request->getVar('agama');
        $alamat = $this->request->getVar('alamat');
        $nama_ayah = $this->request->getVar('nama_ayah');
        $pekerjaan_ayah = $this->request->getVar('pekerjaan_ayah');
        $nama_ibu = $this->request->getVar('nama_ibu');
        $pekerjaan_ibu = $this->request->getVar('pekerjaan_ibu');
        $alamat_ortu = $this->request->getVar('alamat_ortu');
        $nama_wali = $this->request->getVar('nama_wali');
        $pekerjaan_wali = $this->request->getVar('pekerjaan_wali');
        $alamat_wali = $this->request->getVar('alamat_wali');
        $tingkat = $this->request->getVar('tingkat');
        $status = $this->request->getVar('status');

        $request_client_data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'student_name' => $nama,
            'gender' => $jenis_kelamin,
            'birthplace' => $tempat_lahir,
            'birthdate' => $tanggal_lahir,
            'religion' => $agama,
            'address' => $alamat,
            'father_name' => $nama_ayah,
            'father_job' => $pekerjaan_ayah,
            'mother_name' => $nama_ibu,
            'mother_job' => $pekerjaan_ibu,
            'parent_address' => $alamat_ortu,
            'guardian_name' => $nama_wali,
            'guardian_job' => $pekerjaan_wali,
            'guardian_address' => $alamat_wali,
            'class' => $tingkat,
            'status' => $status,
        ];

        $response = $this->client->request('POST', 'siswa', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-siswa');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'siswa/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Edit Data Siswa',
            'page' => 'edit'
        ];

        $detail = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $detail;
        } else {
            $data['data_err'] = $detail;
        }

        return view('dashboard/data_umum/form-data_siswa', $data);
    }

    public function form_edit_process($id)
    {
        $nisn = $this->request->getVar('nisn');
        $nis = $this->request->getVar('nis');
        $nama = $this->request->getVar('nama');
        $jenis_kelamin = $this->request->getVar('jenis_kelamin');
        $tempat_lahir = $this->request->getVar('tempat_lahir');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $agama = $this->request->getVar('agama');
        $alamat = $this->request->getVar('alamat');
        $nama_ayah = $this->request->getVar('nama_ayah');
        $pekerjaan_ayah = $this->request->getVar('pekerjaan_ayah');
        $nama_ibu = $this->request->getVar('nama_ibu');
        $pekerjaan_ibu = $this->request->getVar('pekerjaan_ibu');
        $alamat_ortu = $this->request->getVar('alamat_ortu');
        $nama_wali = $this->request->getVar('nama_wali');
        $pekerjaan_wali = $this->request->getVar('pekerjaan_wali');
        $alamat_wali = $this->request->getVar('alamat_wali');
        $tingkat = $this->request->getVar('tingkat');
        $status = $this->request->getVar('status');

        $request_client_data = [
            'nisn' => $nisn,
            'nis' => $nis,
            'student_name' => $nama,
            'gender' => $jenis_kelamin,
            'birthplace' => $tempat_lahir,
            'birthdate' => $tanggal_lahir,
            'religion' => $agama,
            'address' => $alamat,
            'father_name' => $nama_ayah,
            'father_job' => $pekerjaan_ayah,
            'mother_name' => $nama_ibu,
            'mother_job' => $pekerjaan_ibu,
            'parent_address' => $alamat_ortu,
            'guardian_name' => $nama_wali,
            'guardian_job' => $pekerjaan_wali,
            'guardian_address' => $alamat_wali,
            'class' => $tingkat,
            'status' => $status,
        ];

        $response = $this->client->request('PUT', 'siswa/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-siswa');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'siswa/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-siswa');
    }
}
