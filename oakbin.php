<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $name = $_POST['name'];
    $mono = $_POST['mono'];
    $bname = $_POST['bname'];
    $price = $_POST['price'];
    $query = "INSERT INTO oakbooks(name,mono,bname,price) VALUES('$name','$mono','$bname','$price')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: oakbooks.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 