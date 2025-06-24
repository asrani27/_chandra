<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KerusakanController extends Controller
{

    public function index()
    {
        $data = Kerusakan::paginate(10);
        return view('superadmin.kerusakan.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.kerusakan.create');
    }
    public function store(Request $req)
    {
        if (Kerusakan::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Kerusakan::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/kerusakan');
    }
    public function edit($id)
    {
        $data = Kerusakan::find($id);
        return view('superadmin.kerusakan.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Kerusakan::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/kerusakan');
    }
    public function delete($id)
    {
        Kerusakan::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/kerusakan');
    }
}
