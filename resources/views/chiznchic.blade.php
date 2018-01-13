<html>
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

    <style>

    .slide {
position:relative;
margin:0 auto;
width:1000px;
height:490px;
overflow:hidden
}

.slide input {
display:block;
position:absolute;
width:960px;
height:450px;
left:0;
top:0;
opacity:0;
cursor:pointer;
margin:0;
padding:0
}

.slide img {
visibility:hidden;
opacity:0;
height:450px;
position:absolute;
left:0;
top:0;
width:960px;
border:20px;
border-radius:20px;
transition:all .5s ease-out
}

.slide input:checked + img {
visibility:visible;
opacity:1
}

.slide input:checked { display:none }

.slide input:nth-child(1) { z-index:13 }
.slide input:nth-child(2) { z-index:12 }
.slide input:nth-child(5) { z-index:11 }
.slide input:nth-child(7) { z-index:10 }

.slide input:nth-child(1):checked ~ input:nth-child(2),
.slide input:nth-child(3):checked ~ input:nth-child(3),
.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }
    
    .review{
      width:100;
      border-style: groove;
      height: auto;      
    }
   
  .right {
  width:450px;
  height:550px;
  background:white;
  color: black;
  float:right;

}
 .left{
    width:550px;
    height:550px;
    background: white;
    color: black;
    float:left;
}
.panah-kanan {
 width: 0;
 height: 0;
 border-top: 30px solid transparent;
 border-bottom: 40px solid transparent;
 border-left: 40px solid black;
}

.panah-kiri {
 width: 0;
 height: 0;
 border-top: 30px solid transparent;
 border-bottom: 40px solid transparent; 
 border-right:40px solid black;
}

*{margin:0; padding: 0}
    .comment{width: 800px; margin: auto;}
    fieldset{width: 400px; padding: 10px;}
    .kotak{border: 1px solid grey; padding: 5px; margin:5px 0; overflow: hidden;}

	</style>

  </head>

<body id= "page-top">
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="main.html">Bee Food</a>
        
        <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><img src=".../img/icon/search.jpg"><i></button>
      </i>
      </div>
    </div>
  </form>
      </div>
      </div>
    </nav>
    <!-- Header -->
    
    <header class="masthead2">
      <div class="container">
        <div class="intro-text">
         
        </div>
      </div>
    </header>

    <!-- isi -->
    <section class="bg-light" id="portfolio">
    	 <div class="container">
        <div class="row">
        
        	
            <div class='slide'>
  <input type='radio' name='radio-set' checked='checked' />
  <img src="img/Food/ciznchic.jpg"  width="1100" height="350">
 
 


  <input type='radio' name='radio-set' />
  <img src='img/Food/ciznchic1.jpg'/>
        		
        	</div>
          <div class="col-lg-12 text-left">
            <h3 class="section-heading">Ciz n Chic</h3>
            <h3 class="section-subheading">
              Gang Keluarga No 37 Z</br>
              Jakarta Barat</br>
              021 98751501
            </h3>
          </div>
        </div>
       <div class="row">
          <div class="col-md-6">
            
            <div class="portfolio-caption">
              <h6>REVIEW</h6>
              <div class="comment">
                <fieldset>
                    <div class="kotak">
                      <span>LALA</span>:<br><hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book....</p>
                    </div>
                    <div class="kotak">
                      <span>LULU</span>:<br><hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book....</p>
                    </div>
                </fieldset>
              </div>
          </div>
          </div>     
          <div class="col-md-6">
          <div class="portfolio-caption">
              <h6>MENU</h6>
          </div>   
          
          <a class="portfolio-link" href="">
              <img class="img-fluid" src="img/Food/Menuciznchic.jpg" width="200" height="150">
            </a>   
          
          
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