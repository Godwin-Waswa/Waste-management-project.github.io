
<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>User Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="signup.css">
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="assets/css/final_project.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top text-dark ">
    <div class="container d-flex align-items-center text-dark">

        <a href="index.php" class="logo me-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid image-circle rounded responsive"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><span id="time" style="margin-left:20px ;font-weight: bold;"></span></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>  
<section class=" gradient-custom">
  <div class="container py-5" style="margin-top: 100px;font-size:large" data-aos="zoom-in" data-aos-delay="500">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 30px;background:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1))">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">User Registration</h3>
            <hr>
            <?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $username    = mysqli_real_escape_string($con, $username);
        $firstname    = stripslashes($_REQUEST['firstname']);
        $firstname    = mysqli_real_escape_string($con, $firstname);
        $secondname    = stripslashes($_REQUEST['secondname']);
        $secondname    = mysqli_real_escape_string($con, $secondname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $gender    = $_POST['gender'];
        $create_datetime = date("Y-m-d");
        $create_time = date("H:i:s");
        $query    = "INSERT into `users` (username,firstname,secondname,phone, email, password,gender, create_datetime,create_time)
                     VALUES ('$username','$firstname','$secondname','$phone', '$email','" . md5($password) . "','gender','$create_datetime','$create_time')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form pt-5" method="POST">
    <div class="row">
              <div class="col-md-12">
                  <div class="form-outline">
                  <input type="text"id="username" name="username" class="form-control form-control-lg" placeholder="username"/>
                  <label class="form-label" for="username" >Username</label>
                   </div>
                   </div>
                   <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="firstname" class="form-control form-control-lg" placeholder="Firstname"/>
                    <label class="form-label" for="firstName" >First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="secondname" placeholder="Last Name" />
                    <label class="form-label" for="lastName" >Last Name</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" class="form-control form-control-lg" placeholder="name@example.com" />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" placeholder="07..." />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password" />
                    <label class="form-label" for="password" >password</label>
                  </div>

                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>
              <hr>

              <div class="row">
              <div class="col-lg-4 mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Sign up" />
              </div>
              <div class="col-lg-6 mt-4 pt-2">
                <p class="btn btn-lg">Already have an account?</p>
              </div>
              <div class="col-lg-2 mt-4 pt-2">
					<div class="text-center">
					<a href="login.php" tabindex="5" class="forgot-password btn btn-success text-light btn-lg" style="text-decoration:none">Login</a>
					</div>
              </div>
              </div>
    </form>
<?php
    }
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Godwin Waswa</h3>
            <p>
              KIMILILI-BUNGOMA ROAD <br>
              P.O BOX, 330-50200<br>
              BOKOLI
              KENYA <br><br>
              <strong>Phone:</strong> +254792777948<br>
              <strong>Email:</strong> waswagodwin19@gmail.com<br>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultation services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Solid waste management system web development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Waste Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="optimum-number-of-trucks.html">Optimization of your your organization</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>My Social Networks</h4>
            <p>Kindly reach me Through the social media networks any time for more discussion</p>
            <div class="social-links mt-3">
                <a href="https://twitter.com/waswa_godwin"><i class="ri-twitter-fill"></i></a>
                <a href="https://www.facebook.com/godwin.goddy.750/"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/waswagodwin/"><i class="ri-instagram-fill"></i></a>
                <a href="https://www.linkedin.com/in/godwin-waswa-170307123/"> <i class="ri-linkedin-box-fill"></i> </a>
                <a href="https://github.com/Godwin-Waswa"> <i class="ri-github-fill"></i> </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Godwin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Project by <a href="https://github.com/Godwin-Waswa">Godwin Wafula Waswa</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
      <script>
    var time = {};
    
    (function () {
      var clock = document.getElementById('time');
      
      (function tick () {
        var minutes, d = new Date();
        time.weekday = d.getDay();
        time.day = d.getDate();
        time.month = d.getMonth() + 1; 
        time.year = d.getFullYear();
        time.minutes = d.getMinutes();
        time.hours = d.getHours() ; 
        time.seconds = d.getSeconds();
        time.ms = d.getMilliseconds();
        
        minutes = (time.minutes < 10 ? '0' + time.minutes : time.minutes);
        
        clock.innerHTML = time.month + '/' + time.day + '/' + time.year + ' '+ ' '+ time.hours + ':' + minutes + ':' + time.seconds ;
        
        window.setTimeout(tick, 1000);
      }());
    }()); 
    
    console.log(time.ms);
        </script>

</body>
</html>