$(document).ready(function() {
	$('#contactForm').validate({
		rules : {
			contactEmail : {
				required : true,
				email : true
			},
			contactName : {
				required : true
			},
			contactPhone : {
				number : true,
				rangelength : [ 10, 10 ]

			},
			contactMessage : {
				required : true
			}/*,
			captcha_code : {
				required : true,
                remote: "./check_captcha.php"
			}*/
		}, // end rules
		messages : {
			contactName : {
				required : " * Please enter your name."
			},
			contactEmail : {
				required : " * Please enter a vaild email.",
				email : "  * This is not a valid email address."
			},
			contactPhone : {
				reangelength : " the phone number should be 9 digits only."
			},
			contactMessage : {
				required : "* the contact message should not be empty."
			}/*,
			captcha_code:
		      {
		        required: "* Please type the code show above",
		        remote:"Security code is incorrect!"
	      }*/

		},
		errorPlacement : function(error, element) {
			if (element.is(":radio") || element.is(":checkbox")) {
				error.appendTo(element.parent());
			} else {
				error.insertAfter(element);
				// alert("parent: "+element.parent("tr").children("tr").);
			}
		}
	});

});