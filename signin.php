<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="form.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup data_enter">

          <form action="data/add_user_data.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="full_name" placeholder="Full name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-mobile-alt"></i>
              <input type="text" name="mobile" placeholder="Mobile number" oninput="this.value = this.value.slice(0, 10)" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required/>
            </div>
            </br></br>
            <div>
              <input type="submit" name="user_type" value="Person" class="btn solid" />
              <input type="submit" name="user_type" value="Partnership" class="btn solid" />
              <input type="submit" name="user_type" value="Coparate" class="btn solid" />
            </div>
            </br>
            <p class="social-text">Simple. Fast. Smart tax & accounts.</p>
            </br>
            <div>
              <p class="company">Tritcal Internationa PVT.LTD</p>
            </div>
          </form>

        </div>             
      </div>
    </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>HAT ACCOUNTANTS</h2>
            <h3>welcome!</h3>    
          </div>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
