<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--    {{$menus}}--}}
@foreach($menus as $m)
    <p>
        {{$m->title}}<br>
        {{$m->id}}<br>
        {{$m->synopsis}}<br>
{{--        {{$m->author->name}}<br>--}}
    </p>
    <hr>
    @endforeach
</body>
</html>
