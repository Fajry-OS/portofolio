<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::orderBy('id', 'desc')->get();
        return view('education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pendidikan' => 'required|string',
            'jurusan' => 'nullable|string',
            'gpa' => 'nullable|numeric|between:0,4.00',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);
        Education::create($request->all());

        return redirect()->route('education.index')->with('success', 'Data Berhasil Ditambah');
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
        $education = Education::findOrFail($id);
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = Education::findOrFail($id);
        $request->validate([
            'pendidikan' => 'required|string',
            'jurusan' => 'nullable|string',
            'gpa' => 'nullable|numeric|between:0,4.00',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);

        $education->pendidikan = $request->pendidikan;
        $education->jurusan = $request->jurusan;
        $education->gpa = $request->gpa;
        $education->tgl_mulai = $request->tgl_mulai;
        $education->tgl_selesai = $request->tgl_selesai;
        $education->save();

        return redirect()->route('education.index')->with('success', 'Update Education berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        return redirect()->to('education')->with('message', 'Data berhasil di Delete');
    }
}
