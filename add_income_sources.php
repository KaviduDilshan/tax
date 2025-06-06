<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/income.css" type="text/css" />
    <title>Form</title>
  </head>
  <body>
    
    <div class="containe">
        <div class="text-end" ><small style="color:#28282b;">A.A Customer Name / Date</small></div>
        <form class="mb-3">
            <h2>Input Income Sources</h2>
            <div class="row mt-2">
                
                <div class="col-half">
                    <h5 class="">Past Year Amounts</h5>
                </div>
                <div class="col-half">
                    <h5 class="">Present Year Amounts</h5>
                </div>
            </div>
            <hr class="mt-0 pt-0" style="color:#575757;">
            <div class="row mt-2">
                <h4 class="mb-1">Employment / Salary</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Business Net Profit</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Interest Earned Gross(Without WHT)</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00t"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Rent Received</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Any Other(NET)</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>

            <div class="row mt-3 mb-2">
                <h4 class="mb-1">You Have Agreement with CEB for Solar Energy Supply</h4>
                <div class="col-half">
                    
                    <div class="input-group">
                    <input class="pt-1 pb-1" id="yes1" type="radio" name="selectvalue1" value="male"/>
                    <label class="pt-1 pb-1" for="yes1">Yes</label>
                    <input class="pt-1 pb-1 active" id="no1" type="radio" name="selectvalue1" value="female"/>
                    <label class="pt-1 pb-1 " for="no1">No</label>
                    <!-- <small style="color: #888888;">past Year</small> -->
                    </div>
                    
                </div>
                <div class="col-half">
                    <div class="input-group">
                    <input class="pt-1 pb-1" id="yes2" type="radio" name="selectvalue2" value="male"/>
                    <label class="pt-1 pb-1" for="yes2">Yes</label>
                    <input class="pt-1 pb-1 active" id="no2" type="radio" name="selectvalue2" value="female"/>
                    <label class="pt-1 pb-1" for="no2">No</label>
                    <!-- <small style="color: #888888;">present Year</small> -->
                    </div>
                </div>
            </div>

            <h2 class="mt-4">Input Tax Payments</h2>
            <div class="row mt-2">
                
                <div class="col-half">
                    <h5 class="">Past Year Payments</h5>
                </div>
                <div class="col-half">
                    <h5 class="">Present Year Payments</h5>
                </div>
            </div>
            <hr class="mt-0 pt-0" style="color:#575757;">
            <div class="row mt-2">
                <h4 class="mb-1">APIT / PAYE</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" placeholder="0.00" readonly/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" placeholder="0.00" readonly/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">WHT</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Income Tax Quarterly Payments</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00t"/>
                </div>
            </div>
            <div class="row mt-3">
                <h4 class="mb-1">Rates Paid to MC</h4>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2" placeholder="0.00"/>
                </div>
            </div>
            <div class="row mt-3">
                <h6 class="mb-1"><b>Your Tax Payable Amount</b></h6>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" placeholder="0.00" readonly/>
                </div>
                <div class="col-half">
                    <input type="text" class="pt-2 pb-2 bg-dark-subtle" placeholder="0.00" readonly/>
                </div>
            </div>

        </form>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="app.js"></script>
  </body>
</html>
