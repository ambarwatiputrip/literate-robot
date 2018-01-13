<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BeeFood</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Bee Food</a>
          <?php if(!auth()->guest()): ?>
          <h4>Welcome, <?php echo e(auth()->user()->name); ?></h4>
          <?php endif; ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">

              
              <?php if(auth()->guest()): ?>
                <a class="nav-link js-scroll-trigger" href="/login">SIGN IN</a>
              <?php else: ?> 
                <a class="nav-link js-scroll-trigger" href="/logout">LOG OUT</a>
              <?php endif; ?>

            </li>
            <li class="nav-item">
              <?php if(auth()->guest()): ?>
                <a class="nav-link js-scroll-trigger" href="/register">CREATE ACCOUNT</a>
              <?php endif; ?>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To BeeFood!</div>
          <div class="intro-heading">We Offer you the</div>
          <div class="intro-heading">BEST & DELICIOUS FOOD</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

   
    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">For You!</h2>
            <h3 class="section-subheading text-muted">Best Food Recommendation For You.</h3>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="/bestbreakfast">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/steak.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Best Breakfast</h4>
             <!--  <p class="text-muted">Illustration</p> -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/GreatFoodForLunch.jpg" alt="GreatFoodForLunch.html">
            </a>
            <div class="portfolio-caption">
              <h4>GreatFoodForLunch</h4>
              <!-- <p class="text-muted">Graphic Design</p> -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="GreatFoodForLunch.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/Dining Selections.jpg" alt="DiningSelections.html">
            </a>
            <div class="portfolio-caption">
              <h4>Dining Selections</h4>
              <!-- <p class="text-muted">Identity</p> -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/PopulerOfThisWeek.jpg" alt="PopulerOfThisWeek.html">
            </a>
            <div class="portfolio-caption">
              <h4>Populer Of This Week</h4>
              <!-- <p class="text-muted">Branding</p> -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="more.html">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/food-photography.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>New Restaurant</h4>
              <!-- <p class="text-muted">Website Design</p> -->
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Food/white.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>More Restaurant</h4>
              <!-- <p class="text-muted">Website Design</p> -->
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; BeeFood</span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
