@extends('portofolio.app')
@section('content')
    <section class="ftco-section" id="services-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skill</h1>
                    <h2 class="mb-4">Skill</h2>
                    <p>Berikut ini adalah skill-skill yang saya miliki, yaitu:</p>
                </div>
            </div>
            <div class="row">
                @foreach ($datas as $data)
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1 shadow">
                            <span class="icon">
                                <i class="flaticon-idea"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">{{ $data->nama_skill }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
