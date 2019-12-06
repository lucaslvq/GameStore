<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!--Import CDN -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
        <!-- My Style -->
        <link rel="stylesheet" href="<?= base_url("assets/css/style.css"); ?>">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lexend+Giga&display=swap" rel="stylesheet">
        <!-- title page -->
        <title>GamesStore</title>
    </head>
    <header>
        <!--Navbar -->
        <div class="navBarColor"></div>
        <div class="navbar-fixed">
            <!--Navbar-->
            <nav class="mb-1 navbar navbar-expand-lg fixed-top navbar-dark">
                <!-- Navbar brand -->
                <img class="sizeImg" src="<?= base_url('assets/img/logo.png'); ?>">
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active ml-3">
                            <a class="nav-link colorItemNavBar" href="#">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle colorItemNavBar ml-3" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Jeux</a>
                            <div class="dropdown-menu dropdown-primary mt-3" aria-labelledby="navbarDropdownMenuLink">
                                <?php foreach ($category_name as $category) { ?>
                                    <a><?= $category->name ?></a>
                                <?php } ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link colorItemNavBar ml-3" href="#">Contact</a>
                        </li>
                    </ul>
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <!-- Bar Search --> 
                        <form class="form-inline mr-5">
                            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Rechercher">
                        </form>
                        <!-- Bar Search --> 
                        <!-- SignIn Menu -->
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link dropdown-toggle colorItemNavBar" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user colorItemNavBar"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info mt-4" aria-labelledby="navbarDropdownMenuLink-4">
                                <form class="px-4 py-3">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail1"><i class="fas fa-at"></i> Adresse mail</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword1"><i class="fas fa-unlock-alt"></i> Mot de passe</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Mot de passe">
                                    </div>                                   
                                    <button type="submit" class="btn btn-primary btnSignDropdown"><i class="fas fa-sign-in-alt"></i> Connexion</button>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input checkBoxSign" id="dropdownCheck">
                                        <label class="form-check-label remberSign" for="dropdownCheck">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user-plus ml-5"></i> Pas de compte ? Inscivez-vous !</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-question-circle ml-5"></i> Mot de passe oublier ?</a>
                            </div>
                        </li>
                        <!-- SignIn Menu -->
                    </ul>
                </div>
                <!-- Collapsible content -->
            </nav>
            <!--/.Navbar-->
            
    </header>

        
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>
        <h1>test</h1><br>

   

