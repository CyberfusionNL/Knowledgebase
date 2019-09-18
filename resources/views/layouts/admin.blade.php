<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cyberfusion Knowledgebase | {{ $page ?? 'Dashboard' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=new">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>

@yield('header')
@yield('content')

@include('partials.footer')

@yield('footer-scripts')

</body>
</html>
