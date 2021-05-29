<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class datacontroller extends Controller
{
    public function buku0024(){
        $ms_buku = DB::table('ms_buku')->get();
        return view('buku0024',['ms_buku'=> $ms_buku]);
    }
    public function cari(Request $request){
        $cari = $request->lihat;
        $buku=DB::table('ms_buku')->where('judul_buku','like',"%".$cari."%")->paginate();
        return view('buku0024',['ms_buku'=>$buku]);
    }
    public function join0024(){
        $buku = DB::table('ms_buku')
        ->join('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->select('ms_buku.kode_buku', 'ms_buku.judul_buku', 'ms_buku.jumlah_buku' , 'ms_kategori.nama_kategori')
        ->get();
        return view('join0024',['ms_buku'=>$buku]);
    }
    public function carijoin(Request $request){
        $carijoin = $request->lihat;
        $buku = DB::table('ms_buku')
        ->join('ms_kategori', 'ms_buku.kode_kategori', '=', 'ms_kategori.kode_kategori')
        ->select('ms_buku.kode_buku', 'ms_buku.judul_buku', 'ms_buku.jumlah_buku' , 'ms_kategori.nama_kategori')
        ->where('nama_kategori','like',"%".$carijoin."%")->paginate();
        return view('join0024',['ms_buku'=>$buku]);
    }
}
