<!-- resources/views/tasks/create.blade.php -->
@extends('layout')

@section('content')
    <h1>Create a New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" name="title" id="title" required>
        <button type="submit">Create Task</button>
    </form>
@endsection
