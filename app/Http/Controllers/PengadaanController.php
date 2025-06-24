<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengadaanController extends Controller
{

    public function index()
    {
        $data = Pengadaan::paginate(10);
        return view('superadmin.pengadaan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.pengadaan.create');
    }
    public function store(Request $req)
    {
        if (Pengadaan::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Pengadaan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/pengadaan');
    }
    public function edit($id)
    {
        $data = Pengadaan::find($id);
        return view('superadmin.pengadaan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Pengadaan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/pengadaan');
    }
    public function delete($id)
    {
        Pengadaan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/pengadaan');
    }
}
