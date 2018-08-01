function is_logged_in(){
	$.ajax({
			url: '/php/ajax_action.php',
			data: {action: 'is_logged_in'},
			type: 'post',
			dataType: 'json',
			async: true,
			cache: false,
			success: function(response) {
				if (!response.success) {
					window.location.replace("/login.html");
				}
			},
			error: function(error) {
				console.log(error);
			},
		});
};
