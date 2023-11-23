<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/slate/bootstrap.css">
    <title>Le site de mon blog</title>
</head>
<body>

    {{-- navbar  --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/listecategorie">Mon blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor04">
            <ul class="navbar-nav me-auto">
              {{-- <li class="nav-item">
                <a class="nav-link active" href="#">Bienvenue
                  <span class="visually-hidden">(current)</span>
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="/listecategorie">Catégories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ajoutercategorie">New Catégorie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listearticle">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ajouterarticle">New Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listecommentaire">Commentaires</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ajoutercommentaire">Ajouter Commentaire</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li> --}}
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="search" placeholder="Faire une recherche">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
            </form>
          </div>
        </div>
      </nav>


    @yield('contenue')
    
    {{-- footer --}}

    <footer class="bg-dark text-center bg-body-tertiary text-white ">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="text-dark row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto ">
                <p class="pt-2">
                  <strong>Souscription à la newsletter</strong>
                </p>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example29" class="form-control" />
                  <label class="form-label" for="form5Example29">Adresse Email</label>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-secondary my-2 my-sm-0">
                  Souscrire
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center text-light bg-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBOOTSTRAP.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>