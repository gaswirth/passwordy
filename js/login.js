/* ==========================================================================
	Some basic login stuff!
   ========================================================================== */

// Set up some users and passwords.
// Format->  'user' : 'password'
var users = {
	elphaba: 'magic',
	glinda: 'good',
	dillamond: 'goat'
};

// Set up some user favorites in arrays
var favorites = {
	elphaba: ['animals', 'Not being chased by the Wizard of Oz'],

	glinda: ['goodness', 'friends'],

	dillamond: ['paper', 'history']
};

// Once the website has finished loading...
$(document).ready(function() {
	$('.expand-users').click(function() {
		$('.users-list-wrapper').slideToggle();
		$('.tri').toggleClass('active');
	});

	// On submit, check for a valid user/password pair
	$('#loginform').submit(function(e) {
		// Not really important today. Stop looking at it, it's shy.
		e.preventDefault();

		// See who tried to log in, and save the name and password to variables (INSECURE, DON'T DO THIS IRL!).
		var myUsername = $('#username').val();
		var myPassword = $('#password').val();

		// Check inside the `users` array we set up above...
		if (users[myUsername] === myPassword) {
			// Successful login
			var userClass = '.user-' + myUsername;

			// Now, check which user we have and show them the correct info.
			$('.user-' + myUsername)
				.delay(1000)
				.addClass('logged-in');

			// Check if there the user has any favorites
			if (favorites[myUsername].length > 0) {
				$(userClass + ' .favorites').append(
					'<h3>' + myUsername + "'s favorites:</h3><ul>"
				);

				// Loop through the user's favorites
				for (var i = 0; i < favorites[myUsername].length; i++) {
					$(userClass + ' .favorites').append(
						'<li>' + favorites[myUsername][i] + '</li>'
					);
				}

				$(userClass + ' .favorites').append('</ul>');
			} else {
				$(userClass + '.favorites').append('No favorites, very sad, very sad.');
			}
		} else {
			// Bad user/password combo, so show a fail message.
			$('.failure').slideDown('slow');
		}
	});
});
