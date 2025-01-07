<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold underline">
            Hello, world!
        </h1>
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create a New Task
        </a>
        @if($tasks->isEmpty())
            <p class="text-red-500">No tasks available.</p>
        @else
            <ul>
                @foreach($tasks as $task)
                    <li class="mb-2 flex justify-center items-center w-full">
                        <form action="{{ route('tasks.status', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">
                                {{ $task->status ? 'Mark as Pending' : 'Mark as Completed' }}
                            </button>
                        </form>
                        <span class="ml-2">{{ $task->title }}</span>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded ml-2">
                            Edit
                        </a>
                        <form action="{{ route('tasks.delete', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded ml-2">
                                Delete
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>