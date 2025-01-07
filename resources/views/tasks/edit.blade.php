@extends('layout')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Task Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <button type="submit">Update Task</button>
    </form>
@endsection