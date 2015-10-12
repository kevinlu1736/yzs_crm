<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="rest">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Recipe</title>
    <link rel="stylesheet" href="{{ asset('/css/' . $pageName . '.css') }}">
</head>
<body>
<div class="container" id="content">

    @yield('content')
    <p>pagename is: {{ $pageName }}</p>
</div>

<script src="{{ asset('/js/' . $pageName . '.js') }}"></script>
</body>

</html>
