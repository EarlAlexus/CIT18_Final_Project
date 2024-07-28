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
                        <div>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $todo->title }}" required>
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description">{{ $todo->description }}</textarea>
                        </div>
                        <button type="submit" class="mt-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
