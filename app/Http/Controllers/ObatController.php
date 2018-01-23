<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Obat;
use App\Apotik;
use App\kategoriObat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = new Obat;
        $obat_list = $obat->get_obat();

        return view('admin.obat.index', compact('obat_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apotik = Apotik::all();
        $kategori = KategoriObat::all();
        return view('admin.obat.create', compact('apotik', 'kategori'));
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $obat = new Obat;
        $obat->apotik_id = $post['apotik_id'];
        $obat->kategori_obat_id = $post['kategori_obat_id'];
        $obat->obat_nama = $post['obat_nama'];
        $obat->save();

        return redirect('admin/obat/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect('admin/obat/list');
    }
}
