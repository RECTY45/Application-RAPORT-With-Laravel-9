<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Guru::all();
        return view('page_admin.guru.index',[
            'name' => 'GURU',
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
        return view('page_admin.guru.create',[
            'name' => 'TAMBAH',
            'mapel' => Mapel::all()
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
        $idMapel = Mapel::pluck('id')->toArray();

        $validateData = $request->validate([
         'nama_guru' => ['required'],
         'id_mapel' =>  ['required', Rule::in($idMapel)],

        ]);

        $check = Guru::create($validateData);

        if($check){
             return redirect(@route('guru.index'))->with('success', 'Data berhasil di tambah');
        }
        return back()->with('error', 'Data gagal di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $check = $guru->delete();

        if($check){
            return back()->with('success','Data berhasil di hapus');
        }
            return back()->with('error','Data gagal di hapus');
    }
}
