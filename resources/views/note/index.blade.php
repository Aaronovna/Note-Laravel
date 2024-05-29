<x-app-layout>
    <div class="">
        <div class="m-8 flex flex-col">
            <a href={{ route('note.create') }} class="w-fit bg-blue-200 p-2 rounded shadow-sm">
                New Note
            </a>
            <div class="flex flex-wrap gap-4 justify-start">
                @foreach ($notes as $note)
                    <div class="rounded-md shadow-lg p-4 outline outline-1 outline-gray-400 my-2 bg-white w-80">
                        <div class="p-4 mb-4">
                            {{ Str::words($note->note, 100) }}
                        </div>
                        <div class="flex gap-2">
                            <a href={{ route('note.show', $note) }} class="bg-blue-200 p-2 rounded shadow-sm">View</a>
                            <a href={{ route('note.edit', $note) }} class="bg-blue-200 p-2 rounded shadow-sm">Edit</a>
                            <form action="{{ route('note.destroy', $note) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 p-2 rounded shadow-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
