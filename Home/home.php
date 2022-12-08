<?php 
include('../db.php');
  $con = new Db_Connection();
    $conn = $con->Establish_Connection();


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php 
    // include ('../Registration and Sign in/header.php');
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');




.detailed-view-bg-container {
  background-image: url("https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/seabg.png");
  height: 100vh;
  background-size: cover;
}
.detailed-view-heading {
  color: white;
  font-family: "Roboto";
  font-size: 28px;
  font-weight: bold;
  padding: 24px;
}
.detailed-view-card-container {
  background-color: white;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
  margin: 24px;
}
.detailed-view-card-heading {
  color: #0f0e46;
  font-family: "Roboto";
  font-size: 23px;
  font-weight: bold;
}
.detailed-view-card-description {
  color: #6c6b70;
  font-family: "Roboto";
  font-size: 13px;

}
.detailed-view-card-text-container {
  padding: 16px;
}


/*2*/


.diwali-top-section {
  background-image: url("https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/diwali-bg.png");
  height: 30vh;
  background-size: cover;
}
.diwali-top-section-heading {
  color: white;
  font-family: "Caveat";
  font-size: 36px;
  width: 200px;
  padding: 20px;
}
.diwali-bottom-section {
  text-align:center;
  background-color: #e6f6ff;
  padding:15px;
  overflow-x: auto;
}
.diwali-card-item {
  text-align: center;
  background-color: white;
  width:140px;
  border-radius: 9px;
  padding: 16px;
  margin: 15px;
}
.diwali-card-image {
  height: 64px;
  width: 64px;
}
.diwali-card-name {
  color: #616e7c;
  font-family: "Roboto";
  font-size: 12px;
  font-weight: normal;
}
.diwali-card-price {
  color: #323f4b;
  font-family: "Roboto";
  font-size: 16px;
  font-weight: 500;
}
    </style>
    <title>Home</title>
</head>
<body>


<!-- <?php// include('navbar.php') ?> -->






<nav class="navbar navbar-expand-lg bg-secondary navbar-light ">
  <div class="container-fluid">
      
        <img
          src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/navbar-logo-img.png"
          class="navbar-image"
          alt=""
          style="width: 40px;
  height: 40px;
  padding: 5px;"
        />
      </a>
        <a class="nav-link" href="#">About Me</a>
          <a class="nav-link" href="#">Projects</a>
          <a class="nav-link" href="#">Testimonials</a>
           <a class="nav-link" href="#">Projects</a>
          <a class="nav-link" href="#">Testimonials</a>
    


         <form class="d-flex" role="search">
        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
      </form>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">SIGN IN</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
   
      </ul>
      
    </div>
  </div>
</nav>

<!-- second nav start -->

<nav class="navbar navbar-expand-lg bg-info navbar-light" >
  <div class="container-fluid m-auto">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       
         <li class="nav-item dropdown">
          <a class="nav-link "   style="color:#fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
          
          </ul>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link "  style="color:#fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          
          </ul>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link " href="#" style="color:#fff"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
        
          </ul>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link " href="#" style="color:#fff" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           
          </ul>
        </li>

          <li class="nav-item dropdown">
          <a class="nav-link " style="color:#fff" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" style="color:#fff" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>






 <div class="detailed-view-bg-container">
      <h1 class="detailed-view-heading">Detailed View</h1>
      <div class="detailed-view-card-container">
        <div id="goldenTempleCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#goldenTempleCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#goldenTempleCarousel" data-slide-to="1"></li>
            <li data-target="#goldenTempleCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/goldentemple1-img.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/goldentemple2-img.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/goldentemple3-img.png" class="d-block w-100" alt="..." />
            </div>
          </div>
          <a class="carousel-control-prev" href="#goldenTempleCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#goldenTempleCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="detailed-view-card-text-container">
          <h1 class="detailed-view-card-heading">Golden Temple</h1>
          <p class="detailed-view-card-description">
            The Golden Temple, also known as Harmandir Sahib is a gurdwara
            located in the city of Amritsar, Punjab, India. There are many
            places to visit Near Golden Temple like Jallianwala Bagh, Wagah Border, Harike Wetland, Bathinda Fort.
          </p>
        </div>
      </div>
    </div>





