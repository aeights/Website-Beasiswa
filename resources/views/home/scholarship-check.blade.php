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
                    <form id="form-check" class="mb-5" action="{{ route('scholarship.result.check') }}" method="GET">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="nim" type="text" class="form-control" id="nim"
                                        placeholder="Nomor Induk Mahasiswa">
                                    <label for="nim">NIM</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Cek</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
