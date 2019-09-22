<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cyberfusion Knowledgebase | {{ $page ?? 'Home' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $desc ?? 'Instructies, tips en informatie over de hosting van cyberfusion' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $desc ?? 'Instructies, tips en informatie over de hosting van cyberfusion' }}">
    <meta name="twitter:title" content="{{ $page ?? 'Cyberfusion Knowledgebase | Home' }}">
    <meta name="twitter:image" content="https://kb-dev.cyberfusion.space/img/logo_twitter.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=new">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script type="text/javascript" src="https://quriobot.com/qb/widget/A7VaDrlxxOrB6xgO/wj0M8mVR7LmRW4qY" async defer></script>
</head>
<body>


    <header class="row no-gutters d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 d-flex align-items-center">

                    <a href="/" class="logo">
                        <svg id="logo-ls" data-name="logo ls" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 238 33">
                            <defs>
                                <clipPath transform="translate(0 0)">
                                    <rect width="238" height="33" style="fill:none"></rect>
                                </clipPath>
                            </defs>
                            <title>logo</title>
                            <g style="clip-path:url(#clip-path)">
                                <path d="M44.76,22.33a12.16,12.16,0,0,0,4.54-.91v3.65a14.3,14.3,0,0,1-5.27,1c-5.56,0-8.64-3.32-8.64-9.39S38.47,7.27,44,7.27a14.1,14.1,0,0,1,5.27,1V12a12,12,0,0,0-4.54-.88c-3.07,0-5,.92-5,5.63s1.9,5.63,5,5.63M66.06,7.57,62,20.28,57.94,7.57H53.29l6.55,17.28c-.62,1.72-1.9,4.42-3.51,4.42a5.42,5.42,0,0,1-2.09-.44v3.66A8.12,8.12,0,0,0,57,33c1.9,0,4.53-.8,6.73-6.76L70.71,7.57Zm21.07,8.69c0,4.17-1,6.07-3.77,6.07-1.94,0-3.3-.44-3.3-2V11a12.73,12.73,0,0,1,2.86-.29c2.52,0,4.21,1.2,4.21,5.51m4.42.22c0-6-3-9.21-8.49-9.21a15.81,15.81,0,0,0-3,.3v-7H75.68V20c0,3,2,6.13,7.68,6.13,2.45,0,8.19-.94,8.19-9.61m9.58-1.17c.26-3.25,1.5-4.49,3.66-4.49,2.34,0,3.47,2.19,3.7,4.49h-7.36M112,20.9a14.23,14.23,0,0,1-6.22,1.43c-2.13,0-4.39-.47-4.65-4h11.74a20.78,20.78,0,0,0,.08-2.27c0-4.57-2.45-8.84-8.16-8.84-6,0-8.16,4.2-8.16,9.65,0,7.74,4.87,9.2,8.49,9.2A14.32,14.32,0,0,0,112,24.45V20.9M127.73,7.27a24.67,24.67,0,0,0-9.11,1.94V25.8H123V11.69a18.51,18.51,0,0,1,4.72-.62V7.27m11.62.3c0-3.33,1.06-4,3.22-4a8.24,8.24,0,0,1,1,.07V.19A9.27,9.27,0,0,0,141.77,0C138.29,0,135,1.54,135,7.57h-3.11v3.76H135V25.8h4.39V11.33h4.21V7.57h-4.21m20.53,0V18.13c0,2.92-1.09,4.13-3.84,4.13s-3.8-1.21-3.8-4.13V7.57h-4.43v10c0,5.38,3.07,8.55,8.23,8.55s8.27-3.17,8.27-8.55v-10Zm23,13.19c0-7.46-8.7-5.37-8.7-8.19,0-1.17,1.31-1.53,3.14-1.53a9.74,9.74,0,0,1,4.21.88V8.59a9.91,9.91,0,0,0-5-1.32c-3.62,0-6.77,1.87-6.77,5.71,0,6.32,8.71,4.56,8.71,7.56,0,1-.22,1.75-3,1.75a9.32,9.32,0,0,1-5.16-1.6v3.9a11.49,11.49,0,0,0,5.78,1.5c4.17,0,6.8-2.3,6.8-5.33m5.62,5h4.39V7.57h-4.39Zm-.07-20.72H193v-4h-4.5ZM211.6,16.7c0,4.83-1.65,5.78-4.24,5.78s-4.25-.95-4.25-5.78,1.65-5.77,4.25-5.77,4.24,1,4.24,5.77m4.39,0c0-6.06-3.07-9.39-8.63-9.39s-8.64,3.33-8.64,9.39,3.08,9.4,8.64,9.4S216,22.77,216,16.7m22-1.86c0-4.75-3-7.57-8.08-7.57a19,19,0,0,0-8.38,2V25.8h4.39V11.47a19.17,19.17,0,0,1,3.4-.32c4,0,4.32,1.71,4.32,3.32V25.8H238v-11" transform="translate(0 0)" style="fill:#fff"></path>
                            </g>
                            <polygon points="0 26.22 10.35 32.23 10.35 26.8 4.93 23.67 4.67 23.52 4.67 23.23 4.67 16.65 4.67 15.77 5.43 16.21 10.36 19.11 10.35 13.66 0 7.69 0 26.22" style="fill:#3c92ff"></polygon>
                            <polygon points="21.71 7.69 11.36 13.66 11.36 19.12 21.71 13.08 21.71 7.69" style="fill:#3c92ff"></polygon>
                            <polygon points="11.36 26.8 11.36 32.23 21.71 26.19 21.71 20.83 11.36 26.8" style="fill:#3c92ff"></polygon>
                            <polygon points="11.11 7.29 10.86 7.43 10.61 7.29 5.18 4.16 0.5 6.85 10.86 12.79 21.21 6.85 16.54 4.16 11.11 7.29" style="fill:#00dada"></polygon>
                            <polygon points="10.86 25.93 21.21 19.96 16.54 17.26 6.18 23.23 10.86 25.93" style="fill:#00dada"></polygon>
                        </svg>
                    </a>
                    <span class="d-none d-md-block logo-sub" style="color:#ff6464;"><strong>KNOWLEDGEBASE</strong></span>

                </div>
                <div class="col-md-4 offset-md-1 d-none d-md-block">

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
    <script src="/js/default.js?v=new"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/fontawesome.min.js"></script>
</body>
</html>
