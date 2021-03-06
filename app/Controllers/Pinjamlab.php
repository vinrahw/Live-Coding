<?php

namespace App\Controllers;

use App\Controllers\PinjamlabModel as ControllersPinjamlabModel;
use App\Models\PinjamlabModel;

class Pinjamlab extends BaseController
{
    protected $pinjamlabModel;
    public function __construct()
    {
        $this->pinjamlabModel = new PinjamlabModel();
    }
    public function index()
    {


        $data = [
            'title' => 'Data Pinjam Lab',
            'pinjamlab' => $this->pinjamlabModel->getPinjamlab()

        ];


        return view('pinjamlab/index', $data);
    }


    public function create()
    {
        // session();
        $data = [
            'title' => 'Data Lab | Tambah Data',
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

            'waktu_peminjaman' => [
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
                'rules' => 'uploaded[foto]|is_image[foto]|mime_in[foto, image/jpg, image/jpeg, image/png]',
                'errors' => [
                    'uploaded' => 'foto pinjamlab harus diisi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pinjamlab/create')->withInput()->with('validation', $validation);
        }

        $fileFoto = $this->request->getFile('foto');
        $fileFoto->move('img');

        $namafoto = $fileFoto->getName();

        $this->pinjamlabModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kondisi' => $this->request->getVar('kondisi'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
            'nama_lab' => $this->request->getVar('nama_lab'),
            'keperluan' => $this->request->getVar('keperluan'),
            'waktu_peminjaman' => $this->request->getVar('waktu_peminjaman'),
            'barang_pinjam' => $this->request->getVar('barang_pinjam'),
            'foto' => $namafoto
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

        return redirect()->to('/pinjamlab');
    }

    public function delete($id)
    {
        $this->pinjamlabModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil dihapus');
        return redirect()->to('/pinjamlab');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Data Lab | Ubah Data',
            'validation' => \Config\Services::validation(),
            'pinjamlab' => $this->pinjamlabModel->getpinjamlab($id)->getRow()

        ];
        return view('pinjamlab/edit', $data);
    }

    public function update($id)
    {
        $id = $this->request->getVar('id');
        $this->pinjamlabModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'kondisi' => $this->request->getVar('kondisi'),
            'tanggal_peminjaman' => $this->request->getVar('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->request->getVar('tanggal_pengembalian'),
            'nama_lab' => $this->request->getVar('nama_lab'),
            'keperluan' => $this->request->getVar('keperluan'),
            'waktu_peminjaman' => $this->request->getVar('waktu_peminjaman'),
            'barang_pinjam' => $this->request->getVar('barang_pinjam'),
            'foto' => $this->request->getVar('foto')

        ]);


        session()->setFlashdata('pesan', 'Data Berhasil diubah');

        return redirect()->to('/pinjamlab');
    }
}