<div class="diwali-top-section">
      <h1 class="diwali-top-section-heading">
        Celebrate Diwali with your friends
      </h1>
    </div>
    <div class="diwali-bottom-section">

        <div class="d-flex flex-row justify-content-start">
      <div class="d-flex flex-row justify-content-start">
        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/lamp-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Diwali Air Balloon</h1>
          <p class="diwali-card-price">Rs 369</p>
        </div>

        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/diya-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Diwali - Lamp</h1>
          <p class="diwali-card-price">Rs 50</p>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-start">
        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/firework-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Sparklers</h1>
          <p class="diwali-card-price">Rs 150</p>
        </div>

        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/firecracker-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Fire Cracker</h1>
          <p class="diwali-card-price">Rs 560</p>

        </div>
       <!--  <div>
             <button class="btn btn-primary">View More</button>
        </div> -->
     

       </div>
     

  


      <div class="d-flex flex-row justify-content-start">
        <div class="d-flex flex-column justify-content-start">
        <div class="d-flex flex-row justify-content-start">
      <div class="d-flex flex-row justify-content-start">
        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/lamp-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Diwali Air Balloon</h1>
          <p class="diwali-card-price">Rs 369</p>
        </div>

        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/diya-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Diwali - Lamp</h1>
          <p class="diwali-card-price">Rs 50</p>
        </div>
      </div>
      <div class="d-flex flex-row justify-content-start">
        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/firework-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Sparklers</h1>
          <p class="diwali-card-price">Rs 150</p>
        </div>

        <div class="diwali-card-item">
          <img
            src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/firecracker-img.png"
            class="diwali-card-image"
          />
          <h1 class="diwali-card-name">Fire Cracker</h1>
          <p class="diwali-card-price">Rs 560</p>

        </div>
       <!--  <div>
             <button class="btn btn-primary">View More</button>
        </div> -->
     

       </div>
      </div>

      </div>
          </div>
</div>

    </div>































<section  class="bg-light text-white carousel-1 mb-3" style="min-height:40vh">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="min-height:40vh"> 
  <div class="carousel-indicators">
    <button type="button" data-bs-target    ="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner" style="min-height:40vh" >
    <div class="carousel-item active">
        <div class="container-fluid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12  mb-md-0 ">
                    <!-- <div class="carousel-image3"> <h1 class="text-center pt-5">welcome  </h1></div> -->
                     <img src="./../image/analysis.jpg" class="img-fluid" alt="...">

                     <div >
                         <div class="d-flex flex-column justify-content-end"> <!-- <div class="d-flex flex-row justify-content-between"> -->
                          <div>
                                  <img src="./../image/analysis.jpg" class="img-fluid" alt="...">

                            </div>
                           <!--   <div>
                                <img src="./../image/delivery.jpg" class="d-sm-none d-md-block" height="95%" width="280vw" />
                            </div>
                            <div>
                                <img src="./../image/delivery.jpg"   class="d-sm-none d-md-block" height="95%" width="100vw" />   
                            </div> -->
                          <!--   <div>
                               <img src="./../image/dna.jpg"  height="95%" width="280" />
                            </div> 
                            <div>
                                <img src="./../image/delivery.jpg"  height="95%" width="280" />
                            </div> -->
                            <!-- <div>
                                <img src="./../image/delivery.jpg"  height="95%" width="280" />
                            </div>
                              <div>
                                <img src="./../image/delivery .jpg"  height="90%" width="280" />
                            </div> -->
                         -->
                     </div>
                </div>
             

            </div>

        </div>
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-4 mb-md-0">
                     
                        <!-- <img src="./../image/dna.jpg" class=" img-fluid  " alt="..."> -->
                          <div>
                                <img src="./../image/delivery.jpg" class="d-sm-none d-md-block" height="95%" width="280em" />
                            </div>

              
              
                     </div>
          

            </div>

        </div>
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-4 mb-md-0">
 <div class="carousel-image2"></div>
      <!-- <img src="./../image/pulse-trace.jpg" class="img-fluid " alt="..." > -->
        </div>
            

            </div>

        </div>
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section> 



