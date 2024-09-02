@extends('portofolio.app')

@section('content')
    <section class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Hey! I am</span>
                        <h1>{{ $data->name }}</h1>
                        <h2>I'm a
                            <span class="txt-rotate" data-period="2000" data-rotate='[ "{{ $data->tagline }}."]'></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="mouse goto-here">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="height: 650px; background-image:url({{ asset('storage/image/' . $data->gambar) }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>{{ $data->deskripsi }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{ $data->name }}</span></li>
                                <li class="d-flex"><span>Address:</span> <span>{{ $data->alamat }}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{ $data->email }}</span></li>
                                <li class="d-flex"><span>Phone: </span> <span>{{ $data->no_telp }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social Icons -->
                    <div class="social-icons mt-4">
                        <a class="social-icon mr-2" href="{{ $data->linkedin }}" target="_blank" title="LinkedIn">
                            <i class="fab fa-linkedin fa-3x"></i>
                        </a>
                        <a class="social-icon mr-2" href="{{ $data->instagram }}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram fa-3x"></i>
                        </a>
                        <a class="social-icon mr-2" href="{{ $data->facebook }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook fa-3x"></i>
                        </a>
                        <a class="social-icon"
                            href="https://wa.me/{{ strpos($data->no_telp, '0') === 0 ? '62' . substr($data->no_telp, 1) : $data->no_telp }}"
                            target="_blank" title="Whatsapp">
                            <i class="fab fa-whatsapp fa-3x"></i>
                        </a>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
