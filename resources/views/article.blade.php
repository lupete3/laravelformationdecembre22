@extends('./layouts/app')

@section('app-content')
    <div class="row ">
        <div class="col-md-4 mt-2">
            <div class="card">
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
                      <div class="form-group">
                          <label for="description">Description de l'article</label>
                          <textarea name="description" class="form-control" id="description" cols="5" rows="4">{{old('description')}}</textarea>
                          @error('description')
                              <div class="text-danger">
                                  {{$message}}
                              </div>
                          @enderror
                      </div>
                      
                      <input type="submit"  class="btn btn-success" name="" value="Enregistrer" id="">
                  </form>
                </div>
              </div>
        </div>
        <div class="col-md-8 mt-2">
            <h4>Liste des articles</h4>
            @forelse ($articles as $article)
                <li class="list-group-item mt-2">
                    <div><a href="/articles/{{$article->id}}" class="text-title">{{$article->titre}}</a></div>
                    <div>{{$article->description}}</div>
                </li>
            @empty
                Aucun article trouvé</td>
            @endforelse
        </div>
    </div>

    

@endsection