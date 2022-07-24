<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $name = $_POST['address'];
    $mono = $_POST['name'];
    $bname = $_POST['mono'];
    $query = "INSERT INTO salpg(address,name,mono) VALUES('$name','$mono','$bname')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: salpg.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 