<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $blood_group = $_POST['blood_group'];
    $unit = $_POST['unit'];
    
   $query ="CALL insert_stock_val('$blood_group','$unit')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: stock_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>