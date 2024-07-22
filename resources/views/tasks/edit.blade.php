@extends('layout.template')

@section('title', 'Edit Task')

@section('content')
  <div class="max-w-lg mx-auto mt-12 px-4">
    <h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">Edit Task</h1>
    <div class="w-full max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow sm:p-8 md:p-10 white:bg-gray-800 gray:border-gray-700">
      @include('form', ['task' => $task])
    </div>
  </div>
@endsection
