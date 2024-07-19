<?php

namespace App\Controllers;
use App\Models\Data;

class Edit extends BaseController
{
    public function index()
    {   
        if (session()->get('username') == '') 
        {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/login'));
        }

        $model = new Data;
        $allData = $model->getAllData();
        $allDataArr = [];
        
        foreach ($allData as $item) {
            $allDataArr[] = [
                'id_pendaftaran' => $item['id_pendaftaran'],
                'nama_depan' => $item['nama_depan'],
                'nama_tengah' => $item['nama_tengah'],
                'nama_belakang' => $item['nama_belakang'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'tempat_lahir' => $item['tempat_lahir'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'nomor_handphone' => $item['nomor_handphone'],
                'email' => $item['email'],
                'negara' => $item['negara'],
                'kota' => $item['kota'],
                'kode_pos' => $item['kode_pos'],
                'alamat' => $item['alamat'],
            ];
        }
        $data['allData'] = $allDataArr;

        return view('edit', $data);
    }

    
    public function action()
    {   
        $data = [
            'id_pendaftaran' => $this->request->getPost('id_pendaftaran'),
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_tengah' => $this->request->getPost('nama_tengah'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'negara' => $this->request->getPost('negara'),
            'kota' => $this->request->getPost('kota'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nomor_handphone' => $this->request->getPost('nomor_handphone'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'email' => $this->request->getPost('email'),
        ];

        $model = new Data;
        $model->updateData($data);
        return redirect()->to('/');
    }
}