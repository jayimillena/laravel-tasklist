@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')

  <form 
    method="POST" 
    action="{{ isset($task) ? route('task.update', ['task' => $task]) : route('task.store') }}">
    @csrf
    @isset($task) @method('PUT') @endisset
    <div class="mb-4">
      <label class="block uppercase text-slate-700 mb-2" for="title">Title</label>
      <input class="shadow-sm apperance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none" type="text" name="title" id="title"  value="{{ $task->title ?? old('title') }}"/>
      @error('title')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-4">
      <label class="block uppercase text-slate-700 mb-2" for="description">Description</label>
      <textarea class="shadow-sm apperance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none" name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
      @error('description')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div> 
      <label class="block uppercase text-slate-700 mb-2" for="long_description">Long Description</label>
      <textarea class="shadow-sm apperance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none" name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
      @error('long_description')
        <p>{{ $message }}</p>
      @enderror
    </div>
    
    <div class="mb-4">
      <button class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50" type="submit">
        @isset($task)
          Update Task
        @else 
          Add Task  
        @endisset
      </button>
    </div>
  </form>

@endsection