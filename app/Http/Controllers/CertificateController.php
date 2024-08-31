<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'desc')->get();
        return view('certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sertifikat' => 'required|string|max:55',
            'penyelenggara' => 'required|string',
            'tgl_sertifikat' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Menghandle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan file saja
        }
        //Insert into profiles () values ():
        Certificate::create([
            'nama_sertifikat' => $request->nama_sertifikat,
            'penyelenggara' => $request->penyelenggara,
            'tgl_sertifikat' => $request->tgl_sertifikat,
            'gambar' => $name,
        ]);

        return redirect()->route('certificate.index')->with('success', 'Data Berhasil Ditambah');
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
        $certificate = Certificate::findOrFail($id);
        return view('certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $certificate = Certificate::findOrFail($id);
        $request->validate([
            'nama_sertifikat' => 'required|string|max:55',
            'penyelenggara' => 'required|string',
            'tgl_sertifikat' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            //hapus gambar lama jika ada
            if ($certificate->gambar) {
                Storage::delete('public/image/' . $certificate->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('image', 'public');
            $name = basename($path); //menyimpan file saja
            $certificate->gambar = $name;
        }
        $certificate->nama_sertifikat = $request->nama_sertifikat;
        $certificate->penyelenggara = $request->penyelenggara;
        $certificate->tgl_sertifikat = $request->tgl_sertifikat;
        $certificate->save();

        return redirect()->route('certificate.index')->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        if ($certificate->gambar) {
            Storage::delete('public/image/' . $certificate->gambar);
        }
        $certificate->forceDelete();
        return redirect()->to('certificate')->with('message', 'Data berhasil di Delete');
    }
}
