<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $hospital_id = $_POST['hospital_id'];
    
   $query ="CALL insert_doctor_val('$name','$contact','$email','$hospital_id')";


    //$query = "INSERT INTO users (`uname`,`password`) VALUES ('$uname','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: doctor_index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>