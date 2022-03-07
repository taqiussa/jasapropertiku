@extends('layouts.guest')
@push('styles')
    @livewireStyles()
@endpush
@section('content')
    <div class="min-vh-100 my-5 d-flex justify-content-center row px-2">
        @include('partials.user.user-submenu')
        @livewire('user.user-password')
    </div>
@endsection
@push('scripts')
    @livewireScripts()
@endpush
