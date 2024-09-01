<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::orderBy('id', 'desc')->get();
        return view('experience.index', compact('experiences'));
    }
    //
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'posisi' => 'required|string',
            'perusahaan' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date',
            'tgl_skrg' => 'nullable|string|max:255',
        ]);

        Experience::create($request->all());

        return redirect()->route('experience.index')->with('success', 'Data Berhasil Ditambah');
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
        $experience = Experience::findOrFail($id);
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'perusahaan' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
            'tgl_skrg' => 'nullable|in:sekarang', // Checkbox nilai yang valid
        ]);

        // Temukan pengalaman kerja yang akan diperbarui
        $experience = Experience::findOrFail($id);

        // Ambil data dari permintaan
        $data = $request->only(['perusahaan', 'posisi', 'deskripsi', 'tgl_mulai']);

        // Cek apakah checkbox 'Sekarang' dicentang
        if ($request->has('tgl_skrg')) {
            // Jika 'Sekarang' dicentang, atur 'tgl_selesai' menjadi null
            $data['tgl_selesai'] = null;
            $data['tgl_skrg'] = 'sekarang';
        } else {
            // Jika tidak dicentang, pastikan 'tgl_selesai' terisi dan valid
            $data['tgl_selesai'] = $request->input('tgl_selesai');
            $data['tgl_skrg'] = null;
        }

        // Perbarui data pengalaman kerja
        $experience->update($data);

        // Redirect ke halaman daftar pengalaman dengan pesan sukses
        return redirect()->route('experience.index')->with('success', 'Data berhasil di Update');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::where('id', $id)->delete();
        return redirect()->to('experience')->with('message', 'Data berhasil di Delete');
    }
}
