@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')

  <form 
    method="POST" 
    action="{{ isset($task) ? route('task.update', ['task' => $task]) : route('task.store') }}">
    @csrf
    @isset($task) @method('PUT') @endisset
    <div>
      <label class="label" for="title">Title</label>
      <input type="text" name="title" id="title"  value="{{ $task->title ?? old('title') }}"/>
      @error('title')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label class="label" for="description">Description</label>
      <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
      @error('description')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div> 
      <label class="label" for="long_description">Long Description</label>
      <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
      @error('long_description')
        <p>{{ $message }}</p>
      @enderror
    </div>
    
    <div>
      <button class="" type="submit">
        @isset($task)
          Update Task
        @else 
          Add Task  
        @endisset
      </button>
    </div>
  </form>

@endsection