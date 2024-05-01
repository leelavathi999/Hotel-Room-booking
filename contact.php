<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Include Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Contact Us - Hotel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
  </head>
<style>
body{
 font-family: monaco,monospace;
 color:aliceblue;
 background-image: url('5.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}
    </style>
<body>

<div class="container mt-5">
<a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><h4 class="text-warning">MASTER HOTEL</h4></a>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header bg-dark">
    <font color=yellow><strong><h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">MASTER HOTEL</h5></strong></font>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-dark text-white">
   <h4>Contact Information</h4>
      <p>123 Main Street, City</p>
      <p>Phone: +123 456 7890</p>
      <p>Email: info@masterhotel.com</p>
      <div class="d-flex justify-content-around">
    <i class="fab fa-facebook text-primary fa-2x"></i>
      <i class="fab fa-twitter text-info fa-2x"></i>
      <i class="fab fa-youtube text-danger fa-2x"></i>
      <i class="fab fa-instagram text-warning fa-2x"></i>
 </div>
  </div></div>

  
  
  <div class="row">
    <h2>Contact Us</h2>
    
  <p><h5>We'd love to hear from you. Please use the form below to get in touch with us.</h5></p>
    <div class="col-md-6">
      <h2>Contact Form</h2>
      <form action="contact_us.php" method="POST">
      <div class="form-group">
     <label for="username"> <h5>Username</h5></label>
      <div class="input-group">
      <span class="input-group-text">@</span>
    <br><input type="text" class="form-control" name="username" placeholder="Username" required>
  </div>
      </div>
        <div class="form-group">
          <label for="email"><h5>Email</h5></label>
          <div class="input-group">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    <br><input type="text" class="form-control" name="email" placeholder="Email" required>
     </div>        
    </div>
        <div class="form-group">
          <label for="message"><h5>Message</h5></label>
          <div class="input-group">
          <span class="input-group-text"><i class="fas fa-comment"></i></span>
          <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" name="message" required></textarea>
          </div>
        </div>
        <a href="main.php" class="btn btn-secondary"> Home </a>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
    </div>
 
  </div>
</div>


</body>
</html>
