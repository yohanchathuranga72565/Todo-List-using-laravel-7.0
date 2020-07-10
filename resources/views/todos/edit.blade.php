@extends('todos.layout')
@section('content')
    <h1 class="text-2xl border-b pb-4">Update This Todo list</h1>
    <x-alert />
    <form action="{{route('todo.update',$todo->id)}}" method="post" class="py-5 my-2">
        @csrf
        @method('patch')
        <input type="text" name = "title" value="{{$todo->title}}" class="py-2 px-2 rounded border" />
        <input type="submit" value = "Update" class="p-2 bg-white rounded border"/>
    </form>

    <a href="{{route('todo.index')}}" class="my-5 py-1 px-1 rounded bg-white-400 border cursor-pointer">Back</a>
@endsection