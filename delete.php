<?php

include("connection.php");
$rollno = $_GET['rn'];
$query = "DELETE FROM STDFORM WHERE `ROLLNO`= '$rollno'";
$data = mysqli_query($conn, $query);
if($data){
    ?><script>alert('Record Deleted')</script><?php;
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/sarun/viewlist.php">
    <?php
}
else{
    echo "Oops! an error occured";
}

?>