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
  <title>Final CV || Cv Generator</title>
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
          <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </symbol>
          
        </svg>
      </div>
        
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
            Final view for your CV.
          </div>
        </div>
        
        <div class="row">

          <div class="col-md-12 my-4"><span class="display-5">
              <i class="fas fa-user me-3"></i>Personal Details</span></div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Firstname:</span>
                  
                 
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Lastname:</span> 
                 
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Gender:</span> 
                 
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Date of Birth:</span> 
                
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Address:</span> 
                 
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Email Address:</span> 
                  
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">CV Title:</span> 
                 
              </div>
          </div>
          <div class="col-md-6">
              <div class="alert alert-secondary" role="alert">
                  <span class="fw-bold">Website:</span> 
                  
              </div>
          </div>

      </div>
      <div class="row">

          <div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-university me-3"></i>Education Details</span></div>
                  
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">School Name:</span> 
                     
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">SEE GPA:</span> 
                      
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">College Name:</span> 
                     
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">+2 GPA :</span> 
                   
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">HighSchool Name:</span> 
                     
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">Bachelors GPA:</span> 
                     
                  </div>
              </div>

      </div>
      
      <div class="row">
          <div class="col-md-12 my-4"><span class="display-5"><i class="fas fa-laptop-code me-3"></i>Skills and
              Experiences</span></div>
                  
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">Skill One:</span> 
                     
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">Skill Two:</span> 
                      
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">Experience One:</span> 
                      
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="alert alert-secondary" role="alert">
                      <span class="fw-bold">Experience Two :</span> 
                    
                  </div>
              </div>
              
              <div class="col-md-6">
              <a href="dashboard.php">  <button class="btn btn-dark my-5 me-3 px-md-5"> 
                      <i class="fas fa-arrow-circle-left me-2"></i>Dashboard 
                   </button></a>
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                  <button class="btn btn-dark my-5 me-3 px-md-5" >Continue<i class="fas fa-arrow-circle-right ms-2"></i></button>
              </div>
     
          </div>
      </form>
  </div>
      </div>
    </div>
    
  </div>



</body>

</html>
