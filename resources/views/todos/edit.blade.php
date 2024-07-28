<!-- resources/views/todos/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit To-Do') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('todos.update', $todo) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                            <input 
                                type="text" 
                                name="title" 
                                id="title" 
                                value="{{ $todo->title }}" 
                                required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-gray-500 dark:focus:border-gray-500"
                            >
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Description</label>
                            <textarea 
                                name="description" 
                                id="description" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:ring-gray-500 dark:focus:border-gray-500"
                            >{{ $todo->description }}</textarea>
                        </div>
                        <button 
                            type="submit" 
                            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-500"
                        >
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
