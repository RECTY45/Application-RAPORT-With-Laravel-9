<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
Use Alert;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Siswa::all();
        return view('page_admin.siswa.index',[
            'name' => 'Siswa',
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
        $jurusans = Jurusan::all();
        $kelas = Kelas::all();
        return view('page_admin.siswa.create',[
            'name' => 'Tambah',
            'jurusans' => $jurusans,
            'kelas' => $kelas
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
        $idKelas = Kelas::pluck('id')->toArray();
        $idJurusan = Jurusan::pluck('id')->toArray();
        $validateData = $request->validate([
            'nis' => ['required', 'unique:tbl_siswas,nis', 'max:7'],
            'nisn' => ['required', 'unique:tbl_siswas,nisn', 'max:10'],
            'nama' => ['required'],
            'id_kelas' => ['required', Rule::in($idKelas)],
            'id_jurusan' => ['required', Rule::in($idJurusan)],
            'jk' => ['required'],
            'agama' => ['required'],
            'profile' => ['nullable'],
        ]);

        if($validateData){
            $check = Siswa::create($validateData);
        }

        if($check){
            Alert::success('Success', 'Data berhasil di Tambah !!!');
            return redirect(route('siswa.index'))->with('success', 'Data berhasil di tambahkan');
        }

        return back()->with('error','Data gagal ditambahkan');

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
    public function edit(Siswa $siswa)
    {

            $jurusans = Jurusan::all();
            $Kelas = Kelas::all();
        return view('page_admin.siswa.edit',[
            'name' => 'Tambah',
            'item' => $siswa,
            'jurusans' => $jurusans,
            'kelas' => $Kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $idKelas = Kelas::pluck('id')->toArray();
        $idJurusan = Jurusan::pluck('id')->toArray();
        $validateData = $request->validate([
            'nis' => ['required', 'unique:tbl_siswas,nis', 'max:7'],
            'nisn' => ['required', 'unique:tbl_siswas,nisn', 'max:10'],
            'nama' => ['required'],
            'id_kelas' => ['required', Rule::in($idKelas)],
            'id_jurusan' => ['required', Rule::in($idJurusan)],
            'jk' => ['required'],
            'agama' => ['required'],
            'profile' => ['nullable'],
        ]);

        if($validateData){
            $check = $siswa->update($validateData);
        }

        if($check){
            Alert::success('Success', 'Data berhasil di Edit !!!');
            return redirect(route('siswa.index'))->with('success', 'Data berhasil di edit');
        }

        return back()->with('error','Data gagal di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();
        Alert::success('Success', 'Data berhasil di Hapus !!!');
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}
