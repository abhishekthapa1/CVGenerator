<?php
session_start();

    include 'db_conn.php';

    if(isset($_POST['loginbtn']))
    {
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];

        $sql = "SELECT * FROM user WHERE uname='$uname' AND upass='$upass'";
        $result=mysqli_query($conn, $sql);

        if($result->num_rows>0)
        {
            $row = $result->fetch_assoc();
            $_SESSION['user_session']=TRUE;
            $_SESSION['user_id']=$row['uid'];
            header("Location:dashboard.php");
            $conn->close();
        }
        else{
            header("Location:login.php");
        }

    }

    elseif(isset($_POST['signupbtn']))
    {
        $fname=$_POST['fname'];
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];

        $sql = "INSERT INTO user(fname,uname,upass) 
        VALUES ('$fname','$uname','$upass')";

        mysqli_query($conn, $sql);

        header("Location:login.php");
        $conn->close();
    }

    else{
            header('location:index.php');
    }
?>