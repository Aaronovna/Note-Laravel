<x-app-layout>
    <div class="m-8 flex flex-col bg-white p-4 outlined rounded-lg shadow-lg w-4/5">
        <div class="">
            <p class="mb-4 text-lg">Note: {{ $note->created_at }}</p>
            <div class="mb-2">
                <div class="">
                    {{ $note->note }}
                </div>
            </div>
            <div class="">
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="flex gap-2">
                        <a href="{{ route('note.edit', $note) }}" class="bg-blue-200 p-2 rounded shadow-sm hover:bg-blue-300">Edit</a>
                        <a href="{{ route('note.index') }}" class="bg-red-200 p-2 rounded shadow-sm hover:bg-red-300">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>