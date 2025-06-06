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
          <form action="form.html" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Full name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-mobile-alt"></i>
              <input type="number" placeholder="Mobile number" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-calendar-alt"></i> 
              <input type="date" name="date" placeholder="date" required />
            </div>

            <input type="submit" value="NEXT->" class="btn solid" />
            <p class="social-text">Simple. Fast. Smart tax & accounts.</p>  
          </form>         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>HAT ACCOUNTANS</h2>
            <h3>welcome!</h3>    
          </div>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
