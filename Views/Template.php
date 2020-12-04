<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/main.css">
</head>
  <body>
    <div class="blue">
      <nav class="blue">
        <div class="container">
          <div class="nav-wrapper">

            <a href="#" data-target="mobile-navbar" class="sidenav-trigger right">
              <i class="material-icons">menu</i>
            </a>

            <a href="#" class="brand-logo left"><i class="small material-icons">local_hospital</i>Hospital</a>
            <ul class="right hide-on-med-and-down">
              <li><a href="http://localhost/hospital/home">Página Principal</a></li>
              <li><a href="http://localhost/hospital/servicos">Serviços</a></li>
              <li><a href="http://localhost/hospital/equipe">Nossa equipe</a></li>
              <li><a href="http://localhost/hospital/contato">Contatos</a></li>
            </ul>
          </div>
        </div>
      </nav>
        <ul class="sidenav" id="mobile-navbar">
            <li><a href="http://localhost/hospital/home">Página Principal</a></li>
            <li><a href="http://localhost/hospital/servicos">Serviços</a></li>
            <li><a href="http://localhost/hospital/equipe">Nossa equipe</a></li>
            <li><a href="http://localhost/hospital/contato">Contatos</a></li>
        </ul>
    </div>
    <main>
        <?php 
        
          $this->loadInTemplate($view, $dados);
        
        ?>
    </main>
  <footer class="page-footer darken-5">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5>Sobre Nós</h5>
          <p>O pedaço mais habitual do Lorem Ipsum usado
          desde os anos 1500 é reproduzido abaixo para os
          interessados.
          </p>
        </div>
        <div class="col s12 m6 l6">
          <h5>Siga-nós nas redes sociais.</h5>
          <ul>
            <div class="row">
              <li><a class="white-text col 1" href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
              <li><a class="white-text col 1" href="#"> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
              <li><a class="white-text col 1" href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a></li>
              <li><a class="white-text col 1" href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
            </div>
          </ul>
      </div>
    </div>
  </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
      var elems = document.querySelectorAll('.slider');
      var instaces = M.Slider.init(elems);
      var elems = document.querySelectorAll('.collapsible');
      var instances = M.Collapsible.init(elems);
      var elems = document.querySelectorAll('.parallax');
      var instances = M.Parallax.init(elems);
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems);
      $('#textarea1').val('New Text');
      M.textareaAutoResize($('#textarea1'));
  });

    const elemsSideNav = document.querySelectorAll(".sidenav");
    const instancesSidenav = M.Sidenav.init(elemsSideNav);
</script>
</body>
</html>