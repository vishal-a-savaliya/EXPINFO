<?php require "loho.php";

if(isset($_POST['subscribe']))

{
    $email= $_POST['email'];
    
    $query = "INSERT INTO subscribe(email) VALUES('$email')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("you are subscribed"); </script>';
                header('Location:index.html');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>