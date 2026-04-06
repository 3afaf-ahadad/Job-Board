<x-layout>
    <form action="{{ route('listings.update', ['id' => $listing->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $listing->title }}" placeholder="Title">
    <input type="text" name="salary" value="{{ $listing->salary }}" placeholder="Salary">
    <textarea name="desc"> {{$listing->desc}} </textarea>

    <button type="submit">Update Job</button>
    </form>
</x-layout>