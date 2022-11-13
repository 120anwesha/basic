<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'blood_bank');

if(isset($_POST['deletedata']))
{
    $camp_id = $_POST['delete_camp_id'];

   $query_run ="CALL delete_camp_val('$camp_id')";


  //$query_run = "DELETE FROM users WHERE user_id='$user_id'";
   $query = mysqli_query($connection, $query_run);

    if($query)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location: camp_index.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>