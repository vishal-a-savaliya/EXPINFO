<?php require "loho.php";
 if((isset($_POST['insertdata'])))
 {
    $uname = $_POST['username'];
    $name = $_POST['address'];
    $mono = $_POST['name'];
    $bname = $_POST['mono'];
    $query = "INSERT INTO vgecpg(username,address,name,mono) VALUES('$uname',$name','$mono','$bname')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: vgecpg.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
 