@extends('layouts.app')

@section('title', 'Task List')

@section('content')

  <div>Here are tasks!</div>
  @forelse ($tasks as $task)
    <div><a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a></div>
  @empty
    <div>There are no tasks!</div>  
  @endforelse  

@endsection