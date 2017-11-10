<?php 
namespace App\Http\Controllers;

class LoginController extends Controller {
        
    public function index()
    {
        $nama = "Ciplex";
        $sekolah = "SMK IT AMAL ISLAMI";
        $dataArray = ["SMK","PASTI","BISA"];
        // cara ke 1
        // return view('login.login', ['nama' => $nama]); 

        // cara ke 2
        // return view('login.login')->with('nama', $nama);

        // cara ke 3
        return view('login.login', compact('nama', 'sekolah', 'dataArray'));
    }
}
