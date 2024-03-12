@extends('layouts.app')

@section('title', 'Task')

@section('content')

    <div class="task">
        <h1>{{ $task->title }}</h1> <a href="{{ route('task.edit', ['task' => $task]) }}">Edit</a>
        <h3>{{ $task->description }}</h3>
        <p>{{ $task->long_description }}</p>
        <p>{{ $task->created_at->diffForHumans() }}</p>
        <p>{{ $task->updated_at->diffForHumans() }}</p>
        <p>
            @if($task->completed)
                Completed
            @else 
                Not Completed
            @endif
        </p>
    </div>

    <div>
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit">
                Mark as  {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>
    </div>

    <div>
        <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

@endsection