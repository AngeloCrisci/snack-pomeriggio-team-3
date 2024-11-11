@extends("layouts.app")


@section( 'content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Post List:</h1>
            <div class="mb-3">
                <a href="{{route("admin.posts.create")}}" class="btn btn-sm btn-primary me-1 m-1">Create new Post!</a>
            </div>
            <table class="table table-dark table-striped"> 
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Titolo</th>
                      <th scope="col">Autore</th>
                      <th scope="col">Immagine</th>
                      <th scope="col">Data</th>
                      <th scope="col">Descrizione</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($posts as $index => $post)
                         
                    
                   <tr>
                     <td>{{$post->id}}</td>
                     <td>{{$post->title}}</td>
                     <td>{{$post->author}}</td>
                     <td>{{$post->thumb}}</td>
                     <td>{{$post->date}}</td>
                     <td>{{$post->description}}</td>
                 
                     <td>
                         <a href="{{route("admin.posts.show", $post)}}" class="btn btn-sm btn-primary m-2 me-1 m-1">Show</a>
                           <a href="{{route("admin.posts.edit", $post)}}" class="btn btn-sm btn-success m-2 me-1">Edit</a>
                         <form action="{{route("admin.posts.delete", $post)}}" method="POST" class="guitar-destroyer" custom-data-name="{{$post->title}}">
                           @csrf
                           @method("DELETE")
             
                         <button type="submit" class="btn btn-sm btn-warning m-2">DELETE</button>
                         </form> 
                       </td>
                   </tr>
                 
                   @empty
                   <tr>
                     <td colspan="11">Non ci sono Post disponibili al momento...
                     </td>
                   </tr>
                         
                   @endforelse
                 </tbody>
               </table> 
        </div>
    </div>
</div>

@endsection