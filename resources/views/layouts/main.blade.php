<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/styles.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1 id="h1-hidden">VALORANT: Riot Games’ competitive 5v5 character-based tactical shooter</h1>
        <nav class="navbar sticky-top navbar-expand-sm navbar-dark black-bg py-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img 
                        src="{{ asset('/imgs/logo.png') }}" 
                        alt="Logo Valorant" 
                        width="100"
                    >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-sm-flex justify-content-sm-end" id="navbarHeader">
                    <div class="navbar-nav">
                        <a class="nav-link text-center" href="{{ route('home') }}">
                            Inicio
                        </a>
                        <a class="nav-link text-center" href="{{ route('news.index') }}">
                            Noticias
                        </a>
                        <a class="nav-link text-center" href="{{ route('characters.index') }}">
                            Agentes
                        </a>

                        @auth
                            <form action="{{ route('auth.logout')}}" method="post">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link mx-auto">
                                    Logout
                                    <span class="name-user">
                                        ({{Auth::user()->name}})
                                    </span>
                                </button>
                            </form>
                        @elseguest
                            <a class="nav-link text-center" href="{{ route('auth.formLogin') }}">Iniciar Sesión</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    

    <!-- <main class="container my-4"> -->
    <main>
        @yield('main')
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    @if(Session::has('message.success'))
        <div id="toast-alert" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ Session::get('message.success') }}
                </div>
                <button type="button" 
                    class="btn-close me-2 m-auto" 
                    data-bs-dismiss="toast" 
                    aria-label="Close">
                </button>
            </div>
        </div>

        <script>
            var toast = new bootstrap.Toast(document.getElementById('toast-alert'));
            toast.show()
        </script>
    @endif

</body>
</html>