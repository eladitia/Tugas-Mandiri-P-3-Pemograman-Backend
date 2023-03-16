<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dataMahasiswa(){ 
        $no = 1;
        //array scalar
        $s1 = ['nama' => 'Fawwaz', 'alamat'=>'Jakarta'];
        $s2 = ['nama' => 'Inaya', 'alamat'=>'Depok'];
        $s3 = ['nama' => 'Zidan', 'alamat'=>'Binjai'];
        $s4 = ['nama' => 'Bambang', 'alamat'=>'Mojokerto'];
        $s5 = ['nama' => 'Unyil', 'alamat'=>'Bandung'];
        $judul = ['No','Nama','alamat'];
        // Array Associative
        $siswa = [$s1,$s2,$s3,$s4,$s5];
        return view('latihan.data_mahasiswa',  compact('siswa','judul','no') 
        );
    }
}