@extends('layout.navbar')

@section('contenue')

<div class="d-flex justify-content-center align-items-center my-4">
@if (count($errors) > 0 )
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach ($errors->all() as $error)
    <strong>Oh WARNING!</strong> {{$error}}
</div>
@endforeach
    {{-- Erreur: Renseigner le nom de la categorie correctement --}}
@endif
</div>

<div class="container my-4 mx-6">
    <div class="row d-flex justify-content-center align-items-center">
        <div class=" p-4 border mt-2 col-sm-8">
            <form action="{{'/article/modifierarticle/'.$article->id}}" method="POST">
                @method('PATCH')
                @csrf 
                <div class="form-group">
                    <label for="categorie" class="form-label mt-4">Ajouter un nouvel article</label>
                    <input name="titreArticle" value="{{$article->titreArticle}}" type="text" class="form-control" id="categorie" aria-describedby="categorie" placeholder="Titre de l'article">
                    <small id="categorieHelp" class="form-text text-muted">Le titre de l'article.</small>
                  </div>
                  <div class="form-group">
                    <label for="contenuTextarea" class="form-label mt-4">Contenu de l'article </label>
                    <textarea name="contenuArticle" class="form-control" id="contenuTextarea" rows="3">{{$article->contenuArticle}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Catégorie de l'article</label>
                    <select name="categorie_id" class="form-select" id="exampleSelect1">
                      @foreach ($categories as $categorie)
                          <option value="{{$categorie->id}}" {{$categorie->id == $article->categorie_id ? 'selected' : ''}}>{{$categorie->nomCategorie}}</option>
                      @endforeach
                    </select>
                  </div> <br>
                  <button type="submit" class="btn btn-light">Modifier</button>
                  <br><br>
                </form>
        </div>
    </div>
</div>


@endsection()