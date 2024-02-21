<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::latest()->paginate(10);

        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mapel'
        ]);

        Mapel::create([
            'nama_mapel' => $request->nama_mapel,
     ]);

     return redirect()->route('mapel.index')->with(['success' => 'Data Berhasil Disimpan!']);

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
    public function edit(Mapel $mapel)
    {
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $this->validate($request, [
            'nama_mapel'     => 'required',
        ]);

        $mapel->update([
            'nama_mapel'     => $request->nama_mapel,
        ]);

        return redirect()->route('mapel.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
