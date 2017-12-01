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

<!-- jQuery and Scriptage-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/login.js"></script>

<!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
<!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>

	<header role="banner">
	
	<h1>Sad Picture Happy Picture</h1>
	
	</header>
	
	<div class="wrap">
	
	<main role="main">
	
	<section>
	
	<!-- The <article> element can be used to enclose content that still makes sense on its own and is therefore "reusable" -->
	<div id="intro">
	
	<h3>(An extremely fancy and important website)</h3>
	
	</article>
	
	<!-- The <article> element can be used to enclose content that still makes sense on its own and is therefore "reusable" -->
	<article id="login-container">
						
						<p>Log it in, friendo:</p>
	
	<form id="loginform" name="loginform">
		<input type="text" id="username" name="username" class="login-field login-name" required autofocus placeholder="User Name" />
		<input type="password" id="password" name="password" class="login-field login-password" required placeholder="Password" /> 
		<input type="submit" id="login" value="Submit" />
	</form>
	
	</article>
	
	</section>
	
	</main>
	
	<div class="responses">
		<div id="success">
			<p>I have literally never been happier to see you.</p>
		</div>
		
		<div id="failure">
			<p>Get out of my SIGHT.</p>
		</div>
	</div>
	</div>
	
</body>
</html>