<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KategoriObat;

class KategoriObatController extends Controller
{
    public function index()
    {
        $kategories = KategoriObat::all();
        return view('admin.kategori.index', compact('kategories'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $kategorie = new KategoriObat();
        $kategorie->kategori_obat_nama = $post['kategori_obat_nama'];
        $kategorie->save();

        return redirect('admin/kategori/list');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori = KategoriObat::findOrFail($id);
        return view('admin/kategori/edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $kategorie = KategoriObat::findOrFail($id);
        $kategorie->delete();
        return redirect('admin/kategori/list');
    }
}
