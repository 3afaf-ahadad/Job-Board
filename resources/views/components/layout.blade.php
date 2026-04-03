<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <h1>JobBoard App</h1>
    </nav>

    @if(session()->has('success'))
    <div x-data="{show : true}"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="transition-opacity duration-500">
        {{session('success')}}
    </div>
    @endif

    {{$slot}}
</body>

</html>