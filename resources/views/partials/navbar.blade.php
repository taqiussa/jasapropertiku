<nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom border-3 border-warning shadow sticky-lg-top">
    <div class="container">
        <a class="navbar-brand text-warning fs-2" href="{{ route('posts') }}">
            {{-- <img src="{{ asset('images/logo smp.jpg') }}" class="img img-thumbnail rounded-circle" width="75"/> --}}
            <svg style="width:50px;height:50px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M13,7H15V15A2,2 0 0,1 13,17H11A2,2 0 0,1 9,15V14H11V15H13V7M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M5,5V19H19V5H5Z" />
            </svg>
            Jasa Propertiku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-3">
                <li class="nav-item"><a
                        class="nav-link {{ Request::routeIs('posts') ? 'active border-bottom border-4 border-warning' : '' }}"
                        href="{{ route('posts') }}">Properti</a></li>
            </ul>
            <div class="d-flex">
                @guest
                    @if (Request::routeIs('login'))
                        <a href="{{ route('register') }}" class="btn btn-outline-warning mx-2">Daftar</a>
                    @elseif (Request::routeIs('register'))
                        <a href="{{ route('login') }}" class="btn btn-outline-light mx-2">Masuk</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light mx-2">Masuk</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-warning mx-2">Daftar</a>
                    @endif
                @else
                <a href="{{ route('user.index') }}" class="btn btn-outline-light mx-2">Hallo , {{ auth()->user()->name }}</a>
                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <a class="btn btn-outline-warning" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    @csrf
                </form> --}}
                @endguest
            </div>
        </div>
    </div>
</nav>
