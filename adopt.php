<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "petsite";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // if (!$conn) 
      // {
      //   die("Connection failed: " . mysqli_connect_error());
      // }
      // else
      // {
      //   echo "Connectivity successful!";
      // }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="adopt.css" />

    <title>Adoption page</title>
  </head>
  <body style="background-color: #fdf9f5">
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom">
        <div class="container">
          <a class="navbar-brand" href="home.html"
            ><span class="logo1"><i class="fas fa-paw"></i>FURIES</span
            ><span class="logo2" style="color: #000">Rescue</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item px-3">
                <a class="nav-link links" href="lost_found.html"
                  >Lost Request</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="lost_found.html"
                  >Found Request</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="adopt.php">Adoption</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="#features">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="#end">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
    </header>

    <section class="container section">
      <h2>Please Help! We need your support...</h2>
      <h3>
        These pets are all alone. If you find them please contact the owner!
      </h3>

      <div class="card-group">
        <div class ="col-lg-4 col-md-6">
          <div class="card">
            <img src="assets/cat.jpg" class="card-img-top" alt="cat">
            <div class="card-body">
              <h3 class="card-title"><strong>Oggy</strong></h3>
              <p class="card-text">
                  <ul>
                      <li>Size: </li>
                      <li>Age: </li>
                      <li>Breed: </li>
                  </ul>
              </p>
            </div>
            
            <div class="card-footer">
              <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
            </div>
          </div>
        </div>
        <div class ="col-lg-4 col-md-6">
        <div class="card">
          <img src="assets/dog.jpg" class="card-img-top" alt="dog" />
          <div class="card-body">
            <h3 class="card-title"><strong>Sheru</strong></h3>
            <p class="card-text">
                <ul>
                    <li>Size: </li>
                    <li>Age: </li>
                    <li>Breed: </li>
                </ul>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
          </div>
        </div>
        </div>

        <div class ="col-lg-4 col-md-6">
          <div class="card">
            <img src="assets/parrot.jpg" class="card-img-top" alt="parrot" />
            <div class="card-body">
              <h3 class="card-title"><strong>Mitto</strong></h3>
              <p class="card-text">
                  <ul>
                      <li>Size: </li>
                      <li>Age: </li>
                      <li>Breed: </li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
            </div>
          </div>
        </div>

        <?php
          $result = mysqli_query($conn,"SELECT * FROM picture;");

          $i=0;
          while($row = mysqli_fetch_array($result)) { ?>
            <!-- // echo $row['image_id'];
            // echo "<br>";
            // echo $row['name'];
            // echo "<br>";
            // echo '<img src="'.$row['image'].'">';
            // echo "<br>";
            // echo "<br>";
            // echo "<br>"; -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <?php echo '<img src="'.$row['image'].'" class="card-img-top" alt="parrot">';?> 
                <div class="card-body">
                  <h3 class="card-title"><strong>Mitto</strong></h3>
                  <p class="card-text">
                      <ul>
                          <li>Size: <?php echo $row['image_id']; ?></li>
                          <li>Age: <?php echo $row['name']; ?></li>
                          <li>Breed: </li>
                      </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
                </div>
              </div>
            </div>
          <?php  $i++; }?>
      </div>
    </section>

    <section class="container section">
      <h1 style="text-align: center;"><strong>Time to adopt, friendship to adore</strong></h1>
       <h2>
        <em>These pets have been all alone for a long time! Please take a step
        forward and adopt these pets... 
        Pledge to change lives.</em>
      </h2>

      <div class="card-group">
        <div class ="col-lg-4 col-md-6">
          <div class="card">
            <img src="assets/dog1.jpg" class="card-img-top" alt="dog"/>
            <div class="card-body">
              <h3 class="card-title"><strong>Bob</strong></h3>
              <p class="card-text">
                <ul>
                    <li>Size: </li>
                    <li>Age: </li>
                    <li>Breed: </li>
                </ul>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
            </div>
          </div>
        </div>

        <div class ="col-lg-4 col-md-6">
          <div class="card">
            <img src="assets/cat1.jpg" class="card-img-top" alt="cat" />
            <div class="card-body">
              <h3 class="card-title"><strong>Olli</strong></h3>
              <p class="card-text">
                  <ul>
                      <li>Size: </li>
                      <li>Age: </li>
                      <li>Breed: </li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
            </div>
          </div>
        </div>


        <div class ="col-lg-4 col-md-6">
          <div class="card">
            <img src="assets/parrot1.jpg" class="card-img-top" alt="parrot" />
            <div class="card-body">
              <h3 class="card-title"><strong>Mitti</strong></h3>
              <p class="card-text">
                  <ul>
                      <li>Size: </li>
                      <li>Age: </li>
                      <li>Breed: </li>
                  </ul>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
            </div>
          </div>
        </div>

        <?php
          $result = mysqli_query($conn,"SELECT * FROM picture;");

          $i=0;
          while($row = mysqli_fetch_array($result)) { ?>
            <!-- // echo $row['image_id'];
            // echo "<br>";
            // echo $row['name'];
            // echo "<br>";
            // echo '<img src="'.$row['image'].'">';
            // echo "<br>";
            // echo "<br>";
            // echo "<br>"; -->
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <?php echo '<img src="'.$row['image'].'" class="card-img-top" alt="parrot">';?> 
                <div class="card-body">
                  <h3 class="card-title"><strong>Mitto</strong></h3>
                  <p class="card-text">
                      <ul>
                          <li>Size: <?php echo $row['image_id']; ?></li>
                          <li>Age: <?php echo $row['name']; ?></li>
                          <li>Breed: </li>
                      </ul>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><i class="fas fa-phone-volume icon"></i> <i class="fas fa-envelope icon"></i></small>
                </div>
              </div>
            </div>
          <?php  $i++; }?>
      </div>
    </section>

    <footer class="end" id="end">
      <div class="container">
        <div class="row">
          <div class="col-2 sm-0"></div>
          <div class="col-3 sm-12">
            <i class="fal fa-copyright"></i>
            Designed by Techie Divas
          </div>
          <div class="col-5 sm-0"></div>
          <div class="col-2 sm-12">
            <ul class="footer-link">
              <li>
                <a class="nav-link" href="#!">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a class="nav-link" href="#!">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
