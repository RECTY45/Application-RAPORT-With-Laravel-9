<?php

namespace App\Http\Controllers;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Walas::all();
        return view('page_admin.walas.index',[
            'name' => 'WALAS',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('page_admin.walas.create',[
            'name' => 'Tambah',
            'kelass' => $kelas,
            'gurus' => $guru
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
        $id_Guru = Guru::pluck('id')->toArray();
        $id_Kelas = Kelas::pluck('id')->toArray();

        $validateData = $request->validate([
            'id_guru' => ['required',Rule::in($id_Guru)],
            'id_kelas' => ['required',Rule::in($id_Kelas)]
        ]);

        if($validateData){
            $check = Walas::create($validateData);
        }
        if($check){
            return redirect(route('walas.index'))->with('success','Data berhasil di tambah');
        }
        return back()->with('error','Data gagal di tambah');

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
    public function destroy(Walas $walas)
    {
        $check = $walas->delete();
        if($check){
            return back()->with('success','Data berhasil di hapus');
        }
        return back()->with('error','Data gagal di hapus');
    }
}
