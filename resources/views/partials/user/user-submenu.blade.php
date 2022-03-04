<div class="card col-lg-3 mx-1 my-1 py-1">
    <div class="list-group list-group-flush fs-4">
        <a href="{{ route('user.index') }}" 
            class="list-group-item list-group-item-action 
            @if (Request::routeIs('user.index'))
            bg-success bg-opacity-25
            @endif
            " 
            role="button">
            Akun
        </a>
        <a href="{{ route('user.edit', auth()->user()->id) }}"  class="list-group-item list-group-item-action 
            @if (Request::routeIs('user.edit'))
            bg-success bg-opacity-25
            @endif
            " 
            role="button">
            Ubah Profil
        </a>
        <a href="{{ route('user.show', auth()->user()->id) }}" class="list-group-item list-group-item-action 
            @if (Request::routeIs('user.show'))
            bg-success bg-opacity-25
            @endif
            " 
            role="button">
            Ubah Password
        </a>
        <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" 
            class="list-group-item list-group-item-action" 
            role="button">
            {{ __('Logout') }}
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            </form>
        </a>
    </div>
</div>