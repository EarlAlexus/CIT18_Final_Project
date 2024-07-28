<!-- resources/views/todos/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('To-Do List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('todos.create') }}" class="text-blue-500">Create New To-Do</a>

                    @if($todos->isEmpty())
                        <p>No to-do items found.</p>
                    @else
                        <ul>
                            @foreach ($todos as $todo)
                                <li>
                                    <a href="{{ route('todos.show', $todo) }}" class="text-blue-500">{{ $todo->title }}</a>
                                    <a href="{{ route('todos.edit', $todo) }}" class="text-blue-500">Edit</a>
                                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
