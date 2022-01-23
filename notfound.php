<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
        *,body{
          margin: 0;
          padding: 0;
        }

        .nav-link{
          font-size: 18px;
        }

        .mask-custom {
          backdrop-filter: blur(5px);
          background-color: rgba(97, 96, 96, 0.15);
        }

        .navbar-brand {
          font-size: 1.75rem;
          letter-spacing: 2px;
        }
        .logo1{
          background-color: black;
          padding: 5px;
          color:#fff;
        }
        .confirm{
          /* background-color: aqua;
          padding-left: -20px; */
          padding-top: 15vh;
          padding-bottom: 14.3vh;
        }
        .end{
          background-color: black;
          color: #fff;
          height: auto;
          line-height: 50px;
        }
        .footer-link li{
          list-style: none;
          float:right;
        }
        .footer-link li a{
          color:#fff;
        }
        .footer-link li a:hover{
          color:#ef8172;
        }

    </style>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom">
          <div class="container">
            <a class="navbar-brand" href="index.php"
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
                <a class="nav-link links" href="
                  <?php
                    if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                    {
                      ?>
                        register.php
                      <?php
                    }
                    else{
                      ?>
                        lost_found.php
                      <?php
                    }
                  ?> 
                  ">Lost Request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link links" href="
                    <?php
                      if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                      {
                        ?>
                          register.php
                        <?php
                      }
                      else{
                        ?>
                          lost_found.php
                        <?php
                      }
                    ?> 
                  ">Found Request</a>
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
                <?php
                  if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                  {
                    ?>
                      <li class="nav-item">
                        <a class="nav-link links" href="register.php">Sign Up</a>
                      </li>
                    <?php
                  }
                  else{
                    ?>
                      <li class="nav-item">
                        <a class="nav-link links" href="logout.php">Logout</a>
                      </li>
                    <?php
                  }
                ?>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      </header>
    <div class="container confirm px-4 mt-5 ">
        <div class="row col-5 mx-auto gx-5">
            <div class="card" style="width: 18rem;">
            <img src="https://static8.depositphotos.com/1431107/919/i/600/depositphotos_9199988-stock-photo-oops-icon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sorry....</h5>
                <h6 class="card-subtitle mb-2 text-muted">We didn't find any data match</h6>
                <p class="card-text">We will Contact you as soon as we found the required data match.</p>
            </div>
            </div>
        </div>
      </div>
      <footer class="end" id="end">
      <div class="container">
        <div class="row">
          <div class="col-2  sm-0"></div>
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
</body>
</html>