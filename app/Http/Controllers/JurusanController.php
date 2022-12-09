<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;
use Illuminate\Http\Request;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Jurusan::all();
        return view('page_admin.jurusan.index',[
            'name' => 'JURUSAN',
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
        return view('page_admin.jurusan.create',[
            'name' => 'JURUSAN',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jurusan $jurusan)
    {
        $validateData = $request->validate([
            'nama_jurusan' => ['required'],
            'kode_jurusan' => ['required']
        ]);

        if($validateData){
            $check = $jurusan->create($validateData);
        }

        if($check){
            return redirect(route('jurusan.index'))->with('success', 'Data berhasil di tambah');
        }
        return back()->with('error','Data gagal di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('page_admin.jurusan.edit',[
            'name' => 'EDIT',
            'item' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validateData = $request->validate([
            'nama_jurusan' => ['required'],
            'kode_jurusan' => ['required']
        ]);

        if($validateData){
            $check = $jurusan->update($validateData);
        }


        if($check){
            return redirect(route('jurusan.index'))->with('success', 'Data berhasil di update');
        }

        return back()->with('error','Data gagal di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        $check = $jurusan->delete();

        if($check){
            return back()->with('success','Data berhasil di hapus');
        }
        return back()->with('error','Data gagal di hapus');
    }
}
