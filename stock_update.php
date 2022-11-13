<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

    if(isset($_POST['updatedata']))
    {   
        $stock_id = $_POST['update_stock_id'];
        
        $blood_group = $_POST['blood_group'];
        $unit = $_POST['unit'];
       

        $query = "CALL update_stock_val('$stock_id','$blood_group','$unit')";

        //$query = "UPDATE stock SET blood_group='$blood_group', unit='$unit' WHERE stock_id='$stock_id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: stock_index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>