$("input.answer").change(function() {

			  var sha1_answer = sha1($(this).val());

			  if($(this).val().length == 0){
			  	$(this).css("background", "#f7f7f9");
			  } else if(sha1_answer == eval($(this).attr("role"))){
			  	$(this).css("background", "rgba(77, 175, 124, 0.5)");
			  } else{
			  	$(this).css("background-color", "rgba(246, 71, 71, 0.5)");
			  }

			});