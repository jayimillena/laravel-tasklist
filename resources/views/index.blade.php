@extends('layouts.app')

@section('title', 'Task List')

@section('content')
@isset($name)
  Hello {{ $name }}    
@endisset
@endsection