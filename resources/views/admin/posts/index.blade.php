@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>
                Post Index
            </h1>
        </div>
    </section>
    <section>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th></th>
                        <th>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.create') }}">Nuovo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post) }}">
                                    {{ $post->title }}</a>
                            </td>
                            <td>{{ $post->slug }}</td>
                            <td>
                                <a href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>Nessun post</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
