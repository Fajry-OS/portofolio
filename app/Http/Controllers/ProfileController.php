<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = User::all();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $profile = User::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:55',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string',
            'tagline' => 'nullable|string',
            'deskripsi' => 'nullable|string|max:250',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'nullable|string|max:250',
            'no_telp' => 'nullable|string|max:15',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        //Simpan gambar jika di upload
        if ($request->hasFile('gambar')) {
            //hapus gambar lama jika ada
            if ($profile->gambar) {
                Storage::delete('public/image/' . $profile->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('image', 'public');
            $name = basename($path); //menyimpan file saja
            $profile->gambar = $name;
        }
        //Jika password diisi maka update password
        if ($request->password) {
            $profile->password = Hash::make($request->password);
        }
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->tagline = $request->tagline;
        $profile->deskripsi = $request->deskripsi;
        $profile->alamat = $request->alamat;
        $profile->no_telp = $request->no_telp;
        $profile->facebook = $request->facebook;
        $profile->linkedin = $request->linkedin;
        $profile->instagram = $request->instagram;
        $profile->save();
        return redirect()->route('profile.index')->with('success', 'Update Profile berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
