<?php include "config.php"; ?>
<?php 
  if (isset($_SESSION['logStatus'])) {
   if ($_SESSION['logStatus'] === true) {
      header('location:dashboard.php');
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <?php 
          $msg="";
          $err="";
            if (isset($_POST['loginbtn'])) {
              $username = $_POST['uname'];
              $user_password = md5($_POST['upass']);

              $sql = "SELECT * FROM $users_tbl WHERE username = '$username' AND user_password = '$user_password'";
              $res = $con->query($sql);
              if($res->num_rows>0){
                while($ldata = $res->fetch_assoc()){
                   $_SESSION['userID'] = $ldata['ID'];
                   $_SESSION['username'] = $ldata['username'];
                   $_SESSION['logStatus'] = true;
                }
                $msg = "Login Successfull";
                header('location:dashboard.php');
              }else{
                $err = "Login Faild: ".$con->error;
              }
            }

           ?>
          <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="assets/images/login-img.svg"
                    class="img-fluid" alt="Phone image">
                  </div>
                  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <?php if(!empty($err)){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong><?php echo $err; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>

                    <?php if(!empty($msg)){ ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><?php echo $msg; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php } ?>
                    <form action="" method="post">
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="text" name="uname" id="username" class="form-control form-control-lg" placeholder="Enter UserName" />
                        <label class="form-label" for="username">Username</label>
                      </div>

                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <input type="password" name="upass" id="userpass" class="form-control form-control-lg"  placeholder="Enter Password" />
                        <label class="form-label" for="userpass">Password</label>
                      </div>

                      <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                          <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="#!">Forgot password?</a>
                      </div>

                      <!-- Submit button -->
                      <button type="submit" name="loginbtn" class="btn btn-primary btn-lg btn-block">Sign in</button>

                      <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                      </div>

                      <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="registration.php"
                        role="button">
                        <i class="fas fa-user me-2"></i>Registration
                      </a>

                  </form>
                </div>
              </div>
            </div>
          </section>
            
        </div>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>