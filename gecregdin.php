<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $uname = $_POST['username'];
    $name = $_POST['name'];
    $mono = $_POST['mono'];
    $bname = $_POST['ename'];
    $price = $_POST['price'];
    $query = "INSERT INTO gecregd(username,name,mono,ename,price) VALUES('$uname','$name','$mono','$bname','$price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: gecregd.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 