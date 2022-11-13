<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $camp_id = $_POST['update_camp_id'];
        
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $location = $_POST['location'];
        $agency_id = $_POST['agency_id'];
       
       

        $query = "CALL update_camp_val('$camp_id','$start_date','$end_date','$location','$agency_id')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: camp_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>