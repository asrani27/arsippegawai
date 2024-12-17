<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DiklatController extends Controller
{
    public function index()
    {
        $data = Diklat::paginate(10);
        return view('admin.diklat.index', compact('data'));
    }
    public function create()
    {
        return view('admin.diklat.create');
    }

    public function delete($id)
    {
        $data = Diklat::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Diklat::find($id);

        return view('admin.diklat.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Diklat::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/diklat');
    }

    public function store(Request $req)
    {
        Diklat::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/diklat');
    }
}
