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
    <div style="color: green; border: 1px solid green; padding: 10px; margin-bottom: 20px;">
        {{session('success')}}
    </div>
    @endif

    {{$slot}}
</body>

</html>