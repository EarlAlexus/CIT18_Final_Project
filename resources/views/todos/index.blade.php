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
                    <a href="{{ route('todos.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-500">Create New To-Do</a>

                    @if($todos->isEmpty())
                        <p>No to-do items found.</p>
                    @else
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $todo->title }}</td>
                                        <td class="border px-4 py-2">{{ $todo->description }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('todos.edit', $todo) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                            <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
