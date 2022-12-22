@extends('./layouts/app')

@section('app-content')
   .<div class="card">
      <div class="card-body">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>   
        @endif 
        <h5 class="card-title">Ajouter un article</h5>
        <form action="/articles" method="post" class="form-product">
            @method('post')
            @csrf
            <div class="form-group">
                <label for="titre">Titre de l'article</label>
                <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre Article" value="{{old('titre')}}">
                @error('titre')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <input type="submit"  class="btn btn-success" name="" value="Enregistrer" id="">
        </form>
      </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
           <h5 class="card-title"> Liste des articles </h5>
           <table class="table table-sm responsive">
             <thead>
                <th>No</th>
                <th>Nom Article</th>
             </thead>
             <tbody>
                @forelse ($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->titre}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">Aucun article trouvé</td>
                </tr> 
                @endforelse
             </tbody>
           </table>
        </div>
    </div>

@endsection