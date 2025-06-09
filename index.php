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
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="full_name" placeholder="Full name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-mobile-alt"></i>
              <input type="number" name="mobile" placeholder="Mobile number" oninput="this.value = this.value.slice(0, 10)" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-id-card"></i>
              <input type="text" name="tin_number" placeholder="Tin number" />
            </div>
            </br></br>
            <div>
              <button type="submit" name="user_type" value="1" class="btn solid">Person</button>
              <button type="submit" name="user_type" value="2" class="btn solid">Partnership</button>
              <button type="submit" name="user_type" value="3" class="btn solid">Corporate</button>
            </div>
            </br>
            <p class="social-text">Simple. Fast. Smart tax & accounts.</p>
            </br>
            <div>
              <p class="company">Develop by <a href="https://tritcal.com/">Tritcal International LLC</a></p>
            </div>
          </form>
        </div>             
      </div>
    </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>HAT ACCOUNTANTS</h2>
            <h4>Tax Calculator!</h4>    
          </div>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
