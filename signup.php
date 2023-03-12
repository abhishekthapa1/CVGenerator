
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/Bootstrap5.css">
    <script src="js/bootstrap.js"></script>
   <style>
    body{
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg clip-path='url(%26quot%3b%23SvgjsClipPath1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3ccircle r='93.335' cx='66.22' cy='-73.77' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='454.68' cy='418.38' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='93.335' cx='796.69' cy='733.42' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='134.78' cx='1085.21' cy='253.14' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='74.25' cx='1374.74' cy='328.54' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='163.385' cx='848.23' cy='392.43' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='52.145' cx='1329.45' cy='301.54' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='109.195' cx='987.28' cy='525.88' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='96.655' cx='644.99' cy='123.57' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='47.295' cx='361.49' cy='559.56' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='164.97' cx='411.47' cy='265.9' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='64' cx='895.38' cy='249.21' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='160.685' cx='513.6' cy='421.35' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='117.295' cx='882.23' cy='346.66' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='94.235' cx='361.49' cy='469.58' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='47.46' cx='1100.22' cy='386.97' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='107.515' cx='1333.1' cy='502.44' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='83.815' cx='554.43' cy='195.16' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='53.205' cx='1428.18' cy='470.81' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='162.95' cx='875.86' cy='276.48' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='118.445' cx='924.54' cy='256.73' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='87.075' cx='260.44' cy='466.95' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='63.595' cx='963.49' cy='329.82' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='128.5' cx='1222.65' cy='79.54' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='184.085' cx='900.01' cy='40.3' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='135.245' cx='1050.1' cy='192.79' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='126.155' cx='646.65' cy='276.24' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='58.165' cx='188.97' cy='288.47' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='153.85' cx='367.26' cy='394.81' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='127.255' cx='934' cy='372.49' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='183.64' cx='1283.8' cy='456.78' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='173.665' cx='1121.63' cy='175.77' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='125.67' cx='911.33' cy='401.61' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='178.72' cx='964.41' cy='45.67' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='141.565' cx='1090.38' cy='194.03' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='146.165' cx='793.06' cy='335.19' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='122.92' cx='1130.23' cy='522.4' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='95.08' cx='37.81' cy='523.9' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='186.29' cx='61.81' cy='215.35' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3ccircle r='116.94' cx='81.12' cy='259.3' stroke='%23365aa3' stroke-opacity='0.25' stroke-width='2'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cclipPath id='SvgjsClipPath1000'%3e%3crect width='1440' height='560' x='0' y='0'%3e%3c/rect%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e");
    }
    .col-md-5{
        margin-top:05%;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;        
      }
    input[type=text],input[type=email],input[type=password],input[type=number]{
        border-radius: 0px;
        border-top:0;
        border-left:0;
        border-right:0;
    }
    label{
      font-weight: 400;
    }
    h1{
        font-weight:600;
    }
    .btn{
        border-radius:0;
        background-color:#FF1864;
        padding:10px 50px;
    }
   .signbtn{
    display: flex;
    justify-content: center;
    align-items: center;
   }
   .alert-dismissible {
    
    font-size: 13px;
    padding: 1rem;
        }

   </style>

</head>
<body >
<div class="container">
    <div class="row ">
    <div class="col-md-5 mx-auto bg-light pt-5 px-5">
    
      <form action="usertable_action.php" method="POST">
        <h1>Sign Up</h1>
     <p class="lead">Create your Account.</p>

        <div class="row gx-1">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floating" placeholder="name@example.com" name="fname">
                    <label for="floatingInput">First Name</label>
            </div>
            </div>
    
 
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name" name="uname">
  <label for="floatingInput">Username</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="upass">
  <label for="floatingPassword">Password</label>
</div>
   
<div class="signbtn mt-4 mb-3">
    <button type="submit" class="btn btn-danger" name="signupbtn">Sign up</button>
</div>
<div class="text-center">
<p>Already have an account? <a href="login.php">Log In</a></p>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

