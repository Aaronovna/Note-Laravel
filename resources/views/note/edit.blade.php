<x-app-layout>
    <div class="">
        <h1 class="">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="">
                <a href="{{ route('note.index') }}" class="">Cancel</a>
                <button class="">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>