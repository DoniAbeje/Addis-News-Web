<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>ADDIS NEWS - @yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressive-image.js/dist/progressive-image.css">

</head>
<body>

@component('component.header')
    @yield('page_title')
@endcomponent
@yield('content')
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.js"></script>

</body>

</html>