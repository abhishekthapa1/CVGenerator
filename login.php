<?php
session_start();

?>

<!DOCTYPE html>
<html lan="en">

<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Bootstrap5.css">
  <script src="js/bootstrap.js"></script>

  <style>
    body {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg clip-path='url(%26quot%3b%23SvgjsClipPath1038%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%2332325d'%3e%3c/rect%3e%3ccircle r='36.56' cx='752.39' cy='498.23' fill='url(%23SvgjsLinearGradient1039)'%3e%3c/circle%3e%3ccircle r='37.24' cx='762.51' cy='298.24' fill='url(%23SvgjsLinearGradient1040)'%3e%3c/circle%3e%3ccircle r='29.055' cx='624.86' cy='256.49' fill='%2343468b'%3e%3c/circle%3e%3ccircle r='55.85' cx='913.82' cy='170.99' fill='%2343468b'%3e%3c/circle%3e%3ccircle r='31.71' cx='843.7' cy='555.69' fill='url(%23SvgjsLinearGradient1041)'%3e%3c/circle%3e%3ccircle r='48.75' cx='127.53' cy='445.81' fill='url(%23SvgjsLinearGradient1042)'%3e%3c/circle%3e%3ccircle r='33.695' cx='226.81' cy='522.74' fill='%2343468b'%3e%3c/circle%3e%3ccircle r='44.13' cx='1067.63' cy='11.85' fill='%2343468b'%3e%3c/circle%3e%3c/g%3e%3cdefs%3e%3cclipPath id='SvgjsClipPath1038'%3e%3crect width='1440' height='560' x='0' y='0'%3e%3c/rect%3e%3c/clipPath%3e%3clinearGradient x1='679.27' y1='498.23' x2='825.51' y2='498.23' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1039'%3e%3cstop stop-color='%23ab3c51' offset='0.1'%3e%3c/stop%3e%3cstop stop-color='%234f4484' offset='0.9'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='688.03' y1='298.24' x2='836.99' y2='298.24' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1040'%3e%3cstop stop-color='%2332325d' offset='0.1'%3e%3c/stop%3e%3cstop stop-color='%23424488' offset='0.9'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='780.2800000000001' y1='555.69' x2='907.1200000000001' y2='555.69' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1041'%3e%3cstop stop-color='%2384b6e0' offset='0.1'%3e%3c/stop%3e%3cstop stop-color='%23464a8f' offset='0.9'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='30.03' y1='445.81' x2='225.03' y2='445.81' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1042'%3e%3cstop stop-color='%23ab3c51' offset='0.1'%3e%3c/stop%3e%3cstop stop-color='%234f4484' offset='0.9'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
    }

    .col-md-5 {
      margin-top: 10%;
      box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
      background-color: #212738;

    }

    input[type=text],
    input[type=email],
    input[type=password] {
      border-radius: 0px;
      border-top: 0;
      border-left: 0;
      border-right: 0;


    }

    label {
      font-weight: 400;
    }

    h1 {
      font-weight: 600;
    }

    .btn {
      border-radius: 0;
      background-color: #FF1864;
      padding: 10px 50px;
    }

    .signbtn {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <form action="usertable_action.php" method="POST">
    <div class="container">

      <div class="row">

        <div class="col-md-5 mx-auto bg-light pt-5 px-5">
          <h1>Login</h1>
          <p class="lead ">Log in to your Account.</p>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="uname">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="upass">
            <label for="floatingPassword">Password</label>
          </div>
          <br>
          <div class="signbtn mt-4 mb-3">
            <button type="submit" class="btn btn-danger" name="loginbtn">Log In</button>
          </div>
          <div class="text-center">
<p>Don't have an account? <a href="signup.php">Create Account</a></p>
</div>
        </div>
      </div>

    </div>
  </form>
</body>

</html>