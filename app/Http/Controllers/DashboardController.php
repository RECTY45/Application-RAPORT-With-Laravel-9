<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Walas;

class DashboardController extends Controller
{
    public function dashboard(){

        // $jmlGuru = "Model Guru Bermasalah";
        $jmlUser = count(User::all());
        return view('page_admin.dashboard.index',[
            'name' => 'DASHBOARD',
            'jmlUser' => $jmlUser,

        ]);
    }
}
