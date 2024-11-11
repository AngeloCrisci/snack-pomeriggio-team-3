@extends("layouts.app")


@section( 'content')

<h1>Post's List:</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <a href="{{route("admin.posts.create")}}" class="btn btn-sm btn-primary me-1 m-1">Create new Post!</a>
            </div>
        </div>
    </div>
</div>

@endsection