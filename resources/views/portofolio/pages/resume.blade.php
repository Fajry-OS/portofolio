@extends('portofolio.app')
@section('content')
    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav id="navi">
                        <ul>
                            <li><a href="#page-1">Education</a></li>
                            <li><a href="#page-2">Experience</a></li>
                            <li><a href="#page-4">Certification</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <div id="page-1" class= "page one">
                        <h2 class="heading">Education</h2>
                        @foreach ($educations as $education)
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-ideas"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">{{ $education->tgl_mulai }} - {{ $education->tgl_selesai }}</span>
                                    <h2>{{ $education->pendidikan }}</h2>
                                    <span class="position">{{ $education->jurusan }}</span>
                                    @if (!empty($education->gpa))
                                        <p><i>GPA: {{ $education->gpa }}</i></p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="page-2" class= "page two">
                        <h2 class="heading">Experience</h2>
                        @foreach ($experiences as $experience)
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-ideas"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">{{ $experience->tgl_mulai }} -
                                        @if ($experience->tgl_selesai)
                                            {{ $experience->tgl_selesai }}
                                        @else
                                            Sekarang
                                        @endif
                                    </span>
                                    <h2>{{ $experience->posisi }}</h2>
                                    <span class="position">{{ $experience->perusahaan }}</span>
                                    <p>{{ $experience->deskripsi }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="page-4" class= "page four">
                        <h2 class="heading">Certificate</h2>
                        @foreach ($certificates as $certificate)
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-ideas"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">{{ $certificate->tgl_sertifikat }}</span>
                                    <h2>{{ $certificate->nama_sertifikat }}</h2>
                                    <span class="position">{{ $certificate->penyelenggara }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
