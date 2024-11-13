@extends('layouts.app')

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="py-3 fw-bold text-center">
                        Posts:
                    </h1>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">
                            Create new post
                        </a>
                    </div>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Like</th>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $index => $post)
                                <tr>
                                    <td>
                                        <form action="" class="btn-group" role="group"
                                            aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="btncheck{{ $post->id }}"
                                                autocomplete="off">
                                            <label class="btn btn-outline-danger" for="btncheck{{ $post->id }}"><i
                                                    class="fa-solid fa-heart"></i></label>
                                        </form>
                                    </td>
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        {{ $post->author }}
                                    </td>
                                    <td>
                                        <i>{{ $post->thumb }}</i>
                                    </td>
                                    <td>
                                        {{ $post->date }}
                                    </td>
                                    <td>
                                        {{ $post->description }}
                                    </td>
                                    <td class="d-flex flex-column gap-2">
                                        <a href="{{ route('posts.show', $post) }}"
                                            class="btn btn-sm btn-primary me-2">Show</a>
                                        <a href="{{ route('posts.edit', $post) }}"
                                            class="btn btn-sm btn-success me-2">Edit</a>

                                        <form class="d-inline env-destroyer" action="{{ route('posts.destroy', $post) }}"
                                            method="POST" custom-data-name="{{ $post->name }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-warning me-2">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No post are available at the moment, create something!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    </div>
@endsection

</html>
