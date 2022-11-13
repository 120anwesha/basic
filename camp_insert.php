<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $location = $_POST['location'];
    $agency_id = $_POST['agency_id'];
    
   $query ="CALL insert_blood_camp_val('$start_date','$end_date','$location','$agency_id')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: camp_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>