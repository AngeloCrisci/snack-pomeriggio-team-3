@extends("layouts.app")

@section("page-title")

@section("content")

<div class="container">
      <div class="row justify-content-center">


        <form class="col-12  card p-4" method="POST" action="{{route("posts.update" , $post)}}">
            @csrf
            @method("PUT")
        <h1>Crea un nuovo post!:</h1>

          {{--
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->author}}</td>
        <td>{{$post->thumb}}</td>
        <td>{{$post->date}}</td>
        <td>{{$post->description}}</td> --}}

                <div class="mb-3">
                    <label for="post-title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="post-title" name="title" value="{{old('title')}}">
                    @error("title")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="post-author" class="form-label">Contenuto</label>
                    <input type="text" class="form-control" id="post-author" name="author" value="{{old('author')}}">
                    @error("author")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="post-thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="post-thumb" name="thumb" value="{{old('thumb')}}">
                    @error("thumb")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="post-date" class="form-label">Data creazione</label>
                    <input type="text" class="form-control" id="post-date" name="date" value="{{old('date')}}">
                    @error("date")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="post-description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="post-description" name="description" value="{{old('description')}}">
                    @error("description")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>


           <div class="mb-3 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Crea il tuo nuovo post!</button>
            <button type="reset" class="btn btn-danger">Pulisci i campi</button>

           </div>
        </form>


    </div>

</div>

@endsection
