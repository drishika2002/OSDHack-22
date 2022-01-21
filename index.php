<html>
  <head>
    <title>Registration page</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="cotn_principal">
      <div class="cont_centrar">
        <div class="cont_login">
          <div class="cont_info_log_sign_up">
            <div class="col_md_login">
              <div class="cont_ba_opcitiy">
                <h2>LOGIN</h2>
                <p>
                  Already have an account? <br />
                  Then login!
                </p>
                <button class="btn_login" onclick="cambiar_login()">
                  LOGIN
                </button>
              </div>
            </div>
            <div class="col_md_sign_up">
              <div class="cont_ba_opcitiy">
                <h2>SIGN UP</h2>

                <p>Don't have an account. <br />Create one!</p>

                <button class="btn_sign_up" onclick="cambiar_sign_up()">
                  SIGN UP
                </button>
              </div>
            </div>
          </div>

          <div class="cont_back_info">
            <div class="cont_img_back_grey">
              <img
                src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                alt=""
              />
            </div>
          </div>
          <div class="cont_forms">
            <div class="cont_img_back_">
              <img
                src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d"
                alt=""
              />
            </div>
            <div class="cont_form_login">
              <a href="#" onclick="ocultar_login_sign_up()"
                ><i class="material-icons">&#xE5C4;</i></a
              >
              <h2>LOGIN</h2>
              <form method="post" action="">
                <input type="email" placeholder="Email" name="email" required />
                <input
                  type="password"
                  placeholder="Password"
                  name="password"
                  required
                />
                <button
                  class="btn_login"
                  onclick="cambiar_login()"
                  name="submit"
                >
                  LOGIN
                </button>
              </form>
            </div>

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
                />
                <input
                  type="password"
                  placeholder="Password"
                  name="password"
                  required
                />
                <input
                  type="password"
                  placeholder="Confirm Password"
                  name="password2"
                  required
                />
                <button class="btn_sign_up" name="sumbit">SIGN UP</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
