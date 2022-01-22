<?php session_start(); ?>
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
    <link rel="stylesheet" href="index.css" />

    <title>FURIES-Rescue website</title>
  </head>
  <body>
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
              <li class="nav-item">
                <a class="nav-link links" href="register.php">Login/Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
    </header>

    <section>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active btn circle"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            class="btn circle"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            class="btn circle"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img
              src="https://cdn.pixabay.com/photo/2018/04/23/14/38/adorable-3344414_960_720.jpg"
              class="d-block w-100 pic"
              alt="..."
              height="700px"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: red">Did you lost or found the pet?</h5>
              <a href="lost_found.html"
                ><button type="button" class="btn btn-danger">
                  Apply For Request
                </button></a
              >
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img
              src="https://cdn.pixabay.com/photo/2020/10/03/11/08/girl-5623231_960_720.jpg"
              class="d-block w-100 pic"
              alt="..."
              height="700px"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: rgb(54, 26, 26)">
                Do you want to Adopt A Pet?
              </h5>
              <a href="lost_found.html"
                ><button type="button" class="btn btn-secondary">
                  Apply For Request
                </button></a
              >
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img
              src="https://cdn.pixabay.com/photo/2022/01/17/16/18/woman-6945174_960_720.jpg"
              class="d-block w-100 pic"
              alt="..."
              height="700px"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section id="features">
      <h2>ABOUT US</h2>
      <div class="row">
        <div class="col-lg-4 feature-box">
          <i class="fas fa-check-circle fa-4x icons"></i>
          <h3>Easy to use.</h3>
          <p>So easy to use, simple user interface.</p>
        </div>

        <div class="col-lg-4 feature-box">
          <i class="fas fa-bullseye fa-4x icons"></i>
          <h3>Cost-Free</h3>
          <p>It Don't Demand Any kind of Money.</p>
        </div>

        <div class="col-lg-4 feature-box">
          <i class="fas fa-heart fa-4x icons"></i>
          <h3>Love</h3>
          <p>
            Our Motto is to Spread Love by Making Reunion of Pet with their Love
            Ones.
          </p>
        </div>
      </div>
    </section>
    <section class="quotesbg">
      <div
        id="carouselExampleFade"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner quotes mx-auto py-5 text-center">
          <div class="carousel-item active">
            <div class="card">
              <div class="card-header">Quotes</div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>
                    We Make A Living By What We Get, <br />
                    We Make A Life By What We Give.
                  </p>
                  <footer class="blockquote-footer">
                    Said by
                    <cite title="Source Title"> Winston's Churchill</cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-header">Quotes</div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>
                    "Our perfect companions never have fewer than four feet."
                  </p>
                  <footer class="blockquote-footer">
                    Said By
                    <cite title="Source Title">Colette</cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-header">Quotes</div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>
                    There’s a saying. If you want someone to love you
                    forever,<br />
                    buy a dog, feed it and keep it around
                  </p>
                  <footer class="blockquote-footer">
                    Said By famous American Musician
                    <cite title="Source Title">Dick Dale</cite>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleFade"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row speak">
          <h3
            class="text-center"
            style="
              color: rgb(10, 4, 6);
              font-weight: 200;
              text-transform: uppercase;
            "
          >
            Successful Stories
          </h3>
          <div class="col lg-4 md-6 sm-12">
            <div class="card stry mx-auto mt-sm-5 mt-md-3" style="width: 18rem">
              <img
                src="https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  There is story of a lady named NIHARIKA GARG whose 3 months
                  old dog got lost 10 days ago from the park. Finally, 2 days
                  ago she got her pet back when someone files a request of found
                  on the website.
                </p>
              </div>
            </div>
          </div>
<<<<<<< HEAD
          <div class="col lg-4 md-6 sm-12">
            <div class="card stry mx-auto mt-sm-5 mt-md-3" style="width: 18rem">
              <img
                src="https://images.pexels.com/photos/38867/pexels-photo-38867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="card-img-top"
                alt="..."
=======

          <div class="cont_form_sign_up">
            <a href="#" onclick="ocultar_login_sign_up()"
              ><i class="material-icons">&#xE5C4;</i></a
            >
            <h2>SIGN UP</h2>
            <form
              method="post"
              action="signup.php"
              enctype="multipart/form-data"
            >
              <input type="email" placeholder="Email" name="email" required />
              <input
                type="text"
                placeholder="Username"
                name="username"
                required
              />
              <input
                type="number"
                placeholder="Mobile Number"
                name="number"
                required
>>>>>>> bef79dfbd8b1afe7a0c83bb0abb9f309212521a5
              />
              <div class="card-body">
                <p class="card-text">
                  There is story of a lady named NIHARIKA GARG whose 3 months
                  old dog got lost 10 days ago from the park. Finally, 2 days
                  ago she got her pet back when someone files a request of found
                  on the website.
                </p>
              </div>
            </div>
          </div>
          <div class="col lg-4 md-6 sm-12">
            <div class="card stry mx-auto mt-sm-5 mt-md-3" style="width: 18rem">
              <img
                src="https://images.pexels.com/photos/1849974/pexels-photo-1849974.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  There is story of a lady named NIHARIKA GARG whose 3 months
                  old dog got lost 10 days ago from the park. Finally, 2 days
                  ago she got her pet back when someone files a request of found
                  on the website.
                </p>
              </div>
            </div>
          </div>
          <div class="col lg-4 md-6 sm-12">
            <div class="card stry mx-auto mt-sm-5 mt-md-3" style="width: 18rem">
              <img
                src="https://images.pexels.com/photos/2820134/pexels-photo-2820134.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  There is story of a lady named NIHARIKA GARG whose 3 months
                  old dog got lost 10 days ago from the park. Finally, 2 days
                  ago she got her pet back when someone files a request of found
                  on the website.
                </p>
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 col-6 lg-3 mx-auto mt-5">
            <button
              class="btn btn-secondary storyBtn text-nowrap"
              type="button"
            >
              Share Your Stories
            </button>
          </div>
        </div>
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
