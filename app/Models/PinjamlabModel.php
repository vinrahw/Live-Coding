<?php

namespace App\Controllers;


use CodeIgniter\Model;

class PinjamlabModel extends Model
{
    protected $table = 'pinjamlab';
    protected $primarykey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nim', 'tanggal_peminjaman', 'tanggal_pengembalian', 'nama_lab', 'keperluan', 'waktu_peminjaman', 'barang_pinjam', 'foto'];

    public function getPinjamlab($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else{
            return $this->getWhere(['id = > $id']);
        }
    }
}
