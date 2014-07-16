$.noConflict();
jQuery( document ).ready(function( $ ) {
		// event handler for the check box 	
		$("#destinations").on("click", ".check-button", function(ev) {
		ev.preventDefault();
			
		var guides = $("#save-form input[name=guides]").val();
		guides == "" ? guides = [] : guides = JSON.parse(guides);
		
		if ($(this).data("check") == true){ 
			$(this).find("i").removeClass().addClass("fa fa-square-o");
			$(this).data("check", false);

			// remove the guide from the array
			var index = guides.indexOf($(this).attr('id'));			
			if (index > -1) {
    			guides.splice(index, 1);
			}
		} else {
			$(this).find("i").removeClass().addClass("fa fa-check-square-o");
			$(this).data("check", true);
			guides.push($(this).attr('id'));

		}
		//alert(guides);
		$("#cart-count").html(guides.length)
		$("#save-form input[name=guides]").val(JSON.stringify(guides));
	});


	$("#destinations").on("click", "#place-order", function(ev) {
	    ev.preventDefault();

	    if ($("#save-form input[name=guides]").val() == ""){
	    	$('#error').html("<h2>Please Select Some Guides</h2>").hide().fadeIn(1500);
	    }
	    alert($("#save-form input[name=guides]").val());

	    var $form = $("#save-form").serialize(); 
	    $.ajax({
	        type: "post",
	        url: "post.php",
	        data: $form,
	        async: 'true',
	        dataType: "json",
	        success: function(response) {
	        	alert("move to form")
	            window.location.replace("form.php");
	        },
	        error: function(xhr, ajaxOptions, thrownError){
	        	alert("oops")
	        	$('#error').html("<h2>Error sending the message</h2>").hide().fadeIn(1500);
	        } 
	    });
  	});	
	
});
