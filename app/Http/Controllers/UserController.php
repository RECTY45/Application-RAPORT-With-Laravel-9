<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use Alert;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('page_admin.user.index', [
            'name' => 'USERS',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page_admin.user.create',[
            'name' => 'TAMBAH',
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
        $validateData = $request->validate([
            'nama_pengguna' => ['required'],
            'username' => ['required'],
            'role' => ['required'],
            'password' => ['required'],
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        if($validateData){
            $check = User::create($validateData);
        }

        if($check){
            Alert::success('Success', 'Data berhasil di tambah !!!');
            return redirect(@route('user.index'))->with('success','Data berhasil di tambah');
        }

        return back()->with('error', 'Data gagal ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('page_admin.user.edit', [
            'name' => 'EDIT',
            'item' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'nama_pengguna' => ['required'],
            'username' => ['required'],
            'role' => ['required'],
        ]);

        if($validateData){
            $check = $user->update($validateData);
        }

        if($check){
            Alert::success('Success', 'Data berhasil di edit !!!');
            return redirect(route('user.index'))->with('success', 'Data berhasil di edit');
        }

        return back()->with('error','Data gagal di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $check = $user->delete();

        if($check){

            Alert::success('Success', 'Data berhasil di hapus');
            return back()->with('success', 'berhasil di hapus');
        }

        return back()->with('error','gagal di hapus');
    }
}
