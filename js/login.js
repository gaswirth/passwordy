/* ==========================================================================
	Some basic login stuff!
   ========================================================================== */

// Set up some users and passwords.
// Format->  'user' : 'password'

var users = {
	'bob'  : 'cat',
	'leslie'  : 'uncle',
	'mona' : 'lisa'
};
	
// Once the website has finished loading...
$(document).ready(function(){

	// ...do this stuff.
	$("#loginform").submit(function(e){

		// Not really important today. Stop looking at it, it's shy.
		e.preventDefault();


		// See who tried to log in, and save them to variables.
		var myUsername = $("#username").val();
		var myPassword = $("#password").val();
		

		// Check inside the `users` array we set up above...
		if ( users[myUsername] === myPassword ) {

			// Yay, successful login! Show a success message.
			$(".success").slideDown('slow', function(){
				
				// Now, check which user we have and show them the
				// correct info.
				
				// VERSION 1, simple to read
				switch (myUsername) {
					case "bob":
						$(".user-bob").delay(1000).addClass("logged-in");
						break;
					
					case "leslie":
						$(".user-leslie").delay(1000).addClass("logged-in");
						break;
					
					case "mona":
						$(".user-mona").delay(1000).addClass("logged-in");
						break;
					
					default:
						$(".nologin").fadeIn('fast');
				}
				
				// VERSION 2, less code but harder to read
				// $(".user" + myUsername).delay(1000).addClass(".logged-in");
				
			});
			

		} else { // Boo, bad user/password. Show a fail message.
			
			$(".failure").slideDown('slow');
		
		}
	});
	
	$(".reset").click(function(e){
		e.preventDefault();
		
		$("#responses *").hide();
	});
});