@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="container">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->slug }}</p>
            </div>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-auto">
                        <a class="btn btn-sm btn-warning" href="{{ route('admin.posts.edit', $post) }}">Modifica</a>
                    </div>
                    <div class="col-auto">
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            {!! $post->content !!}
        </div>
    </section>
@endsection
