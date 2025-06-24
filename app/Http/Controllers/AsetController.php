<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Console\View\Components\Ask;

class AsetController extends Controller
{

    public function index()
    {
        $data = Aset::paginate(10);
        return view('superadmin.aset.index', compact('data'));
    }
    public function add()
    {
        return view('superadmin.aset.create');
    }
    public function store(Request $req)
    {
        if (Aset::where('kode', $req->kode)->first() != null) {
            Session::flash('error', 'Kode Sudah ada');
            return back();
        }
        $param = $req->all();
        Aset::create($param);
        Session::flash('success', 'Berhasil Disimpan');
        return redirect('/superadmin/aset');
    }
    public function edit($id)
    {
        $data = Aset::find($id);
        return view('superadmin.aset.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $param = $req->all();
        Aset::find($id)->update($param);
        Session::flash('success', 'Berhasil Diupdate');
        return redirect('/superadmin/aset');
    }
    public function delete($id)
    {
        Aset::find($id)->delete();
        Session::flash('success', 'Berhasil Dihapus');
        return redirect('/superadmin/aset');
    }
}
