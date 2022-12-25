@extends('./../layouts/app')

@section('app-content')
<div class="row ">
    <div class="col-md-3 "></div>
    <div class="col-md-6 mt-2">
        <div class="card mt-2">
            <div class="card-body">
              @if(session()->has('error'))
                  <div class="alert alert-danger">{{ session()->get('error') }}</div>   
              @endif 
              <h5 class="card-title">Connexion</h5>
              <form action="{{ route('login') }} " method="post" class="form-product">
                  @method('post')
                  @csrf
                  <div class="form-group">
                      <label for="email">Votre Email</label>
                      <input type="email" id="email" name="email" class="form-control mt-1" placeholder="Votre Email" value="{{old('email')}}">
                      @error('email')
                          <div class="text-danger">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="password">Votre Mot de passe </label>
                      <input type="password" id="password" name="password" class="form-control mt-1" value="{{old('password')}}">
                      @error('password')
                          <div class="text-danger">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
                  
                  <input type="submit"  class="btn btn-success" name="" value="Connexion" id="">
                  <p class="text-center">Vous n'avez-vous pas un compte ? <a href="{{ route('registration') }}">Créer ici</a></p>
              </form>
            </div>
        </div>
    </div>
    
</div>  
@endsection