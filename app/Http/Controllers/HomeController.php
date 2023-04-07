<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $barangs = Barang::paginate(20);
        return view('home', compact('barangs'));
        
    }
    public function admin()
    {
        if (Auth::user()->user_status == 'admin') {
            $barangs = Barang::paginate(20);
            return view('admin', compact('barangs'));
        }
    }
    public function create(Request $request)
    {
        $barang = new Barang();
        $folder = 'uploads';
        if ($request->file('gambar') != null) {            
            $file = $request->file('gambar');
            $file->move($folder, $file->getClientOriginalName());
            $barang->gambar = $file->getClientOriginalName();
        }
        $barang->nama_barang = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->keterangan = $request->keterangan;

        $barang->save();
        return redirect()->to('/home');
    }
}
