<x-layout>
    <form action="{{ route( 'listing.show', [id => $listing->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $listing->title }}" placeholder="Title">
    <input type="text" name="salary" value="{{ $listing->salary }}" placeholder="Salary">
    <textarea name="desc"> {{$listing->desc}} </textarea>

    <button type="submit">Update Job</button>
    </form>
</x-layout>