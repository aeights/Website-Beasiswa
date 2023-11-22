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
                    <li class="breadcrumb-item active" aria-current="page">Daftar Beasiswa</li>
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
                    <form action="{{ route('scholarship.apply.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="nim" type="text" class="form-control" id="nim"
                                        placeholder="Nomor Induk Mahasiswa">
                                    <label for="nim">NIM</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Masukkan Nama Anda">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="phone" type="number" class="form-control" id="phone"
                                        placeholder="Nomor HP">
                                    <label for="phone">Nomor HP</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="semester" class="form-select" id="semester">
                                        <option selected>Pilih Semester</option>
                                        <option value="1">Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                        <option value="4">Empat</option>
                                        <option value="5">Lima</option>
                                        <option value="6">Enam</option>
                                        <option value="7">Tujuh</option>
                                        <option value="8">Delapan</option>
                                    </select>
                                    <label for="semester">Semester</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="ipk" type="number" step="any" class="form-control" id="ipk"
                                        placeholder="IPK">
                                    <label for="ipk">IPK</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="scholarship_type" class="form-select" id="type">
                                        <option selected>Pilih Tipe Beasiswa</option>
                                        @foreach ($scholarships as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="type">Tipe Beasiswa</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="file" class="form-control bg-white" type="file" id="formFile">
                                    <label for="formFile">Berkas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="button-daftar" class="btn btn-primary py-3 px-5" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var nameInput = document.getElementById('nim');
            var ipkInput = document.getElementById('ipk');
            var scholarshipInput = document.getElementById('type');
            var fileInput = document.getElementById('formFile');
            var submitButton = document.getElementById('button-daftar');

            nameInput.addEventListener('blur', function() {
                var randomIpk = (Math.random() * (4.00 - 0.00) + 0.00).toFixed(2);
                ipkInput.value = randomIpk;
                console.log(randomIpk);
                if (parseFloat(randomIpk) < 3) {
                    scholarshipInput.disabled = true;
                    fileInput.disabled = true;
                    submitButton.disabled = true;
                } else {
                    scholarshipInput.disabled = false;
                    fileInput.disabled = false;
                    submitButton.disabled = false;
                    scholarshipInput.focus();
                }
            });
        });
    </script>
@endpush
