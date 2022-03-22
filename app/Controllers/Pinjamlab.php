<?php

namespace App\Controllers;

use App\Models\PinjamlabModel;

class pinjamlab extends BaseController
{
    protected $pinjamlabModel;
    public function __construct()
    {
        $this->pinjamlabModel = new PinjamlabModel();
    }
    public function index()
    {


        $data = [
            'title' => 'Data ICT-BIDUS',
            'pinjamlab' => $this->PinjamlabModel->getpinjamlab()

        ];

        
        return view('pinjamlab/index', $data);
    }


    public function create()
    {
        // session();
        $data = [
            'title' => 'Data Bidus | Tambah Data',
            'validation' => \Config\Services::validation()

        ];
        return view('pinjamlab/create', $data);
    }

    public function save()
    {

        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[pinjamlab.nama]',
                'errors' => [
                    'required' => '{field} pinjamlab harus diisi',
                    'is_unique' => '{field} pinjamlab sudah terdaftar'
                ]
            ],

            'nim' => [
                'rules' => 'required[pinjamlab.nim]',
                'errors' => [
                    'required' => '{field} pinjamlab harus diisi'
                ]
            ],


            'tanggal_peminjaman' => [
                'rules' => 'required[pinjamlab.tanggal_peminjaman]',
                'errors' => [
                    'required' => '{field} pinjamlab harus diisi'
                ]
            ],

                'tanggal_pengembalian' => [
                    'rules' => 'required[pinjamlab.tanggal_pengembalian]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],

                'nama_lab' => [
                    'rules' => 'required[pinjamlab.nama_lab]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],

                'keperluan' => [
                    'rules' => 'required[pinjamlab.keperluan]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],

                'waktu_pemijaman' => [
                    'rules' => 'required[pinjamlab.waktu_pemijaman]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],

                'barang_pinjam' => [
                    'rules' => 'required[pinjamlab.barang_pinjam]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],

                'foto' => [
                    'rules' => 'required[pinjamlab.foto]',
                    'errors' => [
                        'required' => '{field} pinjamlab harus diisi'
                    ]
                ],
    
    
    
    
    
    
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pinjamlab/create')->withInput()->with('validation', $validation);
        }


        $this->PinjamlabModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kondisi' => $this->request->getVar('kondisi'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
            'nama_lab' => $this->request->getVar('nama_lab'),
            'keperluan' => $this->request->getVar('keperluan'),
            'waktu_peminjaman' => $this->request->getVar('waktu_peminjaman'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/pinjamlab');
    }

    public function delete($id)
    {
        $this->PinjamlabModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/pinjamlab');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Bidus | Ubah Data',
            'validation' => \Config\Services::validation(),
            'pinjamlab' => $this->PinjamlabModel->getpinjamlab($id)->getRow()

        ];
        return view('pinjamlab/edit', $data);
    }

    public function update($id)
    {
        $id = $this->request->getVar('id');
        $this->PinjamlabModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kondisi' => $this->request->getVar('kondisi'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'barang_pinjam' => $this->request->getVar('barang_pinjam'),
            'foto' => $this->request->getVar('foto')
            
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil diubah');

        return redirect()->to('/pinjamlab');
    }
}
