<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    </head>
    <style>
body {
  background-color:#1d1d1d !important;
  font-family: "Asap", sans-serif;
  color:#989898;
  margin:10px;
  font-size:16px;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }

</style>

<body>
   <div class="container">
    
    <ul class="nav ">
        <li class="nav-item"><a class="nav-link text-warning" href="main.php"><h3>HOME PAGE</h3></a></li>
        <li><a class="nav-link navbar-brand text-warning" href="gallery.php"><h3>GALLERY</h3></a></li>
    </ul>
    
        <div class="row">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h11.jpg" class="fancybox" rel="ligthbox">
                    <img  src="h11.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g2.jpg"  class="fancybox" rel="ligthbox">
                    <img  src="g2.jpg" class="zoom img-fluid"  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g3.jpg" class="fancybox" rel="ligthbox">
                    <img  src="g3.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g4.jpg" class="fancybox" rel="ligthbox">
                    <img  src="g4.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h12.jpg" class="fancybox" rel="ligthbox">
                    <img  src="h12.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g6.jpg" class="fancybox" rel="ligthbox">
                    <img  src="g6.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g7.jpg" class="fancybox" rel="ligthbox">
                    <img  src="g7.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="g8.jpg" class="fancybox" rel="ligthbox">
                    <img  src="g8.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h13.jpeg" class="fancybox" rel="ligthbox">
                    <img  src="h13.jpeg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h14.jpeg" class="fancybox" rel="ligthbox">
                    <img  src="h14.jpeg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h15.jpeg" class="fancybox" rel="ligthbox">
                    <img  src="h15.jpeg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="h16.jpeg" class="fancybox" rel="ligthbox">
                    <img  src="h16.jpeg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
           
           
       </div>

     
      

    </div>
<script>
    $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>

</body>
</html>