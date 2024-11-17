<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $pengajuans = Pengajuan::all();

        return view('admin.form', compact('users', 'pengajuans'));
    }
}
