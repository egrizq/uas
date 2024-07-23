<?php

namespace App\Controllers;
use App\Models\Data;

class Home extends BaseController
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
                'nama_depan' => $item['nama_depan'],
                'nama_tengah' => $item['nama_tengah'],
                'nama_belakang' => $item['nama_belakang'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'tempat_lahir' => $item['tempat_lahir'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'nomor_handphone' => $item['nomor_handphone'],
                'email' => $item['email'],
                'alamat' => $item['alamat'],
                'foto' => $item['foto'],
            ];
        }
        $data['allData'] = $allDataArr;

        $allKota = $model->getAllKota();
        $modelKota = [
            'labels' => [],
            'data' => []
        ];

        foreach ($allKota as $item) {
            $modelKota['labels'][] = $item['NAMA_KOTA'];
            $modelKota['data'][] = $item['JUMLAH'];
        }
        $data['modelKota'] = json_encode($modelKota);


        return view('dashboard', $data);
    }

    public function dashboard()
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
                'nama_depan' => $item['nama_depan'],
                'nama_tengah' => $item['nama_tengah'],
                'nama_belakang' => $item['nama_belakang'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'tempat_lahir' => $item['tempat_lahir'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'nomor_handphone' => $item['nomor_handphone'],
                'email' => $item['email'],
                'alamat' => $item['alamat'],
                'foto' => $item['foto'],
            ];
        }
        $data['allData'] = $allDataArr;

        $allKota = $model->getAllKota();
        $modelKota = [
            'labels' => [],
            'data' => []
        ];

        foreach ($allKota as $item) {
            $modelKota['labels'][] = $item['NAMA_KOTA'];
            $modelKota['data'][] = $item['JUMLAH'];
        }
        $data['modelKota'] = json_encode($modelKota);


        return view('dashboard_rizq', $data);
    }
}