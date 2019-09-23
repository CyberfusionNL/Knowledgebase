@section('header')
    <header class="row no-gutters d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 d-flex align-items-center">
                    <a href="{{ route('home') }}" class="logo">
                        {{ env('APP_NAME', 'Knowledgebase') }}
                    </a>
                </div>
                <div class="col-md-9">

                    <nav class="nav float-right align-items-center">
                        @auth
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            <a class="nav-link" href="{{ route('admin.articles') }}">Artikelen</a>
                            <form method="post" action="{{ route('logout') }}">
                                {{ csrf_field() }}
                                <button type="submit" class="nav-link border-0" style="background-color: transparent">Uitloggen</button>
                            </form>
                            @if(hasTwofactor(auth()->user()))
                            <form method="post" action="{{ route('lock') }}">
                                {{ csrf_field() }}
                                <button type="submit" class="nav-link border-0" style="background-color: transparent">Vergrendel</button>
                            </form>
                            @endif()
                        @endauth
                        @guest
                            <a class="nav-link" href="#">Login</a>
                        @endguest
                    </nav>
                </div>
            </div>
        </div>
    </header>
@endsection
