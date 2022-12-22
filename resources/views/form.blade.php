@extends('./layouts/app')

@section('app-content')
    @if($errors)
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>   
        @endforeach
    @endif
    <form action="/form" method="post">
        @method('post')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
        <input type="submit" name="" value="Valider" id="">
    </form>

@endsection