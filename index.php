<!DOCTYPE html>
<html>
<head>
  <title>Parachute | Land on your feet when relocated!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/pchute.css" rel="stylesheet" media="screen">

</head>
<body>
  <div class="container">
    <div class="text-center brand"> 
      <h1>Parachute</h1>
      <div class="row">
        <div class="span12">
          <form method="get" action="/" class="form-inline" >
            <input name="q" class="span5 mainIn" type="text"  placeholder="$ Enter Salary" >
            <input name="loc" class="span5 mainIn" type="text"  placeholder="Enter Zip Code">
            <button type="submit" class="btn btn-cstm mainIn" value="Go!"> <i class="icon-search icon-white"></i> Go!</button>
          </form>
        </div>
      </div>
    </div>

    <div class="desc">
      <p>
        Parachute is a tool that lets you search for real estates that fits
        your salary and expectations when moving from one place to another
        or when you have a job relocation.
      </p>

    </div>

  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script>
  $( document ).ready(function() {
    var images = ['.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg'];
    $('body').css({'background-image': 'url(img/background' + images[Math.floor(Math.random() * images.length)] + ')'});
  });
  </script>
</body>
</html>