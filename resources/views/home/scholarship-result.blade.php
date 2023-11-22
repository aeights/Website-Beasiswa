@extends('layouts.home')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Halaman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cek Hasil</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="wow fadeIn" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Contact</p>
                    <h1 class="display-5 mb-4">If You Have Any Query, Please Contact Us</h1>
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                        with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form id="form-preview">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->nim }}" name="nim" type="text" class="form-control bg-white"
                                        id="nim" placeholder="Nomor Induk Mahasiswa">
                                    <label for="nim">NIM</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->name }}" name="name" type="text" class="form-control bg-white"
                                        id="name" placeholder="Masukkan Nama Anda">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->email }}" name="email" type="email" class="form-control bg-white"
                                        id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->phone }}" name="phone" type="number" class="form-control bg-white"
                                        id="phone" placeholder="Nomor HP">
                                    <label for="phone">Nomor HP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->semester }}" name="semester" type="text" class="form-control bg-white"
                                        id="semester" placeholder="Semester">
                                    <label for="semester">Semester</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->ipk }}" name="ipk" type="number" step="any"
                                        class="form-control bg-white" id="ipk" placeholder="IPK">
                                    <label for="ipk">IPK</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->scholarship_type_id }}" name="scholarship_type" type="text" class="form-control bg-white"
                                        id="type" placeholder="Tipe Beasiswa">
                                    <label for="type">Tipe Beasiswa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input readonly value="{{ $data->status }}" name="status" type="text" class="form-control bg-white"
                                        id="status" placeholder="Status Ajuan">
                                    <label for="type">Status Ajuan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <p>Berkas</p>
                                    <img class="w-100 h-100 rounded" src="{{ $data->getFirstMediaUrl('file') }}" id="formFile">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
