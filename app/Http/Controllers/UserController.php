<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('nama','ASC')->get();
        $title = 'USER';
        return view('general-admin.user.index',[
            'title' => 'User',
            'users' => $users,
            'title' => $title
        ]);
    }

    public function import()
    {
        request()->validate([
            'file_excel' => ['required','mimes:xlsx']
        ]);

        Excel::import(new UserImport, request()->file('file_excel'));

        return redirect()->back()->with('success','Berhasil di import.');
    }

    public function downloadSampelImport()
    {

        $filePath = public_path('asset/sampel-import-user.xlsx');
        $headers = ['Content-Type:', 'application/excell'];
        $fileName = 'Sampel_Import_User.xlsx';

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'Downloading Failed.');
        }
        return response()->download($filePath, $fileName, $headers);
    }
}
