<?php

namespace App\Http\Controllers;

use App\Models\Penghapusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenghapusanController extends Controller
{

    public function index()
    {
        $data = Penghapusan::paginate(10);
        return view('superadmin.penghapusan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.penghapusan.create');
    }
    public function store(Request $req)
    {
        if (Penghapusan::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Penghapusan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/penghapusan');
    }
    public function edit($id)
    {
        $data = Penghapusan::find($id);
        return view('superadmin.penghapusan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Penghapusan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/penghapusan');
    }
    public function delete($id)
    {
        Penghapusan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/penghapusan');
    }
}
