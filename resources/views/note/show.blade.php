<x-app-layout>
    <div class="">
        <div class="">
            <h1 class="">Note: {{ $note->created_at }}</h1>
            <div class="">
                <a href="{{ route('note.edit', $note) }}" class="">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="">Delete</button>
                </form>
            </div>
        </div>
        <div class="">
            <div class="">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-app-layout>