@extends('layouts.app')

@section('title', 'Task')

@section('content')

    <div class="task">
        <h1>{{ $task->title }}</h1>
        <h3>{{ $task->description }}}</h3>
        <p>{{ $task->long_description }}}</p>
        <p>{{ $task->created_at->diffForHumans() }}</p>
        <p>{{ $task->updated_at->diffForHumans() }}</p>
    </div>
    
@endsection