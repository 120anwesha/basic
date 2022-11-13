<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $doctor_id = $_POST['update_doctor_id'];
        
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $hospital_id = $_POST['hospital_id'];
       
       

        $query = "CALL update_doctor_val('$doctor_id','$name','$contact','$email','$hospital_id')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: doctor_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>