<section>
    <div class="container-fluid">
        <div class="row" >

            <?php $r = 0; while($r <2) { ?>
            <div class="col-lg-3 col-sm-4 ">

   <div class="bg-light card ">
     
      <form>
                <img class="card-img"  src="../image/<?php echo "delivery.jpg"  ?> " alt="Card image cap">

               <div class="card-body">
                        <p class="card-title">  <?php  //echo $row['product_name']; ?> </p>
                        <p class="card-text "> <del class="text-secondary p-1" > <?php //echo $row['price'];  ?>  </del>
                       <?php //echo $row['mrp'];  ?>       </p>
                       <p >  <?php // echo $row['brand_name'];  ?>  </p>
                   <input type="hidden" name="card-title" value="jkbvjdfjgbd" />
                   <input type="hidden" name="card-text" value="fhjdfsjkdjjdfg" />
                   <input type="hidden" name="id" value="77"/>

              </div>
         </form>  
   </div>

</div>
            

            <div class="col-md-3 col-sm-6 col-6" style="background-color: #f7fbff">               
                 <div class="temp">
                        <img src="./../image/pulse-trace.jpg" class="im" alt="...">
                        <div>
                             <p class="product">DOLO</p>
                             <p class="brand"> heakthvit</p>
                            <span class="price">63544</span> <span class="mrp text">4682343264</span>
                                <input type="hidden" name="produc_id" value="1">
                                <input type="hidden" name="product_name" value="Dolo">
                                <input type="hidden" name="product_brand" value="heakthvit">
                                <button class="btn btn-sm btn-secondary" > To view </button>

                       </div>
               </div>
            </div>

           <div class="col-md-3 col-sm-6 col-6" style="background-color: #f7fbff">               
                 <div class="temp">
                        <img src="./../image/pulse-trace.jpg" class="im" alt="...">
                        <div>
                             <p class="product">DOLO</p>
                             <p class="brand"> heakthvit</p>
                            <span class="price">63544</span> <span class="mrp text">4682343264</span>
                                <input type="hidden" name="produc_id" value="1">
                                <input type="hidden" name="product_name" value="Dolo">
                                <input type="hidden" name="product_brand" value="heakthvit">
                                <button class="btn btn-sm btn-secondary" > To view </button>

                       </div>
               </div>
            </div>
             <?php  $r = $r+1; }?>


</div>
</div>

<section class="">
    <div class="py-3 mb-3 mt-3">
        <img src="./../image/analysis.jpg" height="120"  width="500" class="img-car ">
    </div>

</section>



        <!--     <?php $r = 0; while($r <2) { ?>
            <div class="col-md-3  col-sm-6 col-6">
               <div class="d-flex flex-column justify-content-between">
              <img src="./../image/pulse-trace.jpg" class="rounded mx-auto d-block" alt="...">
                         <div>
              <p class="product">DOLO</p>
              <p class="brand"> heakthvit</p>
              <span class="price">63544</span> <span class="mrp text">4682343264</span>
          </div>
               </div>
                
            </div>
             <div class="col-md-3 col-sm-6 col-6">
               
                 <div class="d-flex flex-column justify-content-between">
              <img src="./../image/pulse-trace.jpg" class="rounded mx-auto d-block" alt="...">
                        <div>
              <p class="product">DOLO</p>
              <p class="brand"> heakthvit</p>
              <span class="price">63544</span> <span class="mrp text">4682343264</span>
          </div>
               </div>
            </div>
            

             <div class="col-md-3 col-sm-6 col-6">
               <div class="d-flex flex-column justify-content-between">
              <img src="./../image/pulse-trace.jpg" class="rounded mx-auto d-block" alt="...">
                <div>
              <p class="product">DOLO</p>
              <p class="brand"> heakthvit</p>
              <span class="price">63544</span> <span class="mrp text">4682343264</span>
          </div>
               </div>
                
            </div>
            
             <div class="col-md-3 col-sm-6 col-6">
               <div class="d-flex flex-column justify-content-between">
              <img src="./../image/pulse-trace.jpg" class="rounded mx-auto d-block" alt="...">
                <div>
              <p class="product">DOLO</p>
              <p class="brand"> heakthvit</p>
              <span class="price">63544</span> <span class="mrp text">4682343264</span>
          </div>
               </div>
                
            </div>
             <?php  $r = $r+1; }?>
            
        </div>
    </div>
    



