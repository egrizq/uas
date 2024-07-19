<?php

namespace App\Controllers;
use App\Models\Data;

class TampilkanData extends BaseController
{
    public function index()
    {   
        if (session()->get('username') == '') 
        {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/login'));
        }

        return view("data");
    }
}