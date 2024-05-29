<x-app-layout>
    <div class="">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="">
            @csrf
            <textarea name="note" rows="10" class="" placeholder="Enter your note here"></textarea>
            <div class="">
                <a href="{{ route('note.index') }}" class="">Cancel</a>
                <button class="">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
