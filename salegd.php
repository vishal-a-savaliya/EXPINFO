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
    <title>expinfo/sal/EG & D instruments</title>
</head>
<body>
<div class="itemheader">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #00abff";>
        <div class="container p-2">
        <a class="navbar-brand font-weight-bold text-white" href="http://www.expinfo.live">Expinfo</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
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
       <form action="salegdin.php" method="POST">
           <div class="form-group"> 
             <input type="text" class="form-control" name="name" placeholder="Your Name" required autocomplete="off">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="mono" placeholder="Mobile No" required autocomplete="off">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="ename" placeholder="Enter instrument Name" required autocomplete="off">
           </div>
           <div class="form-group">
             <input type="text" class="form-control" name="price" placeholder="Enter Instrument Price" required autocomplete="off">
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
                $query = "SELECT * FROM salegd";
                $query_run = mysqli_query($con, $query);
            ?>
                <table id="datatableid" class="table  table-sm table-hover table-info thead-light table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No</th>                                                        
                            <th scope="col">Instrument</th>                                                        
                            <th scope="col" >price</th>                            
                            <th scope="col" >Edit</th>                            
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
                            <td class="td-row"> <?php echo $col['name']; ?> </td>                                                    
                            <td class="td-row"> <?php echo $col['mono']; ?> </td>
                            <td class="td-row"> <?php echo $col['ename']; ?> </td>                          
                            <td class="td-row"> <?php echo $col['price']; ?> </td>                          
                            <td class="td-row">
                               <p><b class="editbtn tda"><i class="fa-2x fa fa-edit"></i></b>
                               <b class="deletebtn tda"><i class="fa-2x fa fa-trash"></i></b></p>
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
<!--**************************************************************************************-->
 <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
 <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="salegdup.php" method="POST">

            <div class="modal-body ">

                <input type="hidden" name="update_id" id="update_id">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" autocomplete="off">
                </div>

                <div class="form-group">
                    <input type="text" name="mono" id="mono" class="form-control" placeholder="Enter Phone Number"  autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="ename" id="ename" class="form-control" placeholder="Enter instrument Name"  autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="price" id="price" class="form-control" placeholder="Enter instrument Price"  autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>
<!-- #################################################################################################### -->





<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Your Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="salegdd.php" method="POST">

            <div class="modal-body popup">

                <input type="hidden" name="delete_id" id="delete_id">

                <h4> Do you want to Delete this Data ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>

<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {
        
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
      
    });
});

</script>



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#mono').val(data[2]);
            $('#ename').val(data[3]);
            $('#price').val(data[4]);
    });
});

</script>
</body>
</html>