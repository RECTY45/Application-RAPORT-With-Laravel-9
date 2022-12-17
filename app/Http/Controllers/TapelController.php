<?php

namespace App\Http\Controllers;

use App\Models\Tapel;
use Illuminate\Http\Request;
Use Alert;
class TapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Tapel::all();
        return view('page_admin.tahunpelajaran.index',[
            'name' => 'TAHUN PELAJARAN',
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
        return view('page_admin.tahunpelajaran.create',[
            'name' => 'TAMBAH',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tapel $tapel)
    {
        $validateData = $request->validate([
            'tahun_pelajaran' => ['required'],
            'semester' => ['required'],
            'aktif' => ['required']
        ]);

        if($validateData){
            $check = $tapel->create($validateData);
        }

        if($check){
            Alert::success('Success', 'Data berhasil di Tambah !!!');
            return redirect(route('tapel.index'))->with('success','Data berhasil di tambah');
        }
        return back()->with('error','Data gagal di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function show(Tapel $tapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tapel $tapel)
    {
        return view('page_admin.tahunpelajaran.edit',[
            'name' => 'EDIT',
            'item'  => $tapel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tapel $tapel)
    {
        $validateData = $request->validate([
            'tahun_pelajaran' => ['required'],
            'semester' => ['required'],
            'aktif' => ['required']
        ]);

        if($validateData){
            $check = $tapel->update($validateData);
        }
        if($check){
            Alert::success('Success', 'Data berhasil di Ubah !!!');
            return redirect(route('tapel.index'))->with('success', 'Data berhasil di Edit');
        }
        return back()->with('error','Data gagal di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tapel  $tapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tapel $tapel)
    {
        $check = $tapel->delete();
        if($check){
            Alert::success('Success', 'Data berhasil di Hapus !!!');
            return back()->with('success', 'Data berhasil di hapus');
        }
        return back()->with('success', 'Data gagal di hapus');
    }
}
