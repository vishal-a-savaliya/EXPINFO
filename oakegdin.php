<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $name = $_POST['name'];
    $mono = $_POST['mono'];
    $bname = $_POST['ename'];
    $price = $_POST['price'];
    $query = "INSERT INTO oakegd(name,mono,ename,price) VALUES('$name','$mono','$bname','$price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: oakegd.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 