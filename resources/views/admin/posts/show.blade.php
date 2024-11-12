@extends('layouts.app')

@section('content')
    <!--Container-->
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col-6">

                <!--All post of author-->
                <h1><b>{{ $post->author }}</b></h1>

                <!--Single post-->
                <div class="card mt-5">
                    <div class="image">
                        <img src="{{ $post->thumb }}" class="card-img-top" alt="{{ $post->title }}">
                    </div>
                    <div class="card-body p-3">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="date text-end">
                            {{ $post->date }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
