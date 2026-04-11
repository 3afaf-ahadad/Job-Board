<x-layout>
    @if(count($listings) == 0)
    <p>No jobs here...</p>
    @else
    <h1>All Job jobs</h1>
    <h3>
        <a href="{{route('listings.create')}}">Post a Job</a>
    </h3>
    <br>
    <hr>
    @foreach($listings as $job)

    <a href="{{route('listings.show', $job->id )}}">
        <h4>{{$job->title}} - {{$job->user->name}}</h4>
    </a>
    <a href="{{route('listings.edit', $job->id)}}">Edit</a>
    <p> {{$job->desc}} </p>
    <hr>
    @endforeach
    @endif
</x-layout>