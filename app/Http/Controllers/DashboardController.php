<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('page_admin.dashboard.index',[
            'name' => 'Halaman'
        ]);
    }
}
