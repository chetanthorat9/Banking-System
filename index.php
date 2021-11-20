<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 

      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
      crossorigin="anonymous"
  >
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="style.css">
    <title>Basic Banking System</title>
  </head>

  <body>
  <?php include 'navbar.php'; ?>
  <section class="header">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3 class="text-center" style = "font-size: 40px; padding: 5px;">Welcome to the Spark Bank</h3>
          <p class="text-center" style = "font-size: 18px">
            Banks borrow money by accepting funds deposited on current accounts,
            by accepting term deposits, and by issuing debt securities such as
            banknotes and bonds. Banks lend money by making advances to
            customers on current accounts, by making installment loans, and by
            investing in marketable debt securities and other forms of money
            lending.
          </p>
        </div>
        <div class="col-6 text-center">
          <img src="images/Bank1.png" alt="" style = "height: 200px">
        </div>
      </div>
    </div> 
  </section>
  <br><br>
    <br><br>
    <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="images/moneytransfer.jpg" alt="transfer money"><br><br>
        <a href="transfermoney.php">
          <button class = "btn btn-primary">Transfer Money</button>
        </a>
      </div>
      <div class="col-4">
        <img src="images/history.png" alt="history"><br><br>
        <a href="transactionhistory.php" class="text-dark">
          <button class = "btn btn-primary">Transaction History</button>
        </a>
      </div>
      <div class="col-4">
        <img src="images/user.png" alt="customers"><br><br>
        <a href="createuser.php" class="text-dark">
          <button class = "btn btn-primary">Create User</button>
        </a>
      </div>
    </div>
    <br>
  </div>
  <br><br>
    <?php include 'footer.php'; ?>
</body>
</html>