<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class Home extends Controller
{
    public function cekDatabase()
    {
        try {
            // Ambil koneksi database default
            $db = Database::connect();

            // Jalankan query uji
            $query = $db->query("SHOW TABLES");

            if ($query) {
                echo "✅ Koneksi database berhasil.";
            } else {
                echo "❌ Gagal menjalankan query.";
            }
        } catch (\Exception $e) {
            // Tangkap error jika gagal konek
            echo "❌ Gagal konek ke database: " . $e->getMessage();
        }
    }
}
