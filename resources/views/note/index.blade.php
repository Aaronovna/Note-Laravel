<x-app-layout>
    <div class="m-8 flex flex-col bg-white p-4 items-center outlined rounded-lg shadow-lg w-4/5">
        <div class="w-full flex md:flex-row flex-col justify-between">
            <form action="search.php" method="post" class="relative inline-flex">
                <input name="search" type="text" class="rounded shadow-sm w-96" placeholder="Search note">
                <button name="submit" class="absolute inset-y-0 right-1 my-auto bg-blue-200 hover:bg-blue-300 w-fit h-fit p-1 rounded shadow-sm" type="submit">Search</button>
            </form>
            <a href={{ route('note.create') }} class="w-fit bg-blue-200 p-2 rounded shadow-sm hover:bg-blue-300">
                New Note
            </a>
        </div>
        <div class="flex flex-col items-center w-full">
            @foreach ($notes as $note)
                <div class="rounded-md shadow-lg p-4 outlined my-2 bg-white w-full">
                    <div class="p-4 mb-4">
                        {{ Str::words($note->note, 100) }}
                    </div>
                    <div class="flex gap-2">
                        <a href={{ route('note.show', $note) }}
                            class="bg-blue-200 p-2 rounded shadow-sm hover:bg-blue-300">View</a>
                        <a href={{ route('note.edit', $note) }}
                            class="bg-blue-200 p-2 rounded shadow-sm hover:bg-blue-300">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-200 p-2 rounded shadow-sm hover:bg-red-300">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>
