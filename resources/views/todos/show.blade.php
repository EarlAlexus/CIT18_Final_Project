@extends('layouts.app')

@section('content')
    <h1>{{ $todo->title }}</h1>
    <p>{{ $todo->description }}</p>
    <a href="{{ route('todos.index') }}">Back to list</a>
@endsection
