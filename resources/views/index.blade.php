@extends('layouts.app')

@section('title', 'Task List')

@section('content')

  @if(session()->has('success'))
    <div><span name="success">{{ session('success') }}</span></div>   
  @endif

  <div><a href="{{ route('task.create') }}">Add task</a></div>

  <div>Here are tasks!</div>
  
  @forelse ($tasks as $task)
    <div><a href="{{ route('task.show', ['task' => $task->id]) }}">{{ $task->title }}</a></div>
  @empty
    <div>There are no tasks!</div>  
  @endforelse  

@endsection