<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <nav>
        <h1>JobBoard App</h1>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>
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