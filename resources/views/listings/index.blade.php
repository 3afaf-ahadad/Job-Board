<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JobBoard | Home</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    @if(count($listings) == 0)
    <p>No jobs here...</p>
    @else
    <h1>All Job jobs</h1>
    @foreach($listings as $job)

    <a href="{{route('listings.show', $job->id )}}">
        <h4>{{$job->title}} - {{$job->user->name}}</h4>
    </a>
    <p> {{$job->desc}} </p>
    @endforeach
    @endif
</body>

</html>