<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
Use Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items =  Kelas::all();
        return view('page_admin.kelas.index',[
            'name' => 'KELAS',
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
        return view('page_admin.kelas.create',[
            'name' => 'TAMBAH',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kelas  $kelas)
    {
            $validateData = $request->validate([
                'nama_kelas' => ['required'],
                'level' => ['required']
            ]);

            if($validateData){
                    $check = Kelas::create($validateData);
            }

            if($check){
                Alert::success('Success', 'Data berhasil di Tambah !!!');
                return redirect(route('kelas.index'))->with('success', 'Data berhasil di tambahkan');
            }
            return back()->with('error','Data gagal ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('page_admin.kelas.edit',[
            'name' => 'EDIT',
             'item' => $kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        $validateData = $request->validate([
            'nama_kelas' => ['required'],
            'level' => ['required']
        ]);

        if($validateData){
            $check = $kelas->update($validateData);
        }


        if($check){
            Alert::success('Success', 'Data berhasil di Edit !!!');
            return redirect(route('kelas.index'))->with('success', 'Data berhasil di edit');
        }

        return back()->with('error','Data gagal di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $check = Kelas::deletedata($kelas->id);
        $check = $kelas->delete();
        if($check){
             Alert::success('Success', 'Data berhasil di Hapus !!!');
             return redirect()->back()->with('success', 'Data berhasil di hapus');
        }
             return redirect()->back()->with('error', 'Data gagal di hapus');
    }
}
