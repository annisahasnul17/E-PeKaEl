<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
class ImageController extends Controller
{
    public function index(){
        return view('uploadimage');
    }
    public function upload(Request $request){
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $save = DB::table('images')->insert(['image' => $name]);
            echo "Gambar berhasil di upload <a href='/home'>Kembali Ke Beranda</a>";
            header("location: http://127.0.0.1:8000/home");
        }else{
            echo "Gagal upload gambar";
        }
    }
}