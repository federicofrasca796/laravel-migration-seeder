@extends('layouts.app')
@section('page-name', 'Blog')
{{-- @section('custom-css', asset('css/trips.css')) --}}


@section('main-content')
    <main id="blog_main">
        <h1 class="text-center my-5"> Our blog </h1>

        <div class="container">
            <div class="row">
                <div class="col-12 my-2">
                    <div class="card text-start">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->heading }}</h4>
                            <p class="card-text">
                                {{ $post->content }}
                            <div class="text-end">{{ $post->date }}</div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
