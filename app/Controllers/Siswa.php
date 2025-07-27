<?php 

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    // Properti untuk menyimpan instance SiswaModel
    protected $siswaModel;

    // Constructor: otomatis dijalankan ketika class dipanggil
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    // Method untuk menampilkan seluruh data siswa
    public function index()
    {
        $data['siswa'] = $this->siswaModel->findAll();
        return view('siswa/v_tabeldata', $data);
    }

    // Menampilkan form tambah siswa
    public function tambah()
    {
        return view('siswa/form_tambah');
    }

    // Menyimpan data dari form tambah ke database
    public function simpan()
    {
        $data = [
            'nama'   => $this->request->getPost('nama'),
            'nis'    => $this->request->getPost('nis'),
            'kelas'  => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $this->siswaModel->insert($data);
        return redirect()->to('/siswa');
    }

    // Menampilkan form edit berdasarkan id
    public function edit($id)
    {
        $data['siswa'] = $this->siswaModel->find($id); // Perbaikan: gunakan variabel $id, bukan string 'id'
        return view('siswa/form_edit', $data);
    }

    // Memproses update data siswa
    public function update($id)
    {
        // Ambil ID dari input hidden pada form edit
        $id = $this->request->getPost('id');

        $data = [
            'nama'   => $this->request->getPost('nama'),
            'nis'    => $this->request->getPost('nis'),
            'kelas'  => $this->request->getPost('kelas'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $this->siswaModel->update($id, $data); // Perbaikan: tambahkan $data ke fungsi update
        return redirect()->to('/siswa');
    }

    // Menghapus data siswa berdasarkan id
    public function hapus($id)
    {
        $this->siswaModel->delete($id); // Perbaikan: terima $id sebagai parameter
        return redirect()->to('/siswa'); // Perbaikan: jangan return view, tapi redirect
    }
}
