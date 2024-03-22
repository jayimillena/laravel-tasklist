@extends('layouts.app')

@section('title', 'List of the tasks')

@section('content')

  @if(session()->has('success'))
    <div class="mb-10 rounded border border-green-400 bg-green-100 px-4 py-3"
         role="alert">
      <strong class="font-bold">Success!</strong>
      <div>{{ session('success') }}</div>
    </div>   
  @endif

  <h1 class="mb-4 text-2xl">@yield('title')</h1>

  <nav class="mb-4">
    <a class="font-medium text-grey-700 underline decoration-blue-500" href="{{ route('task.create') }}">Add task</a>
  </nav>

  <div class="mb-4">Here are tasks!</div>
  
  @forelse ($tasks as $task)
    <div><a href="{{ route('task.show', ['task' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a></div>
  @empty
    <div>There are no tasks!</div>  
  @endforelse  

@endsection