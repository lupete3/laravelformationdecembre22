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
            <button class="btn btn-success">Modifier</button>
            <button class="btn btn-danger">Supprimer</button>
            
        </div>
    </div>

@endsection