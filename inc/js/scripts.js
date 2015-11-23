$(function() {
 
  // Initialize tooltipster on signin-form input/password elements
  $('.signin-form input[type="text"], .signin-form input[type="password"]').tooltipster({ 
    trigger: 'custom', // default is 'hover' which is no good here
    onlyOne: false,    // allow multiple tips to be open at a time
    position: 'right'  // display the tips to the right of the element
  });

	$(".signin-form").validate({
		rules: {
			chatname: {
				required: true,
	      minlength: 6,
	      remote: {
	        url: "../valid_chatname.php",
	        type: "POST" 
	      } 
			},
			password: {
			  required: true,
	      remote: {
	        url: "../valid_password.php",
	        type: "POST",
	        data: {
          	chatname: function() {
            	return $(".validate").val();
          	}
        	}
	      } 
			}
		},  
		messages: {
			chatname: {
				required: "Chatname Required",
				minlength: "6 Characters Required",
				remote: "Invalid Chatname."			
			},
			password: {
				required: "Password Required",
				remote: "Invalid Password."
			}
		},
    errorPlacement: function (error, element) {
      $(element).tooltipster('update', $(error).text());
      $(element).tooltipster('show');
    },
    success: function (label, element) {
      $(element).tooltipster('hide');
    }
	});

  // Initialize tooltipster on signup-form input/password elements
  $('.signup-form input[type="text"], .signup-form input[type="password"]').tooltipster({ 
    trigger: 'custom', // default is 'hover' which is no good here
    onlyOne: false,    // allow multiple tips to be open at a time
    position: 'right'  // display the tips to the right of the element
  });

	$(".signup-form").validate({
		rules: {
			'new-chatname': {
				required: true,
	      minlength: 6, 
	      maxlength: 15, 
	      remote: {
	        url: "../check_chatname.php",
	        type: "POST" 
	      } 
			},
			password: {
			  required: true,
	      minlength: 6
			},
			'password-confirmation': {
      	equalTo: "#password"
			}
		},  
		messages: {
			'new-chatname': {
				required: "Chatname Required",
				minlength: "6 Characters Required",
				maxlength: "15 Characters Max",
				remote: "This Chatname Already Exists"			
			},
			password: {
				required: "Password Required",
				minlength: "6 Characters Required"
			},
			'password-confirmation': {
				required: "Password Required",
				minlength: "6 Characters Required",
        equalTo: "Passwords Don't Match"
			},
		},
    errorPlacement: function (error, element) {
      $(element).tooltipster('update', $(error).text());
      $(element).tooltipster('show');
    },
    success: function (label, element) {
      $(element).tooltipster('hide');
    }
	});

  // Loads Message to Home Chat
	setInterval(function() {
		$('#messages').load('../home_msg.php');
	}, 500);

  // Posts Message From Home Chat
	$('#send-home').on('click', function(event) {
		event.preventDefault();
		var message = $('#chatmessage').val();

		$.ajax({
			type: "POST",
			url: "../home_post.php",
			data: {
				message: message
			},
			success: function() {
				$('#chatmessage').val('');
			}
		});
	});

  // Loads Message to Fantasy Chat
	setInterval(function() {
		$('#messages-fantasy').load('../fantasy_msg.php');
	}, 500);

  // Posts Message From Fantasy Chat
	$('#send-fantasy').on('click', function(event) {
		event.preventDefault();
		var messageFant = $('#chatmessage-fantasy').val();

		$.ajax({
			type: "POST",
			url: "../fantasy_post.php",
			data: {
				messageFant: messageFant
			},
			success: function() {
				$('#chatmessage-fantasy').val('');
			}
		});
	});

	// Loads Message to Pick Chat
		setInterval(function() {
			$('#messages-picks').load('../picks_msg.php');
		}, 500);

  // Posts Message From Pick Chat
	$('#send-picks').on('click', function(event) {
		event.preventDefault();
		var messagePick = $('#chatmessage-picks').val();

		$.ajax({
			type: "POST",
			url: "../picks_post.php",
			data: {
				messagePick: messagePick
			},
			success: function() {
				$('#chatmessage-picks').val('');
			}
		});
	});
});