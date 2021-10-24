$(document).ready(function(){

	$('#register_sign_up').submit(function(e){
		e.preventDefault();
		$('.alert').hide();
		var name = $("#name").val();
		var email= $("#email").val();
		var password = $("password").val();
		var role = $("role").val();        

		if (name == '' || email == '' || password == ''){
			// $('#signin_alert').html('<div class="alert alert-danger">Please Fill All The Fields</div>');
		}else{
			var formdata = new FormData(this);
			formdata.append('create','1');
			$.ajax({
				url:"User/student_registration.php",
				type:"POST",
				data: formdata,
				contentType: false,
				processData: false,
				dataType: 'json',
				success:function(response){
					// $('.alert').hide();
					var res = response;
					if(res.hasOwnProperty('success')){ 
						$("#register_sign_up").trigger('reset');               	
						$('#register_sign_up').append('<div class="alert alert-success mt-3">'+res.success+'</div>');
						setTimeout(function(){ window.location.href = 'index.php'; }, 3000);
					}else if(res.hasOwnProperty('error')){
						$('#register_sign_up').append('<div class="alert alert-danger mt-3">'+res.error+'</div>');
					}
				}
			});
		}
	});



	$('#login').on("click", function(){             
		var email = $("#useremail").val();
		var password = $("#userpassword").val(); 
		$.ajax({
			url: 'PHP/user_all.php',
			method: 'POST',
			data: {login: "1", email:email, password:password},               
			success: function(data){
				if($.trim(data) =="student"){
					$("#login_alert").html('<div class="spinner-border text-success" role="status"></div>');                	
					setTimeout(function(){window.location.href ='index.php'; },1000);
				}else if($.trim(data) == "admin"){
					$("#login_alert").html('<div class="spinner-border text-success" role="status">admin</div>'); 
				}
				else {
					$("#login_alert").html('<p class="text-danger mr-4"> Email and Password Are Not Match!</p>');
				}
			}
		});
	});
});