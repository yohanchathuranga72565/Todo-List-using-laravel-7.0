@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Update This Todo list</h1>
        <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer"><span class="fas fa-arrow-left"></span></a>
    </div>
    
    <x-alert />
    
    <form action="{{route('todo.update',$todo->id)}}" method="post" class="py-5 my-2">
        @csrf
        @method('patch')
        <div class="py-1">
            <input type="text" name = "title" value="{{$todo->title}}" class="p-2 rounded border" placeholder="Title"/>
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description">{{$todo->description}}</textarea>
        </div>
        <div class="py-1">
            <input type="submit" value = "Update" class="p-2 bg-white rounded border"/>
        </div>
    </form>
@endsection