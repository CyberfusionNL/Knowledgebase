<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $page ?? env('APP_NAME', 'Knowledgebase') }} | {{ $page ?? 'Home' }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $desc ?? 'Find information' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $desc ?? 'Find information' }}">
    <meta name="twitter:title" content="{{ $page ?? env('APP_NAME', 'Knowledgebase') .' | Home' }}">
    <meta name="twitter:image" content="/img/logo_twitter.png">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
    <header class="row no-gutters d-flex align-items-center">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-2 d-flex align-items-center">
                    <a href="/" class="navbar-brand">
                        {{env('APP_NAME', 'Knowledgebase')}}
                    </a>
                </div>
                <div class="col-md-4 offset-md-6 d-none d-md-block">
                    <form class="restyle" method="get" action="{{route('article.search')}}">
                        <div class="form-group">
                            <div class="input-group-prepend"><i class="fa fa-loop"></i></div>
                            <input type="text" name="search" placeholder="Zoek in de knowledgebase" class="form-control w-100">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </header>
    <!-- Header -->
    @yield('header')

    @yield('content')

    @include('partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/fontawesome.min.js"></script>

    @yield('custom-scripts')
</body>
</html>
