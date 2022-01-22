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
          <a class="navbar-brand" href="#!"
            ><span class="logo1">Furies</span
            ><span class="logo2" style="color: #ef8172">rescue</span></a
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
                <a class="nav-link" href="#!">Offer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Reference</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Contact</a>
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
          <img src="cat.jpg" class="card-img-top" alt="cat">
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
          <img src="dog.jpg" class="card-img-top" alt="dog" />
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
          <img src="parrot.jpg" class="card-img-top" alt="parrot" />
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
        <div class="card">
          <img src="dog1.jpg" class="card-img-top" alt="dog"/>
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

        <div class="card">
          <img src="cat1.jpg" class="card-img-top" alt="cat" />
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

        <div class="card">
          <img src="parrot1.jpg" class="card-img-top" alt="parrot" />
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
    </section>

    <footer class="end-footer">
      <div class="container">
        <div class="text-center" style="color: #fff">@copyright</div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
