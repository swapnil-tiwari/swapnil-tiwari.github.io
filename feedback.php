<!DOCTYPE HTML>
<html>
	<head>
		<title>Stalky - Feedback</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">stalky</a>
				<nav class="right">
					<a href="index.php" class="button alt">Log in</a>
				</nav>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="index.php" class="button fit">Login</a></li>
				</ul>
			</nav>
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Feedback</h1>
						<p>We're glad you chose this. Thanks a lot.</p>
					</header>

					<hr class="major" />
						
						<div class="row 200%">
							
							<div class="12u">

								<!-- Form -->
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
											<!-- Break -->
											<div class="12u$">
												<div class="select-wrapper">
													<select name="category" id="category">
														<option value="">- Category -</option>
														<option value="1">Design</option>
														<option value="1">Service</option>
														<option value="1">Bug Report</option>
														<option value="1">Other</option>
													</select>
												</div>
											</div>
											<!-- Break -->
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-low" name="priority" checked>
												<label for="priority-low">Low Priority</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="priority-normal" name="priority">
												<label for="priority-normal">Normal Priority</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="priority-high" name="priority">
												<label for="priority-high">High Priority</label>
											</div>
											<!-- Break -->
											<div class="6u$ 12u$(small)">
												<input type="checkbox" id="human" name="human">
												<label for="human">I am a human and not a robot</label>
											</div>
											<!-- Break -->
											<div class="12u$">
												<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<!-- Break -->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
							</div>
							<div class="12u">
						</div>
				</div>
			</section>
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-user"></span> johnhales818@gmail.com</li>
						<li><span class="icon fa-envelope"></span> teamstalky818@gmail.com</li>
						<li><span class="icon fa-commenting"></span><a href="#"> Feedback</a></li>
						<li><span class="icon fa-map-marker"></span> 123, Brooklyn, US</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Team Stalky. Design <a href="https://templated.co">TEMPLATED</a>.
				</div>
			</footer>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>