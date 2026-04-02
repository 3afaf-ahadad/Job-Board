<x-layout>
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
</x-layout>