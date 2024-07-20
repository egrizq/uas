<?php

namespace App\Controllers;
use App\Models\Data;

class Register extends BaseController
{
    public function index(): string
    {
        return view('register');
    }

    public function action() 
    {
        helper(['form', 'url']);
        $validationRule = [
            'foto' => [
                'uploaded[foto]',
                'mime_in[foto,image/jpg,image/jpeg,image/png]',
                'max_size[foto,4096]',
            ],
        ];

        if (!$this->validate($validationRule)) {
            print_r('Choose a valid file');
        }
        $img = $this->request->getFile('foto');
        if ($img->isValid() && !$img->hasMoved()) {
            $img->move(ROOTPATH . 'public/uploads');
            
            $data = [
                'nama_depan' => $this->request->getPost('nama_depan'),
                'nama_tengah' => $this->request->getPost('nama_tengah'),
                'nama_belakang' => $this->request->getPost('nama_belakang'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'tempat_lahir' => $this->request->getPost('tempat_lahir'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'nomor_handphone' => $this->request->getPost('nomor_handphone'),
                'email' => $this->request->getPost('email'),
                'alamat' => $this->request->getPost('alamat'),
                'kota' => $this->request->getPost('kota'),
                'provinsi' => $this->request->getPost('provinsi'),
                'negara' => $this->request->getPost('negara'),
                'kode_pos' => $this->request->getPost('kode_pos'),
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'foto' =>  $img->getName(),
                'komentar' => $this->request->getPost('komentar'),
            ];

            $model = new Data;
            $model->register($data);
            return redirect()->to('/');
        } else {
            return redirect()->to('/register');
        }

    }
}