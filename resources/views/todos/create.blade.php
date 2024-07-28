<!-- resources/views/todos/create.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New To-Do') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('todos.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" required>
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description"></textarea>
                        </div>
                        <button type="submit" class="mt-4">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
