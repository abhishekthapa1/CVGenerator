
<?php
session_start();

if(!isset($_SESSION['user_session'])){
    header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Generator | Dashboard</title>
  <link rel="stylesheet" href="css/Bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
  .displa {
    font-size: 1.5rem;
    font-family: monospace, sans-serif;
    font-weight: 200;
  }
  .display-5{
    font-size: 1.5rem;
  }
  .nav-link {
    font-size: 1.3rem;
    font-weight: 100;
  }
  .glassfont{
    font-size: 1.3rem;
  }

.col-md-10 {
    /* background-image: url("images/aaron-burden-y02jEX_B0O0-unsplash.png");
   
    object-fit: contain;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; */
    font-size: 1.1rem;
    font-family: monospace, sans-serif;
  } 

  table {
    margin-top: 20%;
    font-size: 1.3rem;

  }

  .smallscreen {
    display: none;
  }
  .col-md-10{
    
background: rgba(255, 255, 255, 0.2);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);
  }
a{
  text-decoration:none;
  color:#ffffff;
}
  @media(max-width:769px) {
    .largescreen {
      display: none;

    }

    .smallscreen {
      display: block;
    }

  }
</style>
</head>


<body>
<div class="container-fluid">
    <div class="row">

      <div class="col-md-2 px-0 bg-light min-vh-100 text-white bg-dark p-2 largescreen">
        <a class="list-group-items text-decoration-none text-light " href="index.php">
          <div class="text-center">
            <img src="images/472-4722444_cv-png.png" alt="" width="80" height="80" class="mt-4 mycvpng">
            <br>
            <span class="displa">MyCV</span>
          </div>
        </a>

        <ul class="nav nav-pills flex-column mb-auto my-5">
          <hr>
          <li class="nav-item ">
            <a href="dashboard.php" class="nav-link text-white ">

              <i class="fas fa-home me-2"></i>Dasbhoard
            </a>
          </li>
          <li>
            <a href="cvform_input.php" class="nav-link text-white active">
            <i class="fas fa-plus me-2 "></i>Create New CV
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-light">

              <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
          </li>

        </ul>
        <hr>

      </div>
      <div class="col-md-2 px-0 bg-light text-white bg-dark p-2 smallscreen">
        <a class="list-group-items text-decoration-none text-light " href="index.php">
          <div class="text-center">
            <img src="images/472-4722444_cv-png.png" alt="" width="50" height="50" class="ycvpng">
            <br>
            <span class="displa">MyCV</span>
          </div>
        </a>

        <ul class="nav nav-pills flex-column mb-auto my-5 mt-0 text">
          <hr>
          <li class="nav-item ">
            <a href="index.php" class="nav-link text-white">

              <i class="fas fa-home me-2"></i>Home
            </a>
          </li>
          <li>
            <a href="Signup.php" class="nav-link text-white">

              <i class="fas fa-user-plus me-2"></i>Signup
            </a>
          </li>
          <li>
            <a href="Signup.php" class="nav-link active text-white">

              <i class="fas fa-file-alt me-2"></i>Options
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-light">

              <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
          </li>

        </ul>
        <hr>

      </div>

      <div class="col-md-10">
      <form action="cvforminputdata.php" method="POST">
      <div class="row">

<div class="col-md-12 my-4"><span class="display-5">
    <i class="fas fa-user me-3"></i>Personal Details</span></div>
   
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input required type="text" class="form-control" id="floatingInput" placeholder="Firstname"
            name="cvfirstname">
        <label for="floatingInput">Firstname</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Lastname"
            name="cvlastname">
        <label for="floatingPassword">Lastname</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="date" class="form-control" id="floatingPassword" placeholder="date" name="cvdob">
        <label for="floatingPassword">Date of Birth</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Select Gender</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">Other</option>
</select>
<label for="floatingPassword">Gender</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Address" name="cvaddress">
        <label for="floatingInput">Address</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input required type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
            name="cvemail">
        <label for="floatingInput">Email address</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">

        <input type="text" class="form-control" id="floatingPassword" placeholder="website"
            name="cvwebsite">
        <label for="floatingPassword">Website</label>

    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingPassword" placeholder="Lastname"
            name="cvtitle">
        <label for="floatingPassword">CV Title</label>
    </div>
</div>


</div>
<div class="row">

<div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-university me-3"></i>Education Details</span></div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Schoolname"
            name="cvschoolname">
        <label for="floatingInput">School Name</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="number" class="form-control" id="floatingPassword" placeholder="schoolgrade"
            name="cvschoolgrade">
        <label for="floatingPassword">SEE GPA</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Schoolname"
            name="cvcollegename">
        <label for="floatingInput">College Name</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="number" class="form-control" id="floatingPassword" placeholder="collegegrade"
            name="cvcollegegrade">
        <label for="floatingPassword">+2 GPA</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Highschoolname"
            name="cvhighschoolname">
        <label for="floatingInput">HighSchool Name</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating">
        <input type="number" class="form-control" id="floatingPassword" placeholder="bachelorgrade"
            name="cvcbachelorgrade">
        <label for="floatingPassword">Bachleors GPA</label>
    </div>
</div>


</div>
<div class="row">

<div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-laptop-code me-3"></i>Skills and Experiences</span></div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" placeholder="Skill one"
                name="skillone"></textarea>
        </div>

    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" placeholder="Skill two"
                name="skilltwo"></textarea>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" placeholder="Experience one"
                name="experienceone"></textarea>
        </div>

    </div>
</div>
<div class="col-md-6">
    <div class="form-floating mb-3">
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" placeholder="Experience two"
                name="experiencetwo"></textarea>
        </div>
    </div>
</div>
<div class="col-md-6">
              <a href="dashboard.php"><button class="btn btn-dark my-5 me-3 px-md-5"> 
                      <i class="fas fa-arrow-circle-left me-2"></i>Dashboard 
                   </button></a>
              </div>
<div class="col-md-6 d-flex justify-content-end">
    <button class="btn btn-dark my-5 me-3 px-5" type="submit" name="submit">Continue<i class="fas fa-arrow-circle-right ms-2"></i></button>
</div>
</form>
</div>
</div>


    </div>
  </div>
</body>

</html>
 