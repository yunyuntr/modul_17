<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss')
</head>

<body>

    @extends('layouts.app')

    @section('content')
        @include('home-1')
    @endsection
    
    @vite('resources/js/app.js')
</body>

</html>
