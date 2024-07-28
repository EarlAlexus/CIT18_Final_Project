@extends('layouts.app')

@section('content')
    <h1>Edit To-Do</h1>
    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $todo->title }}">
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $todo->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
