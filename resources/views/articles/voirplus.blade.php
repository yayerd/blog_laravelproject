@extends('layout.navbar')

@section('contenue')

          <div class="container my-4">
          <div class="row d-flex justify-content-center align-items-center"> 
            <div class="card col-md-7 m-2 p-3">
              <h3 class="card-header">Article N°: {{$article->id}} </h3>
              <div class="card-body">
                <h5 class="card-title">{{$article->titreArticle}}</h5>
                
                <span class="badge bg-secondary p-2"><b>{{$categorie->nomCategorie}}</b></span>
                
                
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image de l'article</text>
              </svg>
              <div class="card-body">
                <p class="card-text">{{$article->contenuArticle}}</p>
              </div>
              {{-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul> --}}
              <div class="card-body">
                <a href="{{'/modifierarticle/'.$article->id}}" class="card-link btn btn-warning">Modifier infos</a>
                {{-- <button type="submit" class="btn btn-danger">Supprimer</button> --}}
              </div>
              <div class="card-footer text-muted">
                {{$article->created_at}}
              </div>
            </div>
          </div>
        </div>
  
           

@endsection()