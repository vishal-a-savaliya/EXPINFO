<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="login.css">
  <meta name="description" content="Write confessionsell,sell and buy products in your college,also find pg near your college and gtu-college events.">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>registration</title>
</head>
<body>
    <section class="contactus" id="contact">
        <div class="container headings text-center">
        <h2 class="text-center font-weight-bold">REGISTER IN EXPINFO</h2>
        <P class="text-center pt-1">Become user of expinfo. </P>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
                    <form action="register.php" method="POST">
                       <?php include('e.php'); ?>
                          <div class="form-group">
                          <input type="text" class="form-control" placeholder=" Enter Username" name="username" id="uname" required autocomplete="off">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder=" Enter Email Address" name="email" id="email" required autocomplete="off">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password_1" id="pwd" required autocomplete="off">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" placeholder="Conform Password" name="password_2" id="pwd" required autocomplete="off">
                          </div>
                          <div  class="d-flex justify-content-center form-button">
                             <button type="submit" class="btn btn-primary" name="reg">Submit</button>
                          </div>
                          <P class="log"> Already a user ? <a href="index.php"><b>Log In</b></a></P>
                    </form>
                </div>
            </div>
        </div>
    </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>