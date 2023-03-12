<?php

session_start();
include 'db_conn.php';

if(isset($_GET['del']))
{
        $cid=$_GET['del'];
        $sql="DELETE FROM cvinput WHERE cid = $cid";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
        header("Location:dashboard.php");

        }
}
?>