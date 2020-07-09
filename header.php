<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<header class="container">
    <div class="row d-flex justify-content-between align-items-center">
        <img src="wp-content/uploads/2020/06/Bienvenue-au-monde-Logo-HD-Copie.jpg" alt="">
        <h1 class="title">Bienvenue au Monde</h1>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light">  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="menu navbar-nav nav justify-content-center">
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link active" href="#">Accueil</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="#">A Propos</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="#">Galerie</a>
                </li>
                <li class="menu-item nav-item mx-5">
                  <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="benefits container">
        
        <h1 class="title__benefits">Nos Prestations</h1>

        <div class="row">
          <div class="col-md-5">
            <div class="benefits__container">
              <div class="benefits__picture">
                <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
              </div>
              <div class="benefits__body">
                <h5 class="benefits__title">Lorem ipsum</h5>
                <p class="benefits__text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                unde eligendi ullam eum omnis hic libero laborum, pariatur
                consequuntur non
                </p>
                <a href="#" class="btn btn-primary">Plus de détails</a>
              </div>
                
            </div>
          </div>
        
          <div class="col-md-2">
            <div class="benefits__separator"></div>
          </div>

          <div class="col-md-5">
            <div class="benefits__container">
              <div class="benefits__picture">
                <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
              </div>
              <div class="benefits__body">
                <h5 class="benefits__title">Lorem ipsum</h5>
                <p class="benefits__text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                unde eligendi ullam eum omnis hic libero laborum, pariatur
                consequuntur non
                </p>
                <a href="#" class="btn btn-primary">Plus de détails</a>
              </div>
                
            </div>
          </div>

        </div>
        <div class="benefits__separator--horizontal"></div>
            
        <div class="row">
            <div class="col-md-5">
              <div class="benefits__container">
                <div class="benefits__picture">
                </div>
                <div class="benefits__body">
                  <h5 class="benefits__title">Lorem ipsum</h5>
                  <p class="benefits__text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                  unde eligendi ullam eum omnis hic libero laborum, pariatur
                  consequuntur non
                  </p>
                  <a href="#" class="btn btn-primary">Plus de détails</a>
                </div>
                  
              </div>
            </div>
          
            <div class="col-md-2">
              <div class="benefits__separator"></div>
            </div>
  
            <div class="col-md-5">
              <div class="benefits__container">
                <div class="benefits__picture">
                  <img src="wp-content/uploads/2020/06/bebe.jpg" class="picture" alt="..." />
                </div>
                <div class="benefits__body">
                  <h5 class="benefits__title">Lorem ipsum</h5>
                  <p class="benefits__text">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id
                  unde eligendi ullam eum omnis hic libero laborum, pariatur
                  consequuntur non
                  </p>
                  <a href="#" class="btn btn-primary">Plus de détails</a>
                </div>
                  
              </div>
            </div>
            <div class="benefits__separator--last"></div>

        </section>

        

    <section class="gallery">
    <h1 class="title__gallery">Galerie</h1>
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="wp-content/uploads/2020/06/pexels-photo-325690.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="wp-content/uploads/2020/06/pexels-photo-3270224.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="wp-content/uploads/2020/06/pexels-photo-374781.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    </div>
</section>