</section> -->


<!-- 
<section  class=" container bg-dark text-white carousel-1" style="min-height:10vh">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="min-height:10vh"> 
  <div class="carousel-indicators">
    <button type="button" data-bs-target    ="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner" style="min-height:60vh" >
 
    <div class="carousel-item active">
        <div class="container-fulid align-items-center" style="min-height:60vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-md-0">
                     <img src="./../image/analysis.jpg" class="carousel-image " alt="...">
                </div>
             

            </div>

  
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:60vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-md-0">

                <img src="./../image/dna.jpg" class=" carousel-image  " alt="...">
                     </div>
          

            </div>

        </div>
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:60vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-md-0">

      <img src="./../image/pulse-trace.jpg" class="carousel-image  " alt="..." >
        </div>
            

            </div>

        </div>
     </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>



 -->











 

<section  class="bg-light text-white carousel-1 mb-3" style="min-height:40vh">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="min-height:40vh"> 
  <div class="carousel-indicators">
    <button type="button" data-bs-target    ="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner" style="min-height:40vh" >
    <div class="carousel-item active">
        <div class="container-fulid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12  mb-md-0 ">
                    <!-- <div class="carousel-image3"> <h1 class="text-center pt-5">welcome  </h1></div> -->
                     <!-- <img src="./../image/analysis.jpg" class="img-fluid" alt="..."> -->

                     <div >
                         <div class="d-flex flex-row justify-content-between">
                          <div>
                                <img src="./../image/delivery.jpg"  class="d-sm-none d-md-block" height="95%" width="280" />  
                            </div>
                             <div>
                                <img src="./../image/delivery.jpg" class="d-sm-none d-md-block" height="95%" width="280" />
                            </div>
                            <div>
                                <img src="./../image/delivery.jpg"   class="d-sm-none d-md-block" height="95%" width="280" />
                            </div>
                            <div>
                                <img src="./../image/delivery.jpg"  height="95%" width="280" />
                            </div>
                            <div>
                                <img src="./../image/delivery.jpg"  height="95%" width="280" />
                            </div>
                            <div>
                                <img src="./../image/delivery.jpg"  height="95%" width="280" />
                            </div>
                              <div>
                                <img src="./../image/delivery.jpg"  height="90%" width="280" />
                            </div>
                         </div>
                     </div>
                </div>
             

            </div>

        </div>
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-4 mb-md-0">
                     <div class="carousel-image1">
                        <img src="./../image/dna.jpg" class=" img-fluid  " alt="...">

                     </div>
              
                     </div>
          

            </div>

        </div>
     
    </div>
    <div class="carousel-item">

 <div class="container-fluid align-items-center" style="min-height:40vh">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 mb-4 mb-md-0">
 <div class="carousel-image2"></div>
      <img src="./../image/pulse-trace.jpg" class="img-fluid " alt="..." >
        </div>
            

            </div>

        </div>
     
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section> 




 

























<?php //include('./navbar.php'); ?>

















<?php 
 $sql = "SELECT * FROM `product` LIMIT 10";
 if ($result = mysqli_query($conn, $sql)) {
  //echo "Returned rows are: " . mysqli_num_rows($result);
}
?>


    <div class="container">
        <div class="row ">
                  <div class="col-lg-12 ">
                        <h1 class="text-center p-5 bg-dark rounded text-white"> Filtered item </h1>
                        <hr />
                 </div>

