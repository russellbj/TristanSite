<?php
if(isset($_POST['send'])){
	$to = 'russellbj@beloit.edu';
	// $subject = $_POST['subject'];
	$subject = 'Feedback from site!';
	$message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
	$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Comments: ' . $_POST['comments'];
	$headers = "From: noreply@tristanvaca.com\r\n";
	$success = mail($to, $subject, $message, $headers);
}
?>


<!DOCTYPE HTML>
<html>
<body>

	<!--Main Navigation-->
<header>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark blue">
<div class="container">

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="Commissions.html">Commission Me</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="AboutMe.html">About Me</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="Projects.html">Projects</a>
          </li>

      </ul>
      <!-- Links -->
  </div>
  <!-- Collapsible content -->
</div>
</nav>
<!--/.Navbar-->
</header>
<!--Main Navigation-->
<?php if (isset($success) && $success){  ?>
<h1> Thank You! </h1>
<p> Your message has been sent. </p>
<?php } else { ?>
<h1> Oops! </h1>
<p> Sorry, there was a problem sending your message. </p>
<?php } ?>

<!--Footer-->
<footer class="page-footer text-center text-md-left font-small blue pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-6 pb-3">
                <h5 class="text-uppercase">Contact Me</h5>
                <p>For further information about my work, please contact me via the methods provided.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6 pb-3">
                <h5 class="text-uppercase">Contact Information</h5>
                <ul class="list-unstyled">
                    <li>
                        Phone: (415) 730-8748
                    </li>
                    <li>
                        Email: vacata@beloit.edu
                    </li>
                    <li>
                        Facebook: https://www.facebook.com/tristan.vaca
                    </li>
                    <li>
                        Instagram: https://www.instagram.com/tristan.vaca
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
</body>
</html>