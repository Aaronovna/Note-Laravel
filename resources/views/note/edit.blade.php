<x-app-layout>
    <div class="m-8 flex flex-col bg-white p-4 outlined rounded-lg shadow-lg w-4/5">
        <p class="mb-4 text-lg">Edit Note</p>
        <form action="{{ route('note.update', $note) }}" method="POST" class="relative">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" class="border rounded-lg resize-none w-full" placeholder="Enter your note here">{{ $note->note }}</textarea>
            <div class="flex gap-2">
                <a href="{{ route('note.index') }}" class="bg-red-200 p-2 rounded shadow-sm hover:bg-red-300">Cancel</a>
                <button class="bg-blue-200 p-2 rounded shadow-sm hover:bg-blue-300">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>