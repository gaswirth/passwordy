<!DOCTYPE html>
<html lang="en"> <!-- Set this to the main language of your site -->
<head>
<meta charset="utf-8">

<title>Passwordy</title>

<meta name="description" content="Simple code demo project for Dave Semaya">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<!-- Add normalize.css which enables browsers to render all elements more consistently and in line with modern standards as it only targets particular styles that need normalizing -->
<link href="css/normalize.css" rel="stylesheet" media="all">
<!-- For legacy support (IE 6/7, Firefox < 4, and Safari < 5) use normalize-legacy.css instead -->
<!--<link href="css/normalize-legacy.css" rel="stylesheet" media="all">-->

<!-- Include the site stylesheet -->
<link href="css/styles.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Abel|Pacifico" rel="stylesheet">


<!-- jQuery and Scriptage-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/login.js"></script>

<!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
<!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>

	<header role="banner">
	
	<h1>Shiz University</h1>
	
	</header>
	
	<div class="wrap">
	
	<main role="main">
	
		<section>
	
			<!-- The <article> element can be used to enclose content that still makes sense on its own and is therefore "reusable" -->
			<div id="intro">
			
			<h3>Welcome. Please log in.</h3>
			
			</article>
			
			<!-- The <article> element can be used to enclose content that still makes sense on its own and is therefore "reusable" -->
			<article id="login-container">	
				<div class="users-container">
					<p><a href="#" class="expand-users">Usernames/passwords reference<span class="tri">&rtri;</span></a></p>
					<div class="users-list-wrapper">
						<ul class="users">
							<li>elphaba  --> magic</li>
							<li>glinda  --> good</li>
							<li>dillamond --> goat</li>
						</ul>
					</div>
				</div>
				<form id="loginform" name="loginform">
					<input type="text" id="username" name="username" class="login-field login-text-field login-name" required autofocus placeholder="Username" />
					<input type="password" id="password" name="password" class="login-field login-text-field login-password" required placeholder="Password" /> 
					<input type="submit" id="login" class="login-submit login-field" value="Submit" />
				</form>
				
			</article>
	
		</section>
	
	</main>
	
	<div id="responses">
		<div class="failure">
			<figure>
				<figcaption>Noooope</figcaption>
				<img src="multimedia/badcat.jpg" alt="bad kitty" />
			</figure>
		</div>
	</div>

	<div id="user-areas">
		<!-- User information: -->
		<div class="user-elphaba user-area">
			<figure>
				<figcaption>Hi, Elphaba!</figcaption>
				<img src="multimedia/talia-elphaba.jpg" alt="Elphaba" />
			</figure>

			<div class="favorites">
				<!-- placeholder -->
			</div>
		</div>
		
		<div class="user-glinda user-area">
			<figure>
				<figcaption>Hi, Glinda!</figcaption>
				<img src="multimedia/bailey-glinda.jpg" alt="Glinda" />
			</figure>

			<div class="favorites">
				<!-- placeholder -->
			</div>
		</div>
		
		<div class="user-dillamond user-area">
			<figure>
				<figcaption>Hi, Doctor Dillamond!</figcaption>
				<img src="multimedia/nick-dillamond.jpg" alt="Dillamond" />
			</figure>

			<div class="favorites">
				<!-- placeholder -->
			</div>
		</div>
	</div>
	</div>
	
</body>
</html>
