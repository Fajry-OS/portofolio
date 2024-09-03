<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::orderBy('id', 'desc')->get();
        return view('skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_skill' => 'required|string',
        ]);
        Skill::create($request->all());

        Alert::success('Success Title', 'Success Message');
        return redirect()->route('skill.index')->with('success', 'Data Berhasil Ditambah');
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
        $skill = Skill::findOrFail($id);
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = Skill::findOrFail($id);
        $request->validate([
            'nama_skill' => 'required|string',
        ]);

        $skill->nama_skill = $request->nama_skill;
        $skill->save();

        return redirect()->route('skill.index')->with('success', 'Update Skill berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        Alert::info('Info Title', 'Apa');
        return redirect()->to('skill')->with('message', 'Data berhasil di Delete');
    }
}
