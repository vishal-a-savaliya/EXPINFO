<?php require "loho.php";

if(isset($_POST['subbut']))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mono= $_POST['mono'];
    $mess= $_POST['mess'];
    $query = "INSERT INTO contact_us(name,email,mono,mess) VALUES('$name','$email','$mono','$mess')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location:index.html');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>