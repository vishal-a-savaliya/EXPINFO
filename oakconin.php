<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {  $date = $_POST['date'];
    $name = $_POST['mess'];
    $mono = $_POST['mono'];
    $query = "INSERT INTO oakcon(date,mono,mess) VALUES('$date','$mono','$name')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: oakcon.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 