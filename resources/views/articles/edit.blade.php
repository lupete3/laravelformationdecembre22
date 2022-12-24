@extends('./../layouts/app')

@section('app-content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('articles.all') }} " class="btn btn-sm btn-dark">Retour</a>
          @if(session()->has('success'))
              <div class="alert alert-success">{{ session()->get('success') }}</div>   
          @endif 
          <h5 class="card-title">Modification article</h5>
          <form action=" {{ route('articles.edit',$article->id)}} " method="post" class="form-product">
              @method('put')
              @csrf
              <div class="form-group">
                  <label for="titre">Titre de l'article</label>
                  <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre Article" value="{{$article->titre}}">
                  @error('titre')
                      <div class="text-danger">
                          {{$message}}
                      </div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="description">Description de l'article</label>
                  <textarea name="description" class="form-control" id="description" cols="5" rows="4">{{$article->description}}</textarea>
                  @error('description')
                      <div class="text-danger">
                          {{$message}}
                      </div>
                  @enderror
              </div>
              
              <input type="submit"  class="btn btn-success" name="" value="Modifier" id="">
          </form>
        </div>
    </div>
@endsection