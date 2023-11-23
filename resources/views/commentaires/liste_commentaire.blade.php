@extends('layout.navbar')

@section('contenue')

          <div class="container my-2">
          <div class="row d-flex justify-content-center align-items-center "> 
            @foreach ($articles as $article)
            <div class="card col-md-3 p-3 m-3 text-white bg-primary border-light ">
              <h3 class="card-header">Article N°: {{$article->id}} </h3>
              <div class="card-body">
                <h5 class="card-title">{{$article->titreArticle}}</h5>
                @foreach ($categories as $categorie)
                @if ($categorie->id==$article->categorie_id)
                <span class="badge bg-secondary p-2"><b>{{$categorie->nomCategorie}}</b></span>
                @endif
                @endforeach
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image de l'article</text>
              </svg>
              <div class="card-body">
                <p class="card-text">{{$article->contenuArticle}}</p>
              </div>
              @foreach ($articles as $article)
              <div>
                <label for="commentaire">Commentaire</label>
                <textarea name="commentaire" id="commentaire" cols="35" rows="5" placeholder="Ajouter commentaire"></textarea>
                  <a href="{{'/commentaires/voir/'.$article->id}}" class="card-link btn btn-light">Envoyer</a>
                </div>
              <ul class="list-group list-group-flush">
                {{-- <li class="list-group-item">{{$commentaire->commentaire}}</li> --}}
              </ul> 
              @endforeach
              <div class="card-body">
                <a href="{{'/articles/'.$article->id}}" class="card-link btn btn-light">Voir plus</a>
                {{-- <button type="submit" class="btn btn-danger">Supprimer</button> --}}
              </div>
              <form action="{{'/article/supprimerarticle/'.$article->id}}" method="post">
                @method('delete')
                @csrf
                {{-- <a href="{{'/articles/'.$article->id}}" class="card-link btn btn-light">Voir plus</a> --}}
                <button class="card-link btn btn-light" type="submit">Supprimer</button>
              </form>
              <div class="card-footer text-muted">
                {{$article->created_at}}
              </div>
            </div>
            @endforeach
          </div>
        </div>
  
           

@endsection()