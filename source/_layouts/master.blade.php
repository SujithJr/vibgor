<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vibhgyar</title>
    <link rel="icon" href="{{ $page->baseUrl }}/assets/images/icon-11.png">
    <link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://unpkg.com/ionicons@4.5.0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flexboxgrid2@7.2.1/flexboxgrid2.css">
    <script src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/6f3f390ba1.js"></script>
</head>
<body>
    @if($page->getFilename() != 'index')
        @include('_partials.header')
    @endif

    @yield('body')
        
    @if($page->getFilename() != 'index')
        @include('_partials.footer')
    @endif
</body>
</html>
