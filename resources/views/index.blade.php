@extends('layouts.app')

@section('title', 'Task List')

@section('content')

  @if(session()->has('message'))
    <div><span name="message">{{ session('message') }}</span></div>   
  @endif

  <div><a href="{{ route('task.create') }}">Add task</a></div>

  <div>Here are tasks!</div>
  
  @forelse ($tasks as $task)
    <div><a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a></div>
  @empty
    <div>There are no tasks!</div>  
  @endforelse  

@endsection