<!-- resources/views/todos/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('To-Do Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">{{ $todo->title }}</h3>
                    <p>{{ $todo->description }}</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('todos.edit', $todo) }}" class="px-4 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-700 dark:bg-orange-700 dark:hover:bg-orange-500">
                            Edit
                        </a>

                        <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this to-do item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700 dark:bg-red-700 dark:hover:bg-red-500">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
