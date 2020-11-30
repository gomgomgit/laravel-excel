<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport; 

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function form()
    {
        return view('exports.form-upload');
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport,$request->file('hasil_import'));

        return redirect('/form-upload');
    }
}
