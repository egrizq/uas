<?php 
// app/Models/AccountModel.php

namespace App\Models;

use CodeIgniter\Model;

class Data extends Model
{
    protected $pendaftaran = 'pendaftaran';
    protected $kota = 'kota';

    public function register($data)
    {
        $builder = $this->db->table($this->pendaftaran);
        $builder->insert($data);

        header("Location: /");
        exit();
    }

    public function check_data($username) 
    {
        return $this->db->table('pendaftaran')
                        ->where(['username' => $username])
                        ->get()->getRowArray();
    }

    public function getAllData()
    {
        return $this->db->table($this->pendaftaran)
                        ->select("*")
                        ->get()
                        ->getResultArray();
    }

    public function getAllKota()
    {
        return $this->db->table($this->kota)
                        ->select("NAMA_KOTA, JUMLAH")
                        ->get()
                        ->getResultArray();
    }

    public function updateData($data)
    {
        return $this->db->table('pendaftaran')
                        ->where(['id_pendaftaran' => $data['id_pendaftaran']])
                        ->update($data);
    }

    public function deleteData($id)
    {
        return $this->db->table('pendaftaran')
                        ->where(['id_pendaftaran' => $id])
                        ->delete();
    }

    public function search($keyword)
    {
        return $this->db->table('pendaftaran')
                    ->like('nama_depan', $keyword)
                    ->orLike('nama_tengah', $keyword)
                    ->orLike('nama_belakang', $keyword)
                    ->orLike('negara', $keyword)
                    ->orLike('kota', $keyword)
                    ->orLike('kode_pos', $keyword)
                    ->orLike('jenis_kelamin', $keyword)
                    ->orLike('nomor_handphone', $keyword)
                    ->orLike('tanggal_lahir', $keyword)
                    ->orLike('email', $keyword)
                    ->get()
                    ->getResultArray();
    }
}