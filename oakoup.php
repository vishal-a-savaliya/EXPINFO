<?php require "loho.php";

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];

        $name = $_POST['name'];
        $mono = $_POST['mono'];
        $bname = $_POST['bname'];
        $price = $_POST['price'];

        $query = "UPDATE oako SET name='$name', mono='$mono',pname='$bname', price='$price' WHERE id='$id'  ";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:oako.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>