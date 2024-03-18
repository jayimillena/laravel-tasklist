@extends('layouts.app')

@section('title', 'Task')

@section('content')

    <div class="task mb-4">
        <a class="font-medium text-grey-700 underline decoration-blue-500" href="{{ route('tasks.index') }}"><- Go back the task page</a>
        <h1 class="mb-4 text-slate-700">{{ $task->title }}</h1> 
        
        <h3 class="mb-4 text-slate-700">{{ $task->description }}</h3>
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
        <p class="mb-4 text-sm">Created {{ $task->created_at->diffForHumans() }} • Updated {{ $task->updated_at->diffForHumans() }}</p>
        <p>
            @if($task->completed)
                <span class="font-medium text-green-500">Completed</span>
            @else 
            <span class="font-medium text-red-500">Not Completed</span>
            @endif
        </p>
    </div>

    <div class="flex gap-2">
        <div>
            <a  href="{{ route('task.edit', ['task' => $task]) }}"
                class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">Edit</a>
        </div>
    
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50" type="submit">
                Mark as  {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>
        
        <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50" type="submit">Delete</button>
        </form>
    </div>

@endsection