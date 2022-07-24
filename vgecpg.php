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
  <meta name="description" content="Write confessionsell,sell and buy products in Vishwakarma Government Engineering College(vgec),also find pg near vgec(Vishwakarma Government Engineering College) and gtu-college events.">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>expinfo/vgec/pg</title>
</head>
<body>
<div class="itemheader">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #00abff";>
        <div class="container p-2">
        <a class="navbar-brand font-weight-bold text-white" href="www.expinfo.live">Expinfo</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
               <li class="nav-item">
              <a class="nav-link"><?php echo $_SESSION['username']; ?> </a>
              </li> 
              <li class="nav-item active">
              <a class="nav-link" href="http://www.expinfo.live">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#addinfo">Add information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="collegeevents.html">College Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#follow">Follow Us</a>
            </ul>
            <input type="hidden" name="u_1" id="u_1" value="<?php echo $_SESSION['username']; ?>">
           </div>
        </div>
      </nav>
    
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">EXPINFO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body popup text-center" >
       <h2> Add Information</h2>
       <form action="vgecpgin.php" method="POST">
           <div class="form-group">
             <input type="text" class="form-control" placeholder=" Enter User name" name="username" id="uname" value="<?php echo $_SESSION['username']; ?>" required autocomplete="off">
           </div>
           <div class="form-group">
             <textarea type="text" class="form-control" name="address" placeholder="Enter Address" required autocomplete="off"></textarea>
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="name" placeholder="Your Name" required autocomplete="off">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="mono" placeholder="Mobile No" required autocomplete="off">
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="insertdata">Save Data</button>
           </div>
        </form>
      </div>
  </div>
</div>
</div>
<!--************************************************************************************************-->
<section class="main-con">
  <div class="container">
      <div class="header-extradiv"> 
         <h2 class="text-center">Expinfo</h2> 
            <div class="bt-popup" id="addinfo">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
               Add information
              </button>
            </div>
      </div>
            
            <?php
                require "loho.php";
                $query = "SELECT * FROM vgecpg";
                $query_run = mysqli_query($con, $query);
            ?>
                <table id="datatableid" class="table  table-sm table-hover table-info thead-light table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Address</th>
                            <th scope="col">Name</th>                                                                                
                            <th scope="col">Mobile No</th>                                                                                
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $col)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td class="td-row"> <?php echo $col['id']; ?> </td>                                                   
                            <td class="td-row"> <?php echo $col['address']; ?> </td>                                                    
                            <td class="td-row"> <?php echo $col['name']; ?> </td>
                            <td class="td-row"> <?php echo $col['mono']; ?> </td>    
                            <td class="td-row">
                                <input type="hidden" name="u_2" id="u_2<?php global $i;  $r=1; $GLOBALS['i'] = $GLOBALS['i'] +$GLOBALS['r'] ;   echo $GLOBALS['i']; ?>" value="<?php echo $col['username']; ?>">
                             <p>
                              <b class="editbtn tda" id="ed<?php  echo  $GLOBALS['i'];   ?>" style="display:none" >EDIT</b>
                              <b class="deletebtn tda"  id="de<?php  echo  $GLOBALS['i'];   ?>" style="display:none" >DElETE</b> 
                             </P>
                            </td>
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
              </br>
              </br>
     </div>
</section>
<footer class="footersection" id="footerdiv">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
                <div class="nav-link">
                    <h3>NAVIGATION LINKS</h3>
                    <li><a href="http://www.expinfo.live">Home</a></li>
                    <li><a href="collegeevents.html">College Evants</a></li>
                    <li><a href="http://www.viralvivek.com">Blog</a></li>
                    <li><a href="othersites.html">Other sites</a></li>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
                <div>
                    <h3>ABOUT EXPINFO</h3>
                    <p>It is totally for YOU.Here we provide Service to sell your produts,you can also Buy product from here.
                       by sharing your product Informaion to public.we are also provide service to share and get information
                       about PGs ,Evants and write a confessions.
                    </p>
                </div>

            </div>
           
            <div class="col-lg-4 col-md-12 col-12 footer-div text-center">
                <div id="follow">
                    <h3>FOLLOW US</h3>
                    <a href="http://fb.me/theexpinfo"><i class="fa-2x fa fa-facebook-square"></i></a>
                    <a href="http://t.me/expinfo"><i class="fa-2x fa fa-telegram"></i></a>
                    <a href="http://instagram.com/the_expinfo"><i class="fa-2x fa fa-instagram"></i></a>
                    <a href="https://www.pinterest.com/vsavaliya1106"><i class="fa-2x fa fa-pinterest"></i></a>
                </div>

            </div>
        </div>
        <div class="mt-5 text-center">
            <p>Copyright @2020-21 All rights reserved | created by  <a href="instagram.com/savaliya__vishal"><i class="fa fa-instagram">savaliya__vishal</i></a></p>
        </div>
    </div>

</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>
<script>
     var x,y,i,e1,e2;
    
for(i=1;i<1000;i++) {
  
  
    y=document.getElementById('u_2' +i).value;
    x= document.getElementById("u_1").value;
    if(Object.entries(x).toString()===Object.entries(y).toString())
     {
        e1 = document.getElementById('ed' +i);
        e1.style.display = 'block';
        e2 = document.getElementById('de' +i);
        e2.style.display = 'block';
    
      }
     else
      {
          continue;
      }
 

}
 </script>   
</body>
</html>