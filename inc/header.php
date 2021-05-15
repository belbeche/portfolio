<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width minimum-scale=1.0" />
    <title>Port FOlio Wee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/about.css">
    <link rel="stylesheet" href="assets/styles.css">
    <!-- <link rel="stylesheet" href="assets/lumen.css"> -->
</head>
<?= flash();?>

<header>
  <div class="navbar navbar-red bg-red shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Wee</strong>
      </a>
    </div>
  </div>
</header>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
            <!-- <h1><a href="index.html" class="logo">Wee <span>Walid BELBECHE</span></a></h1> -->
            <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#"><span class="fa fa-home mr-3"></span> Accueil</a>
            </li>
            <li>
                <a href="#about"><span class="fa fa-user mr-3"></span> A propos</a>
            </li>
            <li>
            <a href="#"><span class="fa fa-briefcase mr-3"></span> Compétences</a>
            </li>
            <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Projets</a>
            </li>
            <li>
            <a href="#"><span class="fa fa-suitcase mr-3"></span> Services </a>
            </li>
            <li>
            <a href="#"><span class="fa fa-cogs mr-3"></span> Contact</a>
            </li>
            </ul>

            <div class="mb-5">
                    <h3 class="h6 mb-3">Informations utile</h3>
                    <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <div class="icon"><span class="icon-paper-plane"></span></div>
                        <input type="text" class="form-control" placeholder="Votre adresse e-mail">
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
	        <p class="text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	    </div>
    </nav>
    <!-- Contenu de la page  -->
    <div class="wrapper d-flex align-items-stretch">
        
    




