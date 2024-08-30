<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:55',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Menghandle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $path = $image->store('public/image');
            $name = basename($path); //menyimpan file saja
        }
        //Insert into profiles () values ():
        Project::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $name,
        ]);

        return redirect()->route('project.index')->with('success', 'Data Berhasil Ditambah');
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
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'nullable|string|max:250',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('gambar')) {
            //hapus gambar lama jika ada
            if ($project->gambar) {
                Storage::delete('public/image/' . $project->gambar);
            }
            $image = $request->file('gambar');
            $path = $image->store('image', 'public');
            $name = basename($path); //menyimpan file saja
            $project->gambar = $name;
        }
        $project->judul = $request->judul;
        $project->deskripsi = $request->deskripsi;
        $project->save();

        return redirect()->route('project.index')->with('success', 'Update Project berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        if ($project->gambar) {
            Storage::delete('public/image/' . $project->gambar);
        }
        $project->forceDelete();
        return redirect()->to('project')->with('message', 'Data berhasil di Delete');
    }
}
