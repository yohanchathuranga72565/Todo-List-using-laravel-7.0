@extends('todos.layout')
@section('content')
        <h1 class="text-2xl">What next you need TO-DO</h1>
        <x-alert />
        <form action="/todos/create" method="post" class="py-5 border">
            @csrf
            <input type="text" name = "title" class="py-2 px-2 rounded border" />
            <input type="submit" value = "create" class="p-2 rounded border"/>
        </form>
        @endsection
    