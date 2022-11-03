<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=asset('css/styles.css')?>">

    <title>@yield('title')</title>
</head>

<body>
    @include('components.header-menu')
    <div class='container'>
        @yield('content')
    </div>
</body>

</html>
