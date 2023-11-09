@extends('layout.navbar')

@section('contenue')

<div class="d-flex justify-content-center align-items-center my-4">
@if (count($errors) >0 )
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach ($errors->all() as $error)
    <strong>Oh WARNING!</strong> {{$error}}
</div>
@endforeach
    {{-- Erreur: Renseigner le nom de la categorie correctement --}}
@endif
</div>

<div class="container my-4">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <form action="/categorie/putcategorie" method="POST">
                @csrf 
                <div class="form-group">
                    <label for="categorie" class="form-label mt-4">Nom de la catégorie</label>
                    <input name="nomCategorie" type="text" class="form-control" id="categorie" aria-describedby="categorie" placeholder="Ajouter Nouvelle Catégorie">
                    <small id="categorieHelp" class="form-text text-muted">Une catégorie pour vos articles.</small>
                  </div>
                  <br>
                  <button name="enregister" type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
       
        </div>
</div>


@endsection()