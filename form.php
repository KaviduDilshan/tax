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
    <title>Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup ">
          <form action="data/add_tax_data.php" class="sign-in-form">
            <input type="text" name="c_id" value="$_GET[]"/>
            <h5 class="title">Make Inquiries</h5>
            <div class="input-field">
              <i class="fas fa-id-card"></i>
              <input type="text" name="tin_number" placeholder="Tin number" />
            </div>  
            <div class="input-field">
              <i class="fas fa-money-bill-wave"></i>
              <input type="number" name="income" placeholder="Income" />
            </div>
            <div class="input-field">
              <i class="fas fa-file-invoice-dollar"></i>
              <input type="number" name="expences" placeholder="Expences" />
            </div>
            <div class="input-field">
              <i class="fas fa-calculator"></i>
              <input type="number" name="tax_amount" placeholder="Tax amount" />
            </div>
            <div class="input-field">
               <i class="fas fa-comment-dots"></i>
               <textarea placeholder="description..." name="descripyion"></textarea>
               </div>

               <div>
                <div class="input-field">
                  <i class="fas fa-image"></i>
                  <label for="image-upload" class="custom-file-label">Upload Image</label>
                  <input type="file" id="image-upload" name="screenshot" accept="image/*" hidden>
                </div>

                <div class="input-field">
                  <i class="fas fa-file-pdf"></i>
                  <label for="pdf-upload" class="custom-file-label">Upload PDF</label>
                  <input type="file" id="pdf-upload" name="pdf_file" accept=".pdf" hidden>
                </div>

                <div class="input-field">
                  <i class="fas fa-file-excel"></i>
                  <label for="excel-upload" class="custom-file-label">Upload Excel</label>
                  <input type="file" id="excel-upload" name="excel_file" accept=".xls,.xlsx" hidden>
                </div>
               </div>
               
            <input type="submit" value="NEXT->" class="btn solid" />
            <p class="social-text">Simple. Fast. Smart tax & accounts.</p>  
          </form>         
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
