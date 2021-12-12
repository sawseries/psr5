$(function() {
	  
	  /*
		//ค้นหาวีดีโอ
		$("#btn_search_vdo").click(function() {
				if ($("#s").val()=="") {
					alert("กรุณาใส่คำที่ต้องการค้นหา!!");
					$("#s").focus();				
				} else {
					window.location.href="search.php?s="+$("#s").val();
				}

		});
		*/

		$(".btn_logout").click(function() {
			logout();
		});

		$('[data-toggle="tooltip"]').tooltip();		
		
		

		/*
		//ตรวจสอบสถานะ channel
		$("#btn-my-channel").click(function() {
				$.post("tube-script.php",{'act':'check-my-channel'},function(data) {
					if (data>0)
					{
						window.location.href="channel.php";
					} else {
						window.location.href="channel-create.php";
					}
				});
		});
		*/

		
});

function channel_noti_read(noti_id) {
	
	$.post("tube-script.php",{'act':'channel_noti_read','noti_id':noti_id} );
	
	
}

function input_number(id) {				
		 $("#"+id).keydown(function(event) {
			// Allow: backspace, delete, tab, escape, enter and .
			if ( $.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 ||
				 // Allow: Ctrl+A
				(event.keyCode == 65 && event.ctrlKey === true) || 
				 // Allow: home, end, left, right
				(event.keyCode >= 35 && event.keyCode <= 39)) {
					 // let it happen, don't do anything
					 return;
			}
			else {
				// Ensure that it is a number and stop the keypress
				if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
					event.preventDefault(); 
				}   
			}
		});
}

function maxLengthCheck(object)
{
if (object.value.length > object.maxLength)
  object.value = object.value.slice(0, object.maxLength)
}

function logout() {
	$.post("tube-script.php",{act:'logout'},function(data) {
		if (data=="") { window.location.href="index.php"; }
	  });
}


function click_follow(get_perid) {
	$.post("vdo-script.php",{act:'click_follow',get_perid:get_perid},function(data) {	
		$("#txt_num_follow").html(data);
		 	$("#btn_unfollow").show();	 
		  	$("#btn_follow").hide();	  
	});
	
}

function click_unfollow(get_perid) {
	$.post("vdo-script.php",{act:'click_follow',get_perid:get_perid},function(data) {	
		$("#txt_num_follow").html(data);
		$("#btn_unfollow").hide();	 
	 	$("#btn_follow").show();	  
	});
}