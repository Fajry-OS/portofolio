@extends('portofolio.app')
@section('content')
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Address</h3>
                            <p>{{ $data->alamat }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Contact Number</h3>
                            <p><a
                                    href="https://wa.me/{{ strpos($data->no_telp, '0') === 0 ? '62' . substr($data->no_telp, 1) : $data->no_telp }}">{{ $data->no_telp }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Email Address</h3>
                            <p><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Website</h3>
                            <p><a href="{{ route('portofolio.about') }}">MyPortofolio.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{ route('portofolio.contactme') }}" class="bg-light p-4 p-md-5 contact-form"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

                <div class="col-md-6 d-flex">
                    <div class="imgooo" style="background-image: url({{ asset('forlog/img/contact.png') }});">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
