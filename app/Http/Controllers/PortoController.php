<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::first();

        return view('portofolio.pages.about', compact('data'));
    }

    public function resume()
    {
        $educations = Education::all()->map(function ($education) {
            // $education->tgl_mulai = Carbon::parse($education->tgl_mulai)->format('d M Y');
            $education->tgl_mulai = Carbon::parse($education->tgl_mulai)->format('Y');
            $education->tgl_selesai = Carbon::parse($education->tgl_selesai)->format('Y');
            return $education;
        });
        $experiences = Experience::all()->map(function ($experience) {
            // $education->tgl_mulai = Carbon::parse($education->tgl_mulai)->format('d M Y');
            $experience->tgl_mulai = Carbon::parse($experience->tgl_mulai)->format('Y');
            $experience->tgl_selesai = Carbon::parse($experience->tgl_selesai)->format('Y');
            return $experience;
        });
        $certificates = Certificate::all()->map(function ($certificate) {
            $certificate->tgl_sertifikat = Carbon::parse($certificate->tgl_sertifikat)->format('d M Y');
            return $certificate;
        });

        return view('portofolio.pages.resume', compact('educations', 'experiences',  'certificates'));
    }

    public function skill()
    {
        $datas = Skill::all();

        return view('portofolio.pages.skill', compact('datas'));
    }

    public function project()
    {
        $datas = Project::all();

        return view('portofolio.pages.project', compact('datas'));
    }

    public function contact()
    {
        $data = User::first();

        return view('portofolio.pages.contact', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function contactme(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'pesan' => 'required|string|regex:/^[\w\s\p{P}]+$/u',
        ]);
        Contact::create($request->all());

        return redirect()->route('portofolio.contactme')->with('success', 'Data Berhasil Ditambah');
    }

    // public function footer()
    // {
    //     $foot = User::first();

    //     return view('portofolio.app', compact('foot'));
    // }
}
