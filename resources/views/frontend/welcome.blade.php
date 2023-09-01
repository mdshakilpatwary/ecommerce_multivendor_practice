<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice laravel</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
</head>
<body>
    <h1>hello! this is Welcome page</h1>

    <a href="{{route('about')}}">About</a>
    <a href="{{route('service')}}">service</a>
</body>
</html>