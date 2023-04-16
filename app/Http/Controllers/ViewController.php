<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    // TELUTIZEN VIEW

    // UKM VIEW 
    public function edit_ukm()
    {
        return view('ukm.edit-ukm', [
            'title' => 'Edit'
        ]);
    }
}
