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
  <title>CV Generator | Update</title>
  <link rel="stylesheet" href="css/Bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    .displa {
      font-size: 1.5rem;
      font-family: monospace, sans-serif;
      font-weight: 200;
    }

    .display-5 {
      font-size: 1.5rem;
    }

    .nav-link {
      font-size: 1.3rem;
      font-weight: 100;
    }

    .glassfont {
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

    .col-md-10 {

      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    a {
      text-decoration: none;
      color: #ffffff;
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
<div class="alerts my-3">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>

</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
   Update your CV now.
  </div>
</div>
</div>
<?php
include 'db_conn.php';
if(isset($_GET['upd']))
{
  $cid=$_GET['upd'];
  $sql="SELECT * FROM cvinput where cid=$cid";
  $result=mysqli_query($conn,$sql);
  $row = $result->fetch_assoc()
?>
        <form action="cvforminputdata.php" method="POST">
          <div class="row">

            <div class="col-md-12 my-4"><span class="display-5">
                <i class="fas fa-user me-3"></i>Personal Details</span></div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Firstname" value="<?php echo $row['firstname'] ;?>"name="cvfirstname">
                <label for="floatingInput">Firstname</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Lastname" value="<?php echo $row['lastname'] ;?>"name="cvlastname">
                <label for="floatingPassword">Lastname</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="date" class="form-control" id="floatingPassword" placeholder="date" value="<?php echo $row['dob'] ;?>"name="cvdob">
                <label for="floatingPassword">Date of Birth</label>
              </div>
            </div>
            <div class="col-md-6">
    <div class="form-floating mb-3">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <?php
      if($row['gender']==1)
      {?>
  <option selected disabled>Select Gender</option>

        <option selected value="1">Male</option>
  <option value="2">Female</option>
  <?php
      }
  else
  {
    ?>
  <option selected disabled>Select Gender</option>

    <option value="1">Male</option>
  <option selected value="2">Female</option>
  <?php
  }
  
  ?>
</select>
<label for="floatingPassword">Gender</label>
    </div>
</div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Address" value="<?php echo $row['addres'] ;?>"name="cvaddress">
                <label for="floatingInput">Address</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                  value="<?php echo $row['email'] ;?>"name="cvemail">
                <label for="floatingInput">Email address</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">

                <input type="text" class="form-control" id="floatingPassword" placeholder="website" value="<?php echo $row['website'] ;?>"name="cvwebsite">
                <label for="floatingPassword">Website</label>

              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Lastname" value="<?php echo $row['cv_title'] ;?>"name="cvtitle">
                <label for="floatingPassword">CV Title</label>
              </div>
            </div>


          </div>
          <div class="row">

            <div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-university me-3"></i>Education
                Details</span></div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Schoolname" value="<?php echo $row['schoolname'] ;?>"name="cvschoolname">
                <label for="floatingInput">School Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingPassword" placeholder="schoolgrade"
                  value="<?php echo $row['seegpa'] ;?>"name="cvschoolgrade">
                <label for="floatingPassword">SEE GPA</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Schoolname"
                  value="<?php echo $row['collegename'] ;?>"name="cvcollegename">
                <label for="floatingInput">College Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingPassword" placeholder="collegegrade"
                  value="<?php echo $row['+2gpa'] ;?>"name="cvcollegegrade">
                <label for="floatingPassword">+2 GPA</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Highschoolname"
                  value="<?php echo $row['highschoolname'] ;?>"name="cvhighschoolname">
                <label for="floatingInput">HighSchool Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="number" class="form-control" id="floatingPassword" placeholder="bachelorgrade"
                  value="<?php echo $row['bachelorsgpa'] ;?>"name="cvcbachelorgrade">
                <label for="floatingPassword">Bachleors GPA</label>
              </div>
            </div>


          </div>
          <div class="row">

            <div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-laptop-code me-3"></i>Skills and
                Experiences</span></div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <div class="input-group">
                  <textarea class="form-control" aria-label="With textarea" placeholder="Skill one"
                    name="skillone"><?php echo $row['skillone'] ;?></textarea>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <div class="input-group">
                  <textarea class="form-control" aria-label="With textarea" placeholder="Skill two"
                   name="skilltwo"><?php echo $row['skilltwo'] ;?></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <div class="input-group">
                  <textarea class="form-control" aria-label="With textarea" placeholder="Experience one"
                    name="experienceone"><?php echo $row['experienceone'] ;?></textarea>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <div class="input-group">
                  <textarea class="form-control" aria-label="With textarea" placeholder="Experience two"
                    name="experiencetwo"><?php echo $row['experiencetwo'] ;?></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-6">
            </div>
            <input type="hidden" name="cid" value="<?php echo $row['cid'];?>">
            <div class="col-md-6 d-flex justify-content-end">
              <button class="btn btn-dark my-5 me-3 px-5" type="submit" name="upd_btn">Continue<i
                  class="fas fa-arrow-circle-right ms-2"></i></button>
            </div>
        </form>
      </div>
    </div>
    <?php
}
?>


  </div>
  </div>
</body>

</html>