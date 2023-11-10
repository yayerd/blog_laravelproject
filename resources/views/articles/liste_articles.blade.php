@extends('layout.navbar')

@section('contenue')

<div class="container my-4">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            {{-- <a href="{{'nomdelaroute'}}">Link</a> --}}
            @foreach ($categories as $categorie)
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$categorie->nomCategorie}}
                <span class="badge badge-primary badge-pill">Id bdd: {{$categorie->id}}</span>
              </li>    
            @endforeach
              </ul>
        </div>
       </div>
        </div>

@endsection()