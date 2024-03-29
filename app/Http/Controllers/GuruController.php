<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
Use Alert;
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
       $items = Mapel::all();
        return view('page_admin.guru.create',[
            'name' => 'TAMBAH',
            'mapel' => $items,
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
             Alert::success('Success', 'Data berhasil di Tambah !!!');
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
        return view('page_admin.guru.edit',[
            'name' => 'EDIT',
            'items'=> $guru,
            'mapel'=> Mapel::all()
        ]);
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
        $idMapel = Mapel::pluck('id')->toArray();

        $validateData = $request->validate([
         'nama_guru' => ['required'],
         'id_mapel' =>  ['required', Rule::in($idMapel)],

        ]);

        $check = $guru->update($validateData);

        if($check){
             Alert::success('Success', 'Data berhasil di Edit !!!');
             return redirect(@route('guru.index'))->with('success', 'Data berhasil di edit');
        }
        return back()->with('error', 'Data gagal di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $check = Guru::deleteData($guru->id);
        $check = $guru->delete();
        if($check){
            Alert::success('Success', 'Data berhasil di Hapus !!!');
            return back()->with('success','Data berhasil di hapus');
        }
            return back()->with('error','Data gagal di hapus');
    }
}
