jQuery(document).ready( function($) {
	var errorContainer = $('<p class="error">Please fill out the required fields</p>').appendTo('#commentform').hide();
	var errorLabelContainer = $('<p class="error errorlabels"></p>').appendTo('#commentform').hide();
	$('#commentform').validate({
		rules: {
			author: 'required',
			email: {
				required: true,
				email: true
			},
			url: 'url',
			comment: {
				required: true,
				minlength: 20
			}
		},
		errorContainer: errorContainer,
		errorLabelContainer: errorLabelContainer,
		ignore: ':hidden'
	});

	$.validator.messages.required = '' + $.validator.messages.required;
	$.validator.messages.email = '&raquo; ' + $.validator.messages.email;
	$.validator.messages.url = '&raquo; ' + $.validator.messages.url;
});