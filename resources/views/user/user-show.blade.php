@extends('layouts.guest')
@section('content')
    <div class="min-vh-100 my-5 d-flex justify-content-center row px-2">
        @include('partials.user.user-submenu')
        <div class="card col-lg-6 mx-1 my-1 py-1">
            <div class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
                <span>
                    User Profile
                </span>
            </div>
            <div class="card-body">
                <div class="img my-2">
                    <img src="{{ asset('images/design.png') }}" alt="" class="img-thumbnail rounded-circle">
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingNama"  value="{{ $user->name }}" disabled>
                    <label for="floatingNama">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingAlamat"  value="{{ $user->name }}" disabled>
                    <label for="floatingAlamat">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingUmur"  value="{{ $user->id }}" disabled>
                    <label for="floatingUmur">Umur</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingAlamat"  value="{{ $user->name }}" disabled>
                    <label for="floatingAlamat">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingJenisKelamin" aria-label="Floating label select example"  disabled>
                        <option selected value="{{ $user->name }}">{{ $user->name}}</option>
                    </select>
                    <label for="floatingJenisKelamin">Jenis Kelamin</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingNoWhatsApp" value="{{ $user->name }}" disabled>
                    <label for="floatingNoWhatsApp">No. WhatsApp</label>
                </div>
            </div>
        </div>
    </div>
@endsection
