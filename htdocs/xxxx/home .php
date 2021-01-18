<!doctype html>
<html>
<head>
    <title>Bootstrap Class 1</title>
    <link href="home.css" rel="stylesheet">
    <!css link copied from bootstrap>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--jquery link copied from bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <!--made a menubar named class by my self, then container, row, and col-lg-12 class-->
    <div class="menubar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!--copied from navbar bootstrap-->    
                <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#" style="font-size:40px; color: #F2674A; line-height: 30px"><b>BOOK </b></br><b>LENDER</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lender</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="first.php">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>
        
        
        
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  
		  <a class="dropdown-item" href="#">School Textbooks</a>
          <a class="dropdown-item" href="#">University Textbooks</a>
          <a class="dropdown-item" href="#">Fictions</a>
		  <a class="dropdown-item" href="#">Horror</a>

        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
                </div>
            </div>        
        </div>
    </div>
    
    <!--copied from carousel bootstrap, then you give your images input in img tag-->    
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/pic1.jfif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pic2.jfif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pic3.jfif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                   </div>
                </div>
            </div>        
        </div>
    </div>
    <!--assign your required column and give your contents makimg class named "col-lg-n" where [n=12/no.olumns wanted]-->    
    <div class="founder">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Message From The Founder</h1>  
                </div>
                <div class="col-lg-6">
                    <p>Since its inception in 2001, Brac University has become one of the most reputed educational institution in Bangladesh. We have focused on generating new knowledge and promoting critical thinking amongst our students, graduating more than 7,000 young men and women during this time.</p>
                    </div>
                    <div class="col-lg-6">
                    <img src="images/Sir%20FH%20Abed.jpg">
                    </div>
            </div>
        </div>
    </div>
    
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <img class="img-fluid" src="images/Sir%20FH%20Abed.jpg">
                </div>
                <div class="col-lg-3">
                <img class="img-fluid" src="images/Sir%20FH%20Abed.jpg">
                </div>
                <div class="col-lg-3">
                <img class="img-fluid" src="images/Sir%20FH%20Abed.jpg">
                </div>
                <div class="col-lg-3">
                <img class="img-fluid" src="images/Sir%20FH%20Abed.jpg">
                </div>
                
            
            </div>
        
        </div>
    
    </div>

</body>
    
</html>