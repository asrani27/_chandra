<?php

namespace App\Http\Controllers;

use App\Models\Instalasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InstalasiController extends Controller
{

    public function index()
    {
        $data = Instalasi::paginate(10);
        return view('superadmin.instalasi.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.instalasi.create');
    }
    public function store(Request $req)
    {
        if (Instalasi::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Instalasi::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/instalasi');
    }
    public function edit($id)
    {
        $data = Instalasi::find($id);
        return view('superadmin.instalasi.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Instalasi::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/instalasi');
    }
    public function delete($id)
    {
        Instalasi::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/instalasi');
    }
}
