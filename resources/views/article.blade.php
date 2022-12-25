@extends('./layouts/app')

@section('app-content')
    <div class="row ">
        @auth
            <div class="col-md-4 mt-2">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>   
                    @endif 
                    <h5 class="card-title">Ajouter un article</h5>
                    <form action="{{ route('articles.save') }} " method="post" class="form-product">
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
        @endauth
        <div class="@auth col-md-8 @else col-md-12 @endauth mt-2">
            <h4>Liste des articles</h4>
            @forelse ($articles as $article)
                
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('articles.single',$article->id) }} " >{{$article->titre}}</a></h5>
                        <hr>
                        <p class="card-text">{{$article->description}}</p>
                    </div>
                </div>
            @empty
                Aucun article trouvé</td>
            @endforelse
        </div>
    </div>

    

@endsection