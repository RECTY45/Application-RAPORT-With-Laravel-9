<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Mapel::all();
        return view('page_admin.mapel.index',[
            'name' => 'MAPEL',
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Jurusans = Jurusan::all();
        return view('page_admin.mapel.create',[
            'name' => 'TAMBAH',
            'jurusans' => $Jurusans,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_Jurusan = Jurusan::pluck('id')->toArray();
        $validateData = $request->validate([
            'nama_mapel' => ['required'],
            'kkm' => ['required', 'max:2'],
            'id_jurusan' => ['required', Rule::in($id_Jurusan)],
            'level' => ['required']
        ]);

        if($validateData){
            $check = Mapel::create($validateData);
        }
        if($check){
         return redirect(route('mapel.index'))->with('success','Data berhasil di tambahkan');
        }
        return back()->with('error','Data gagal di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Mapel $mapel)
    {
        $Jurusans = Jurusan::all();
        return view('page_admin.mapel.edit',[
            'name' => 'EDIT',
            'jurusans' => $Jurusans,
            'item' => $mapel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mapel $mapel)
    {
        $id_Jurusan = Jurusan::pluck('id')->toArray();
        $validateData = $request->validate([
            'nama_mapel' => ['required'],
            'kkm' => ['required', 'max:2'],
            'id_jurusan' => ['required', Rule::in($id_Jurusan)],
            'level' => ['required']
        ]);

        if($validateData){
            $check = $mapel->update($validateData);
        }
        if($check){
         return redirect(route('mapel.index'))->with('success','Data berhasil di update');
        }
        return back()->with('error','Data gagal di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        $check = $mapel->delete();

        if($check){
           return redirect()->back()->with('success','Data berhasil di hapus');
        }
        return redirect()->back()->with('error','Data gagal di hapus');
    }
}
