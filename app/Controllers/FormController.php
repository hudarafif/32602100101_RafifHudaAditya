<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FormController extends BaseController
{
    public function index()
    {
        //tampilkan view form
        return view('form');
    }

    public function processForm()
    {
        //Ambil data yang dikirimkan melalui form
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $kelas = $this->request->getPost('kelas');
        $matakuliah = $this->request->getPost('matakuliah');
        $dosen = $this->request->getPost('dosen');
        $asisten = $this->request->getPost('asisten');

        //Siapkan data untuk ditampilkan di view hasil
        $data = [
            'nama'=> $nama,
            'nim'=> $nim,
            'kelas'=> $kelas,
            'matakuliah'=> $matakuliah,
            'dosen'=> $dosen,
            'asisten'=> $asisten,
        ];

        //tampilkan view hasil dengan data yang telah dikumpulkan
        return view('result', $data);
    }
}
?>