<?php
session_start();
if(!isset($_SESSION['username'])){
    $_SESSION['msg']="you must log in frist to view this page";
     header('location:index.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <meta name="description" content="Write confessionsell,sell and buy products in your college,also find pg near your college and gtu-college events.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link  rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>expinfo.live</title>
</head>
<body>
              <?php
               if(isset($_SESSION['success'])) :
              ?>

<div class="header" id="topheader">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #00abff;">
        <div class="container p-2">
        <a class="navbar-brand font-weight-bold text-white" href="http://www.expinfo.live">Expinfo</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
              <a class="nav-link" ><?php echo $_SESSION['username']; ?> </a>
             </li>
              <li class="nav-item active">
              <a class="nav-link" href="http://www.expinfo.live">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#abo">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://www.viralvivek.com">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
             <li class="nav-item">
                 <a href="index.php?logout='1'" class="nav-link">Log Out</a>
             </li>
            </ul>
           </div>
        </div>
        <?php endif ?>
      </nav>
      <section class="header-section">
      <div class="center-div">
          <h1 class="font-weight-bold">Explore Informaion</h1>
          <p>sell and buy products.</p>
          <div class="header-buttons">
             <a href="#sel-coll">Select College</a>
          </div> 
      </div>
      </section>

</div>
<!--   ************************* header end**************************************-->
<section class="selectcoll" id="sel-coll">
    <div class="container headings text-center">
       <h2 class="text-center font-weight-bold">SELECT COLLEGE</h2>
        <div class="container text-center">
         <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Your College
            </button>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><a href="gecr.html">Government engineering college Rajkot</a></button>
              <button class="dropdown-item" type="button"><a href="vgec.html">Vishwakarma Government Engineering College</a></button>
              <button class="dropdown-item" type="button"><a href="sal.html">Sal college of Engineering</a></button>
              <button class="dropdown-item" type="button"><a href="oak.html">Silver oak College of Engineering and Technology</a></button>
              <button class="dropdown-item" type="button"><a href=""></a></button>
            </div>
          
              <div class="container headings text-center">
                 <h2 class="text-center font-weight-bold">PRODUCTS</h2>
                  <div class="container text-center align-items-center">
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">   Books   </button></a>                  
                         </div> 
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">EG & D Instruments</button></a>                  
                         </div>
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">Aprons</button></a>                  
                         </div> 
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">Elecrical Instruments </button></a>                  
                         </div>
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">Informaion About PG</button></a>                  
                         </div>
                         <div class="s1">
                          <a><button type="button" class="btn btn btn-primary btn-md btn-block">Confessions</button></a>                  
                         </div>
                     </div>
        <div class="ce">
          <div class="header-buttons">
            <a href="collegeevents.html">College Events</a>
          </div>
        </div>
                 </div>
          </div>
      </div>
</div>
      <br/>
      <br/>
</section>
<section class="header-extradiv" id="ser">
    <div class="container">
        <div class="row">
            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-envira"></i></a>
                <h2>PRODUCTS</h2>
                <P> You can sell and purchase items like books,Eg & D instrument and many more items related to your college life.</P>
            </div>
            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-desktop"></i></a>
                <h2>EASY TO USE</h2>
                <P> It is totally free. just Select your college than,sell and buy products through Informaion.</P>
            </div>
            <div class=" extra-div col-lg-4 col-md-4 col-12">
                <a href="#"><i class="fa-3x fa fa-globe"></i></a>
                <h2>OTHER SERVICE</h2>
                <P> We also provide Informaion about pg near your college,confession page for each college and information of events in various colleges.</P>
            </div>  
        </div>
    </div>
</section>

<!--***************************************** contact  **********************************************8-->
<section class="contactus" id="contact">
    <div class="container headings text-center">
    <h2 class="text-center font-weight-bold">CONTACT US</h2>
    <P class="text-center pt-1">We are here To help and answer any Question You have.We wants to help you. </P>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
                <form action="contact_us.php" method="POST">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder=" Enter Your Name" name="name" id="name" required autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder=" Enter Email Address" name="email" id="email" required autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mono" id="mobile" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Your Massege" name="mess" id="massege"  required autocomplete="off"></textarea>
                      </div>
                      <div  class="d-flex justify-content-center form-button">
                         <button type="submit" class="btn btn-primary" name="subbut">Submit</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--******************subcribe ****************************************************************************************-->
<section class="sub" id="subus">
    <div class="container headings text-center">
    <h2 class="text-center font-weight-bold">SUBSCRIBE US</h2>
    </div>
       <div class="container">
          <div class="row">
              <div class="col-lg-8 offset-lg-2 col-12">
                <form action="subexp.php" method="POST">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control news-ln" name="email" placeholder="Your Email" required autocomplete="off">
                      <div class="input-group-append">
                        <button name="subscribe" type="submit"><span class="input-group-text">Subscribe</span></button>
                      </div>
                  </div>
                </form>
              </div>
          </div>
      </div>
</section>
<!--**********************************footer**************************************-->
<footer class="footersection" id="footerdiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
                <div class="nav-link">
                    <h3>NAVIGATION LINKS</h3>
                    <li><a href="http://www.expinfo.live">Home</a></li>
                    <li><a href="#ser">Service</a></li>
                    <li><a href="collegeevents.html">College Evants</a></li>
                    <li><a href="https://www.insideindivice.blogspot.com">Blog</a></li>
                    <li><a href="othersites.html">Other sites</a></li>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
                <div id="abo">
                    <h3>ABOUT EXPINFO</h3>
                    <p>It is totally for YOU.Here we provide Service to sell your produts,you can also Buy product from here.
                        by sharing your product Informaion to public.we are also provide service to share and get information
                        about PGs ,Evants and write a confessions.
                     </p>
                </div>

            </div>
           
            <div class="col-lg-4 col-md-12 col-12 footer-div text-center">
                <div>
                    <h3>FOLLOW US</h3>
                    <a href="http://fb.me/theexpinfo"><i class="fa-2x fa fa-facebook-square"></i></a>
                    <a href="http://t.me/expinfo"><i class="fa-2x fa fa-telegram"></i></a>
                    <a href="http://instagram.com/the_expinfo"><i class="fa-2x fa fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/vsavaliya1106"><i class="fa-2x fa fa-pinterest"></i></a>
                </div>

            </div>
        </div>
        <div class="mt-5 text-center">
            <p>Copyright @2020-21 All rights reserved | created by  <a href="https://instagram.com/savaliya__vishal"><i class="fa fa-instagram">savaliya__vishal</i></a></p>
        </div>
    </div>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>