<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function dataSiswa()
    {
        return view('admin/data-siswa');
    }

    public function dataKelas()
    {
        return view('admin/data-kelas');
    }

    public function dataGuru()
    {
        return view('admin/data-guru');
    }
    
    public function dataMapel()
    {
        return view('admin/data-mapel');
    }

    public function dataEkskul()
    {
        return view('admin/data-ekskul');
    }

    public function dataCp()
    {
        return view('admin/data-cp');
    }

    public function dataTp()
    {
        return view('admin/data-tp');
    }


    public function test()
    {
        return view('admin/test_datasiswa');
    }
    public function form_datakelas()
    {
        return view('admin/form-data_kelas');
    }
    public function form_dataguru()
    {
        return view('admin/form-data_guru');
    }
    public function form_datasiswa()
    {
        return view('admin/form-data_siswa');
    }
    public function form_datamapel()
    {
        return view('admin/form-data_mapel');
    }
    public function form_dataekskul()
    {
        return view('admin/form-data_ekskul');
    }
    public function form_datacp()
    {
        return view('admin/form-data_cp');
    }
    public function form_datatp()
    {
        return view('admin/form-data_tp');
    }
}
    