<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index($nama){

    	return $nama;

    }

     public function formulir(){

    	return view('formulir');

}
public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $umur = $request->input('umur');
        $agama = $request->input('agama');
        return "Nama : " . $nama . ",<br>Umur : " . $umur .
        ", <br>Alamat : " . $alamat . ", <br>Agama : " . $agama ;

}
}
