<html>
	<head>
		<title>U of U Athletics Department</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles2.css" > 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
	</head>
	
	<body id='myPage'>
	<!-- Navbar -->
	<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
		   <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-globe logo"></span></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#contact">CONTACT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	
	<!-- Header -->
	<div class="jumbotron text-center">
		<h1>U of U Athletics Department</h1> 
		<p>All of your sports needs at the University of Utah</p> 
	</div>
	<!-- About Page -->
	<div id="about" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2>About Company Page</h2>
				<h4></h4>
				<p>From our site you can see all details about the sports the U has to offer.</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-signal logo"></span>
			</div>
		</div>
	</div>
	
	<!-- Values -->
	<div class="container-fluid bg-grey">
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-piggy-bank logo"></span>
			</div>
			<div class="col-sm-8">
			  <h2>Our Values</h2><br>
			  <h4><strong>MISSION:</strong> Our mission is to provide the best sporting experience for athletes and the community alike.</h4><br>
			  <p><strong>VISION:</strong> Our vision is to expand each program at the U of U to compete to the best of their abilities.</p>
			</div>
		</div>
	</div>
	
	<!-- Login -->
	<div class="text-center">
	<H1>Login</H1>
	</p><p><a href='http://localhost/Project/authenticate.php'>Here</a><br><br>	
		</form>
    
    
    <!-- Newsletter!-->
	<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">Sign up for our Newsletter!</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Salt Lake City, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@utah.edu</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
	<!-- Footer -->
	<footer class="container-fluid text-center">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Bootstrap Theme Made By <a href="https://utahutes.com/" title="Visit Utah Athletics">U of U Athletics Department</a></p>
	</footer>
	</body>	
</html>