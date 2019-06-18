
<!DOCTYPE html>
<html>
  <head>
    <title>SCAD Test Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header class="bg-white">
      <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white">
        <div class="logo-container clearfix">
          <img class="scad-logo float-left" src="assets/scad-logo-cropped.png" alt="SCAD" />
          <h1 class="logo-text float-right">Test Project</h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTestProject" aria-controls="navbarTestProject" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTestProject">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Perspiciatis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Unde</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Omnis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Iste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Natus</a>
            </li>
          </ul>
        </div>
      </nav>

    </header>

    <main>
      <section id="heroPanel" class="hero-section">
        <div class="hero-text-container container">
          <span class="hero-sub-text text-dark">Eu fugiat nulla pariatur</span>
          <h1 class="hero-main-text text-white">Excepteur sint occae cupidata non proide</h1>
          <button type="button" class="btn btn-success hero-button">Esse te cillum</button>
        </div>
      </section>
      <section id="perspiciatis" class="icons-section bg-dark-gray text-white">
        <div class="container">
          <h2>Perspiciatis</h2>
          <hr class="title-separator" />
          <p>Magni dolores eos qui ratione voluptatem sequi nescuit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
          <div class="row">
            <div class="col-md">
              <div class="icon-circle rounded-circle"><i class="fas fa-toolbox"></i></div>
              <h5 class="icon-title uppercase">Consectetur Adi</h5>
              <p class="icon-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
            <div class="col-md">
              <div class="icon-circle rounded-circle"><i class="far fa-image"></i></div>
              <h5 class="icon-title uppercase">Adipisci</h5>
              <p class="icon-description">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="col-md">
              <div class="icon-circle rounded-circle"><i class="fas fa-camera-retro"></i></div>
              <h5 class="icon-title uppercase">Numquam Eius</h5>
              <p class="icon-description">Accusamus et isusto odio dignissimos ducimus qui bladitiis</p>
            </div>
            <div class="col-md">
              <div class="icon-circle rounded-circle"><i class="fas fa-cube"></i></div>
              <h5 class="icon-title uppercase">Tempora Incidunt</h5>
              <p class="icon-description">Itaque earum rerum hic tenetur a sapiente, ut aut reiciendis maiores</p>
            </div>
          </div>
        </div>
      </section>
      <section id="unde" class="bg-light-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h3 class="unde-title">Unde</h3>
              <p class="unde-body">Sed ut perspiciatis unde monis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
              <ul class="unde-list fa-ul">
                <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Ullamco laboris nisi ut aliquip</li>
                <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Dolorem ipsum quia dolor</li>
                <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Magnam aliquam quaerat voluptatem</li>
                <li><span class="fa-li"><i class="fas fa-chevron-right"></i></span>Nihil molestiae consequatur</li>
              </ul>
            </div>
            <div class="col-md-5">
              <div id="undeCarousel" class="unde-carousel carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block" src="assets/carousel-1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/carousel-2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/carousel-3.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block" src="assets/carousel-4.jpg" alt="Fourth slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#undeCarousel" role="button" data-slide="prev">
                  <i class="fas fa-chevron-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                <a class="carousel-control-next" href="#undeCarousel" role="button" data-slide="next">
                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="omnis" class="omnis-section">
        <div class="container text-center">
          <h2>OMNIS</h2>
          <hr class="title-separator" />
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem qperiam.
          <div class="row">
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-1.jpg" alt="Portfolio 1"></div>
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-2.jpg" alt="Portfolio 2"></div>
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-3.jpg" alt="Portfolio 3"></div>
            <div class="w-100"></div>
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-4.jpg" alt="Portfolio 4"></div>
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-5.jpg" alt="Portfolio 5"></div>
            <div class="col-md"><img class="d-block w-100" src="assets/portfolio-6.jpg" alt="Portfolio 6"></div>
          </div>
        </div>
      </section>
      <section id="numberStats" class="bg-dark-gray">
        <div class="container stats-container text-center">
          <div class="row">
            <div class="col-md stat-block">
              <h1>9</h1>
              <h4>Iphilum</h4>
            </div>
            <div class="col-md stat-block">
              <h1>167</h1>
              <h4>Mondorus</h4>
            </div>
            <div class="col-md stat-block">
              <h1>6</h1>
              <h4>Malis Canipus</h4>
            </div>
            <div class="col-md stat-block">
              <h1>34</h1>
              <h4>Fostorium</h4>
            </div>
          </div>
        </div>
      </section>
      <section id="isteConsultatis" class="text-center">
        <h2>Iste Consultatis</h2>
        <hr class="title-separator" />
      </section>
      <section id="natus" class="text-center bg-light-gray">
        <div class="container">
          <h2>Natus</h2>
          <hr class="title-separator" />
          <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequator? Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
          <div class="row">
            <div class="col-md">
              <div class="natus-card bg-white">
                <div class="natus-card-image-container">
                  <img class="d-block w-100" src="assets/team-1.jpg" alt="Team 1">
                </div>
                <div class="natus-card-text-container">
                  <h5 class="natus-card-title uppercase">Holum Readus</h5>
                  <h6 class="natus-card-subtitle uppercase">Malecafis & Inundum</h6>
                  <p class="natus-card-body">Mida sit una namet, cons uectetur adipiscing adon elit. Aliquam vitae barasa droma.</p>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="natus-card bg-white">
                <div class="natus-card-image-container">
                  <img class="d-block w-100" src="assets/team-2.jpg" alt="Team 2">
                </div>
                <div class="natus-card-text-container">
                  <h5 class="natus-card-title uppercase">Balis Mocani</h5>
                  <h6 class="natus-card-subtitle uppercase">Calabanatis</h6>
                  <p class="natus-card-body">Worsa dona namet, cons uectetur dipiscing adon elit. Aliquam vitae fringilla unda mir.</p>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="natus-card bg-white">
                <div class="natus-card-image-container">
                  <img class="d-block w-100" src="assets/team-3.jpg" alt="Team 3">
                </div>
                <div class="natus-card-text-container">
                  <h5 class="natus-card-title uppercase">Mathis Ligundum</h5>
                  <h6 class="natus-card-subtitle uppercase">Triumfantis</h6>
                  <p class="natus-card-body">Dolor sit don namet, cons uectetur beriscing adon elit. Aliquam vitae fringilla unda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="contactUs" class="text-center text-white bg-dark-gray">
        <div class="container">
          <h2>Contact Us</h2>
          <hr class="title-separator" />
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tmepor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="row">
            <div class="col-md-3">
              <h5>Our Office</h5>
            </div>
            <div class="col-md-3">
              <h5>Business Hours</h5>
            </div>
            <div class="col-md-6">
              <form id="contactForm">
                
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
      <p class="text-white">&copy; <a href="#">SCAD</a></p>
    </footer>

    <!-- Bootstrap 4 and Font Awesome Dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5a5e01c027.js"></script>
  </body>
</html>
