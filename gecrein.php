<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $mono = $_POST['mono'];
    $bname = $_POST['ename'];
    $price = $_POST['price'];
    $query = "INSERT INTO gecre(username,name,mono,ename,price) VALUES('$uname','$name','$mono','$bname','$price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: gecre.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 