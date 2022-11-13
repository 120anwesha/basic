<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $hospital_id = $_POST['update_hospital_id'];
        
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
       

        $query = "CALL update_hospital_val('$hospital_id','$name','$address','$email','$city')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: hospital_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>