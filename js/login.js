/* ==========================================================================
	Some basic login stuff!
   ========================================================================== */

// Set up some users and passwords.
// Format->  'user' : 'password'

var users = {
	'bob'  : 'cat',
	'sam'  : 'brook',
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

			// If we have a match:
			$("#success").slideDown();
			

		} else {
			
			// If there's mo match:
			$("#failure").slideDown();
			
		}
	});
});