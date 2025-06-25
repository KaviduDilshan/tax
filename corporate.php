<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/partnership.css" />
    <title>HAT ACCOUNTANTS</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup data_enter">

                <form action="data/add_corporate_data.php" method="post" class="sign-in-form" style="margin-top:120px">
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="corporate_name" placeholder="Corporate name *" required autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="full_name" placeholder="Full name *" required autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-mobile-alt"></i>
                        <input type="number" name="mobile" placeholder="Mobile number *"
                            oninput="this.value = this.value.slice(0, 10)" required autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email *" required autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" name="corporate_tin_number" placeholder="Corporate Tin number" autocomplete="off" />
                    </div>

                    <div class="">
                        <button type="submit" name="user_type" value="3" class="btn  w-100"style="margin-bottom:100px ">Calculate Your corporate Tax</button>
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
                <h2>CORPORATE</h2>
                <h4>Tax Calculator!</h4>
            </div>
        </div>
    </div>
    </div>

    <script src="app.js"></script>
</body>

</html>