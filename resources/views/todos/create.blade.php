@extends('todos.layout')
@section('content')
        <h1 class="text-2xl border-b pb-4">What next you need TO-DO</h1>
        <x-alert />
        <form action="/todos/create" method="post" class="py-5 my-2">
            @csrf
            <input type="text" name = "title" class="py-2 px-2 rounded border" />
            <input type="submit" value = "create" class="p-2 bg-white rounded border"/>
        </form>

        <a href="/todos" class="my-5 py-1 px-1 rounded bg-white-400 border cursor-pointer">Back</a>
        @endsection
    