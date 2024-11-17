<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function showDetailForm()
    {
        return view('user.detail');
    }

    public function storeDetail(Request $request)
    {
        $request->validate([
            'masalah' => 'required|string|max:255',
            'no_telp' => 'required|numeric',
        ]);

        Pengajuan::create([
            'masalah' => $request->masalah,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('user.detail.form')->with('success', 'Pengajuan berhasil dikirim!');
    }

    public function home()
    {
        $user = User::first();
        return view('home', compact('user'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('user.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
