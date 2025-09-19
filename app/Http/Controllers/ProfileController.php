<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    Public function profile($nama="", $npm="", $kelas=""){
        $fotoPath = public_path("images/{$nama}.jpg");
        $foto = file_exists($fotoPath) ? "images/{$nama}.jpg" : "images/fotomaw.jpg";

        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
            'foto' => $foto
        ];
        return view('profile', $data);
    }
}
