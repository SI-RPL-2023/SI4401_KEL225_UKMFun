<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $count = [
            'mahasiswa_aktif' => User::where('role','mahasiswa')->where('status','aktif')->count(),
            'alumni' =>  User::where('role','mahasiswa')->where('status','alumni')->count(),
            'ukm' =>  User::where('role','ukm')->count()
        ];
        return view('general-admin.dashboard',[
            'title' => $title,
            'count' => $count
        ]);
    }
}
