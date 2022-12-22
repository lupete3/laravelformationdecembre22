@extends('./layouts/app')

@section('app-content')

    <h3>---- Structure Conditionnelle IF avec Blade ----- </h3>
    <p>Page d'accueil générée par 
        @if($name == 'placide')
            Administrateur
            @else
                Utilisateur
        @endif
        <?= $name ?>
    </p>
    <h3>---- Structure Conditionnelle SWITCH avec Blade ----- </h3>
    <p>Page d'accueil générée par 
        @switch($name)
            @case($name == 'placide')
            Administrateur
            @break
            @case($name == 'deo')
                Utilisateur
            @break
        @endswitch
        <?= $name ?>
    </p>
    <h3>---- Structure Conditionnelle FOR avec Blade ----- </h3>
    <p>Page d'accueil générée par 
        @for($i = 2; $i <= $age; $i++)
           <li>{{$i}}</li>
        @endfor
    </p>
    <h3>---- Structure Conditionnelle FOREACH avec Blade ----- </h3>
    <p>Page d'accueil générée par 
        @foreach($tab as $data)
           <li>{{$data}}</li>
        @endforeach
    </p>
@endsection