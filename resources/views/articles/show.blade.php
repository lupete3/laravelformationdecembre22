@extends('./../layouts/app')

@section('app-content')
<h4>Detail articles</h4>
    
    <div class="card mt-2">
        <div class="card-body">
            <a href="/article" class=" ">Retour</a>
            <h5 class="card-title">{{$article->titre}}</h5>
            <hr>
            <p class="card-text">{{$article->description}}</p>
        </div>
        <div class="card-footer">
            <a href="/articles/{{$article->id}}/edit" class="btn btn-success">Modifier</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
            
        </div>
    </div>

  
  <!-- Modal delete article-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <form method='post' action='/articles/{{$article->id}}/delete'>
                @csrf;
                @method('delete');
          Voulez-vous supprimer cet article ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
          <button type="submit" class="btn btn-danger">Oui</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection