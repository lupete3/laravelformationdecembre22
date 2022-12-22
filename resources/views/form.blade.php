@extends('./layouts/app')

@section('app-content')
   .<div class="card">
    <div class="card-body">
        {{-- @if($errors)
            @foreach ($errors->all() as $error)
                <div class="alert alert-info">{{$error}}</div>   
            @endforeach
        @endif  --}}
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

@endsection