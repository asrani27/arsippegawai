<?php

namespace App\Http\Controllers;

use App\Models\Menjabat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenjabatController extends Controller
{
    public function index()
    {
        $data = Menjabat::paginate(10);
        return view('admin.menjabat.index', compact('data'));
    }
    public function create()
    {
        return view('admin.menjabat.create');
    }

    public function delete($id)
    {
        $data = Menjabat::find($id)->delete();
        Session::flash('success', 'Berhasil Di hapus');
        return back();
    }

    public function edit($id)
    {
        $data = Menjabat::find($id);

        return view('admin.menjabat.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        Menjabat::find($id)->update($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/menjabat');
    }

    public function store(Request $req)
    {
        Menjabat::create($req->all());
        Session::flash('success', 'Berhasil Di Simpan');
        return redirect('/superadmin/menjabat');
    }
}
