<!DOCTYPE html>
<html lang="en">
<head>
  <title>STAR STAR ROADHOUSE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/extras_bootstrap.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
</head>
<body>

  <nav id="navbar-star" class="navbar navbar-expand-md navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <img src="images/starstarLogosm.png" alt="Logo" height="80" ><!--  class="img-fluid"  -->
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.htm">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_us.htm">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="show.htm">SHOW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="art_cars.htm">ART CARS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.htm">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="store.htm">STORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>

  <br>
  <br>
  <br>
  <br>
  <section id="contact">
    <div class="container">
        <h3>Write to us!</h3>
        <form id="form_contact" name="form_contact" method="post" action="contact.php" class="form-horizontal" role="form">
          <div class="form-group">
        	   <div class="col-sm-12">
        			<input type="text" id="name" name="name" class="form-control input-sm" value="" maxlength="80" required data-validation="alphanumeric" placeholder="Name" />
        		</div>
        	</div>

          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" id="email" name="email" class="form-control input-sm" value="" maxlength="40" required data-validation="alphanumeric" placeholder="Email" />
        		</div>
        	</div>

          <div class="form-group">
        	  <div class="col-sm-12">
              <input type="text" id="subject" name="subject" class="form-control input-sm" value="" maxlength="100" required data-validation="alphanumeric" placeholder="Subject" />
        		</div>
        	</div>

          <div class="form-group">
        	  <div class="col-sm-12">
              <textarea class="form-control" rows="3" name="message" id="message" placeholder="Message"></textarea>
        		</div>
        	</div>

          <div class="form-group">
        	  <div class="col-sm-2 col-xs-6 col-sm-offset-10">
              <button class="g-recaptcha btn btn-primary btn-block" data-size="invisible" data-sitekey="6Lfgy5IUAAAAAHk_8NAhl0PzVII-9muDIgtiXywC" data-callback="submitForm">Send</button>
            </div>
          </div>
        </form>

    </div><!--/container-->
  </section><!--/contact-->

</body>
</html>
