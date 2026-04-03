<x-layout>
    <form action="{{route('listings.store')}}" method="POST">
    @csrf <input type="text" name="title" placeholder="Job Title">
    <input type="text" name="salary" placeholder="Salary">
    <textarea name="desc"></textarea>

    <button type="submit">Post Job</button>
    </form>
</x-layout>