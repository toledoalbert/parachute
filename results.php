<!DOCTYPE html>
<html>
<head>
  <title>Parachute | Land on your feet when relocated!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="css/pchute.css" rel="stylesheet" media="screen">

</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="topbar">
        <div class="container">
          <button type="button" class="btn btn-navbar tgl" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="parachute brand" href="./index.php"><b>Para</b>chute</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <form class="navbar-form form-inline pull-right" method="get" action="results.php">
    <input type="text" placeholder="Enter Salary" name="salary" class="inputField">
    <input type="password" placeholder="Enter Zip Code" name="zip" class="inputField">

    <button type="submit" class="btn btn-go"><i class="icon-search icon-white"></i>Go!</button>
</form>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <div class="container results">

    <div class="row text-center">
      <div class="span4">
        <h3>Neighborhoods</h3>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
      </div>
      <div class="span4">
        <h3>Homes</h3>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
      </div>
      <div class="span4">
        <h3>Rentals</h3>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
        <div class="sect">Section for Info</div>
      </div>
    </div>
    


  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>