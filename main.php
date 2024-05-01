<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <style>
      .card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
body{
 font-family: monaco,monospace;
 background-color:#1d1d1d !important;

}
    </style>
    
</head>
<body >
<nav class="navbar sticky-top  navbar-expand-lg  d-flex">
  <div class="container-fluid">
     <a class="navbar-brand text-warning" href="#"><h4>MASTER HOTEL</h4></a>   
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar1" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end "  id="navbar1">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-warning" href="#myCarousel"><h4>HOME</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="about.php" target="_self"><h4>ABOUT</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-warning" href="gallery.php"><h4>GALLERY</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#rooms"><h4>ROOMS</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="contact.php"><h4>CONTACT US</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="logout.php"><h4>LOGOUT</h4></a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    <div class="carousel-inner">
      
        <div class="carousel-item active"> 
          <img src="1.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
           <h3>MASTER HOTEL</h3>
            <p>Welcome to our hotels</p>
           </div>
        </div>
        <div class="carousel-item" >
        <img src="2.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h3>MASTER HOTEL</h3>
                <p>Stay with friends & families</p>
            </div>
        </div>
        <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h3>MASTER HOTEL</h3>
                <p>Come & enjoy precious moment with us</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>	
<center>

<h1><font color="green">Rooms And Rates</font></h1>

</center>
<div class="container" id="rooms">
    <div class="row ">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info-subtle">
                <center><h3>MASTER HOTEL</h3></center>
                </div>
                <div class="card-body bg-info">
                <img src="r1.jpg" class="card-img w-100">
                <div class="card-title">
                  <br>
                <h4>Deluxe Room<span class="badge bg-info">$320</span></h4>
                </div>
                </div>
                <div class="card-footer bg-info-subtle">
      
                <div class="d-flex justify-content-center">
                
                <a href="registerform.html" class="btn btn-outline-danger" type="button" value="Book Now">Book Now</a>
                </div>
                </div>
              
            </div>
            
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info-subtle">
                <center><h3>MASTER HOTEL</h3></center>
                </div>
                <div class="card-body bg-info">
                <img src="r2.jpg" class="card-img w-100">
                <div class="card-title">
                  <br>
                <h4>Luxury Room<span class="badge bg-info">$220</span></h4>
                </div>
                </div>
                <div class="card-footer bg-info-subtle">
      
                <div class="d-flex justify-content-center">
                
                <a href="registerform.html" class="btn btn-outline-danger"  type="button" value="Book Now">Book Now</a>
                </div>
                </div>
              
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info-subtle">
                <center><h3>MASTER HOTEL</h3></center>
                </div>
                <div class="card-body bg-info">
                <img src="r3.jpg" class="card-img w-100">
                <div class="card-title">
                  <br>
                <h4>Guest House<span class="badge bg-info">$170</span></h4>
                </div>
                </div>
                <div class="card-footer bg-info-subtle">
      
                <div class="d-flex justify-content-center">
                
                <a href="registerform.html" class="btn btn-outline-danger" type="button" value="Book Now">Book Now</a>
                </div>
                </div>
              
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info-subtle">
                <center><h3>MASTER HOTEL</h3></center>
                </div>
                <div class="card-body bg-info">
                <img src="r4.jpg" class="card-img w-100">
                <div class="card-title">
                  <br>
                <h4>Single Room<span class="badge bg-info">$130</span></h4>
                </div>
                </div>
                <div class="card-footer bg-info-subtle">
      
                <div class="d-flex justify-content-center">
                
                <a href="registerform.html" class="btn btn-outline-danger" type="button" value="Book Now">Book Now</a>
                </div>
                </div>
              
            </div>
        </div>
        
    </div>
</div>
</body>
</html>