<?php  
while( $row = mysqli_fetch_assoc($result) ){
    ?>
   <div class="col-lg-3 col-sm-4 ">
            <div class="bg-light card ">
     
      <form method="post" action="User_details.php">
                <img class="card-img-top img-fluid"  src="../image/<?php echo $row['image'];  ?> " alt="Card image cap">

               <div class="card-body">
                        <p class="card-title">  <?php  echo $row['product_name']; ?> </p>
                        <p class="card-text "> <del class="text-secondary p-1" > <?php echo $row['price'];  ?>  </del>
                         <?php echo $row['mrp'];  ?>       </p>
                       <p >  <?php echo $row['brand_name'];  ?>  </p>
               <input type="hidden" name="card-title" value="<?php  echo $row['product_name']; ?>" />
               <input type="hidden" name="card-text" value="<?php echo $row['price'];  ?>" />
               <input type="hidden" name="id" value="<?php echo $row['product_id'];  ?>" />
              </div>
         </form>  
     </div>
</div>


<div class="col-lg-3 col-sm-4">
   <div class="bg-light card ">     
      <form>
                <img class="card-img-top img-fluid"  src="../image/<?php echo $row['image'];  ?> " alt="Card image cap">

               <div class="card-body">
                        <p class="card-title">  <?php  echo $row['product_name']; ?> </p>
                        <p class="card-text "> <del class="text-secondary p-1" > <?php echo $row['price'];  ?>  </del>
                       <?php echo $row['mrp'];  ?>       </p>
                       <p >  <?php echo $row['brand_name'];  ?>  </p>

                     <input type="hidden" name="card-title" value="jkbvjdfjgbd" />
                     <input type="hidden" name="card-text" value="fhjdfsjkdjjdfg" />
                     <input type="hidden" name="id" value="77"/>

              </div>
       

         </form>  
   </div>



</div>


<div class="col-lg-3 col-sm-4">
   <div class="bg-light card ">     
      <form>
                <img class="card-img-top img-fluid"  src="../image/<?php echo $row['image'];  ?> " alt="Card image cap">

               <div class="card-body">
                        <p class="card-title">  <?php  echo $row['product_name']; ?> </p>
                        <p class="card-text "> <del class="text-secondary p-1" > <?php echo $row['price'];  ?>  </del>
                       <?php echo $row['mrp'];  ?>       </p>
                       <p >  <?php echo $row['brand_name'];  ?>  </p>
<!-- $row['image'];  -->
                   <input type="hidden" name="card-title" value="jkbvjdfjgbd" />
               <input type="hidden" name="card-text" value="fhjdfsjkdjjdfg" />
               <input type="hidden" name="id" value="77"/>

              </div>
       

         </form>  
   </div>



</div>










<div class="col-lg-3 col-sm-4 ">

   <div class="bg-light card ">
     
      <form>
                <img class="card-img-top img-fluid"  src="../image/<?php echo $row['image'];  ?> " alt="Card image cap">

               <div class="card-body">
                        <p class="card-title">  <?php  echo $row['product_name']; ?> </p>
                        <p class="card-text "> <del class="text-secondary p-1" > <?php echo $row['price'];  ?>  </del>
                       <?php echo $row['mrp'];  ?>       </p>
                       <p >  <?php echo $row['brand_name'];  ?>  </p>
                   <input type="hidden" name="card-title" value="jkbvjdfjgbd" />
                   <input type="hidden" name="card-text" value="fhjdfsjkdjjdfg" />
                   <input type="hidden" name="id" value="77"/>

              </div>
         </form>  
   </div>

</div>


</div>
         <?php
} ?>



</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $('form').on('click',function(){
     // alert( $("input[name=card-title]").val())
      alert( $("input[name=id]").val())

    });
</script>
</body>
</html>