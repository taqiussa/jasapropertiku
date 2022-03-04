@extends('layouts.guest')
@section('content')
    <div class="my-5 d-flex justify-content-center row px-2">
        @include('partials.user.user-submenu')
        <div class="card col-lg-6 mx-1 my-1 py-1">
            <div class="card-header fs-3 border border-success border-bottom-0 border-top-0 border-5 d-flex justify-content-between bg-success bg-opacity-10">
                <span>
                    Ubah Password
                </span>
                <img src="{{ asset('images/design.png') }}" alt="" class="img img-thumbnail rounded-circle w-25">
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingNama" placeholder="Nama Lengkap..."
                        autocomplete="off">
                    <label for="floatingNama">Password Lama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingAlamat" placeholder="Alamat">
                    <label for="floatingAlamat">Password Baru</label>
                </div>
            </div>
        </div>
    </div>
@endsection
