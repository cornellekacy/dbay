<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/fontawesome.css">
  <title>DarkBay - Forgot Password</title>
  <link rel="shortcut icon" href="favicon.png">
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
        <div class="col-md-4 text-center">
          <h2>Forgot your password?</h2>
          <div class="alert alert-warning">
            Note that you will not be able to read messages encrypted by the key from previous password.
          </div>
          <div class="mt-3">
            <p>Please choose how to recover it</p>
            <form method="get" action="">
              <div class="form-group text-center">
                <div class="row">
                  <button type="submit" class="btn btn-outline-primary btn-block">PGP</button>
                </div>
              </div>
            </form>
            <form method="get" action="">
              <div class="form-group text-center">
                <div class="row">
                  <button type="submit" class="btn btn-outline-primary btn-block">Mnemonic</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
