@extends('index')
@section('content')
<div class="container">
    <div class="row">
            @foreach ($games as $game)
            <div class="col-md-6" style="padding-left:200px">
                <div class="card" style="width: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->titulo}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$game->estudio}}</h6>
                        <p class="card-text">{{$game->puntuacion}}</p>
                        <p class="card-text">{{$game->fecha}}</p>
                        <button type="button" class="btn btn-danger"><a href="{{ route('deleteGame',$game->id) }}">Delete Game</a></button>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>

<br>
<br>
<br>
@include('addForm')
@endsection



