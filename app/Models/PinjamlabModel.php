<?php

namespace App\Controllers;


use CodeIgniter\Model;

class PinjamlabModel extends Model
{
    protected $table = 'pinjamlab';
    protected $primarykey = 'id';

    protected $useTimestamps = true;
    protected $allowedFields = [''];

    public function getPinjamlab($id = false)
    {
        if ($id === false){
            return $this->findAll();
        } else{
            return $this->getWhere(['id = > $id']);
        }
    }
}
