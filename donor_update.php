<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $donor_id = $_POST['update_donor_id'];
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $blood_group = $_POST['blood_group'];
        $camp_id = $_POST['camp_id'];
       
       

        $query = "CALL update_blood_donor_val('$donor_id','$name','$gender','$email','$address','$date','$blood_group','$camp_id')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: donor_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>