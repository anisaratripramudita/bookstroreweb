<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\barangs;
use App\Models\artikels;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function catalog(){
        return view('catalog');
    }

    public function contact(){
        return view('contact');
    }

    public function admin(){
        return view('admin');
    }

    //upload artikel baru
    public function uploadArtikel(Request $request)
    {
        $this->validate($request, [
			'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
			'deskripsi' => 'required',
		]);
        
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        artikels::create([
			'gambar' => $nama_file,
			'judul' => $request->judul,
			'deskripsi' => $request->deskripsi,
		]);
 
        echo '<script type="text/javascript">alert("Berhasil Ditambahkan");</script>'; 
        return view('home');
    } 

    //tampilan daftar artikel pembeli
    public function ViewArtikel()
    {
        $articles = DB::table('artikels')->orderby('id', 'desc')->get();
        return view('ViewArtikel', ['articles'=>$articles]);
    }

    //show detail artikel
    public function detail($id)
    {
        $article = DB::table('artikels')->where('id', $id)->first();
        return view('Artikel', ['article'=>$article]);
    }

    //show list artikel di admin
    public function list()
    {
        $articles = DB::table('artikels')->orderby('id', 'desc')->get();
        return view('ListArtikel', ['articles'=>$articles]);
    }

    //upload data barang
    public function barang(Request $request)
    {
        $this->validate($request, [
			'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
			'harga' => 'required',
			'genre' => 'required',
			'premis' => 'required',
		]);
        
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

        barangs::create([
			'gambar' => $nama_file,
			'judul' => $request->judul,
			'harga' => $request->harga,
			'genre' => $request->genre,
			'premis' => $request->premis,
		]);
        echo '<script type="text/javascript">alert("Berhasil Ditambahkan");</script>'; 
        return view('home');
    }

    public function ViewBuku()
    {
        $books = DB::table('barangs')->orderby('id', 'desc')->get();
        return view('catalog', ['books'=>$books]);
    }

    public function beli($id)
    {
        $books = DB::table('barangs')->where('id', $id)->first();
        return view('Beli', ['books'=>$books]);
    }

    public function CekOut($id)
    {
        $CekOut = DB::table('barangs')->where('id', $id)->first();
        return view('CekOut', ['CekOut'=>$CekOut]);
    }

}
