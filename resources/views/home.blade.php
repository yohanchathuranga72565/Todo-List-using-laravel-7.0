@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{-- @include('layouts.flash') --}}
                    <x-alert>
                        <p>Here is the response from image upload</p>
                    </x-alert>
                </div>

                <div class="card-body">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image"/>

                        <input type="submit" value="Upload"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
