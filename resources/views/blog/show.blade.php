@extends('layouts.app')
@section('page-name', 'Blog')
{{-- @section('custom-css', asset('css/trips.css')) --}}


@section('main-content')
    <main id="blog_main">
        <h1 class="text-center my-5"> Our blog </h1>

        <div class="container">
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-12 my-2">
                        <div class="card text-start">
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->heading }}</h4>
                                <p class="card-text">
                                    {{ strlen($post->content) > 10 ? substr($post->content, 0, 10) . '...' : $post->content }}
                                <div class="text-end">{{ $post->date }}</div>
                                </p>
                                <a href="#" class="btn btn-secondary">Read more...</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center fs-5 fst-italic text-light">No avaiable voyages at the moment. Try again later.
                    </p>
                @endforelse
            </div>
        </div>
    </main>


@endsection
