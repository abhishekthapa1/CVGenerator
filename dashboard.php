
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

  .nav-link {
    font-size: 1.3rem;
    font-weight: 100;
  }
  .glassfont{
    font-size: 1.3rem;
  }

  .col-md-10 {
    background-image: url("images/aaron-burden-y02jEX_B0O0-unsplash.png");
    height: 100vh;
    object-fit: contain;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-size: 1.1rem;
    font-family: monospace, sans-serif;
  }
.alert-message{
  margin-top: 20%;
}
  table {
    margin-top: 20%;
    font-size: 1.3rem;

  }

  .smallscreen {
    display: none;
  }
  .card{
    
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
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
            <a href="dashboard.php" class="nav-link text-white active">

              <i class="fas fa-home me-2"></i>Dasbhoard
            </a>
          </li>
          <li>
            <a href="cvform_input.php" class="nav-link text-white">
            <i class="fas fa-plus me-2"></i>Create New CV
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

            <?php
                include 'db_conn.php';
                $user_id= $_SESSION['user_id'];

                $sql = "SELECT * from cvinput where user_cvid = '$user_id'";
                $result = $conn->query($sql);
                if($result->num_rows==0)
                      {
                        ?>
                        <div class="card text-center mx-auto mt-5 p-2 " style="width: 25rem;">
                        <p class="card-text pt-2 mt-2 fs-3 text-dark">No data Found.</p>

                          <img src="images/not_found.png" class="card-img-top my-0 py-0" alt="...">
                          <div class="card-body">
                        <p class="card-text">
                          <a href="cvform_input.php" class="text-decoration-none">
                        Create a new CV.</a></p>
                        
                         </div>  
                          </div>
                      <!-- <div>
                        <p class="display-5 mt-5 text-center text-light">No data Found</p>
                        <img src="images/not_found.png" height="400" width="600"> <br>
                        <a href="cvform_input.php">Create New CV Now</a>
                      </div> -->
                <?php
                      }
                      else {
                      
                        ?>
                        <?php 
                          if(isset($_SESSION['message']))
                          {
                            ?>
                            <div>
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>

</svg>

<div class="alert alert-primary d-flex align-items-center mt-5" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
  <?php echo $_SESSION['message'];
                              unset($_SESSION['message'])?>
  </div>
</div>
                              
                            </div>
                            <?php
                          }
                        ?>
                        <table class="table table-dark table-bordered table-hover">
                        <thead>
                        <tr>
                          <th scope="col">S.N</th>
                          <th scope="col">CV Name</th>
                          <th scope="col">Options</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      $i=0;
                      while($row = $result->fetch_assoc()) {
                              $i++;
                                $cv_title=$row['firstname'];
                                
                              ?>
                <tr>
              <th scope="row"><?php echo $i;?></th>
              <td><?php echo $cv_title; ?></td>
              <td>
              <a href="cv_action.php?view=<?php echo $row['cid']?>" class="text-decoration-none" name="view"><i class="fas fa-eye text-warning  ms-2"></i></a>
              <a href="update.php?upd=<?php echo $row['cid']?>" class="text-decoration-none"><i class="fas fa-edit text-info ms-2"></i> </a>
                <a href="cvforminputdata.php?del=<?php echo $row['cid']?>" class="text-decoration-none"><i class="fas fa-trash-alt text-danger me-2"></i></a>
              </td>
            </tr>
            <?php
                            }
                          }
                          ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>
</body>

</html>
 