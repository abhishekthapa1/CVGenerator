<?php
session_start();


include 'db_conn.php';
$cvfirstname =              $_POST['cvfirstname'];
$cvlastname =               $_POST['cvlastname'];
$cvdob =                $_POST['cvdob'];
$cvaddress =                $_POST['cvaddress'];
$cvemail =              $_POST['cvemail'];
$cvwebsite =                $_POST['cvwebsite'];
$cvtitle =              $_POST['cvtitle'];
$cvschoolname =                 $_POST['cvschoolname'];
$cvschoolgrade =                $_POST['cvschoolgrade'];
$cvcollegename =                $_POST['cvcollegename'];
$cvcollegegrade =               $_POST['cvcollegegrade'];
$cvhighschoolname =                 $_POST['cvhighschoolname'];
$cvcbachelorgrade =                 $_POST['cvcbachelorgrade'];
$skillone =                 $_POST['skillone'];
$skilltwo =                 $_POST['skilltwo'];
$experienceone =                $_POST['experienceone'];
$experiencetwo =                $_POST['experiencetwo'];
$user_cvid=$_SESSION['user_id'];

//Inserting data of cv to db
if(isset($_POST['submit']))
    {
        $sql="INSERT INTO `cvinput` (`cv_title`, `user_cvid`, `firstname`, `lastname`, `dob`, `addres`, `email`, `website`, `schoolname`, `seegpa`, `collegename`, `+2gpa`, `highschoolname`, `bachelorsgpa`, `skillone`, `skilltwo`, `experienceone`, `experiencetwo`) VALUES ('$cvtitle','$user_cvid', '$cvfirstname', '$cvlastname','$cvdob','$cvaddress','$cvemail','$cvwebsite','$cvschoolname','$cvschoolgrade','$cvcollegename','$cvcollegegrade','$cvhighschoolname','$cvcbachelorgrade','$skillone','$skilltwo','$experienceone','$experiencetwo')";
        $result = mysqli_query($conn,$sql);
        $_SESSION['message']="New CV Created";
        header("Location:dashboard.php");
}

//Update data of cv to db
elseif(isset($_POST['upd_btn']))
{
    $cid=$_POST['cid'];
    $sql="UPDATE cvinput SET cv_title='$cvtitle' WHERE cid=$cid";
    $result = mysqli_query($conn,$sql);
    $_SESSION['message']="CV Updated";
    header("Location:dashboard.php");
}

//Deleting Data
elseif(isset($_GET['del']))
{
    $cid=$_GET['del'];
    $sql="DELETE FROM cvinput WHERE cid = $cid";
    $result=mysqli_query($conn,$sql);
    $_SESSION['message']="CV Deleted";
    header("Location:dashboard.php");
}

else{
    header("Location:logout.php");
}

?>




