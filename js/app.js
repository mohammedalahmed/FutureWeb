var card = document.getElementById("card");

function openRegister() {
card.style.transform = "rotateY(-180deg)";
}

function openLogin() {
card.style.transform = "rotateY(0deg)";
}

$('#regevent').submit(function(e){
	e.preventDefault();

	let form = $(this);
	let actionUrl = 'registerevent.php'
	let formData = form.serializeArray()

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: formData,
		success: function(result){

			$('#loggedMsg').css('display', 'block').css('background', 'orangered').html(result)
			if (result == 'Already registered this event!') {
				setTimeout(function(){ $('#loggedMsg').css('display', 'none') }, 3000);
			}else{
				setTimeout(function(){ window.location = 'index.php'; }, 3000);
			}

		}
	});
});

$('#loginForm').submit(function(e){
	e.preventDefault();

	let form = $(this);
	let actionUrl = 'login.php'
	let formData = form.serializeArray()

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: formData,
		success: function(result){
			if (result == 'false') {
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Username/Password is wrong!')
				setTimeout(function(){ $('#loggedMsg').css('display', 'none') }, 3000);
			}else{
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Welcome In')
				setTimeout(function(){ window.location = 'index.php'; }, 3000);
			}

		}
	});
});

$('#registerForm').submit(function(e){
	e.preventDefault();

	let form = $(this);
	let actionUrl = 'register.php'
	let formData = form.serializeArray()

	let pass = formData[2]['value']
	let c_pass = formData[3]['value']

	if (pass != c_pass) {
		alert('Confirm pass is wrong!')
		return false
	}

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: formData,
		success: function(result){
			$('#loggedMsg').css('display', 'block').css('background', 'orangered').html(result)
			setTimeout(function(){ window.location = 'regform.php'; }, 3000);
		}
	});
});

$('#addingCategory').submit(function(e){
	e.preventDefault();

	let form = $(this);
	let actionUrl = 'addCategory.php'
	let formData = form.serializeArray()

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: formData,
		success: function(result){
			if (result == 'false') {
				alert('Category name must be uniqe')
			}else{
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Successfully added')
				setTimeout(function(){ window.location = 'admin_caregories.php'; }, 1500);
			}
			// $('#loggedMsg').css('display', 'block').css('background', 'orangered').html(result)
			// setTimeout(function(){ window.location = 'regform.php'; }, 3000);
		}
	});
});

function deleteUser(ident){
	if(confirm('Are you sure?'))
		$.ajax({
			type: 'POST',
			url: 'admin_deleteuser.php',
			data: {id: ident},
			success: function(result){
				if (result == 'false') {
					alert('You cannot delete your self')
				}else{
					$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Successfully deleted user')
					setTimeout(function(){ window.location = 'admin_users.php'; }, 3000);
				}

			}
		});
}

$('#updateProfile').submit(function(e){
	e.preventDefault();

	let form = $(this);
	let actionUrl = 'updateProfile.php'
	let formData = form.serializeArray()

	let pass = formData[2]['value']
	let c_pass = formData[3]['value']

	if (pass != c_pass) {
		alert('Confirm pass is wrong!')
		return false
	}

	$.ajax({
		type: 'POST',
		url: actionUrl,
		data: formData,
		success: function(result){

			if (result == 'Successfully Updated1') {
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Successfully Updated')
				setTimeout(function(){ $('#loggedMsg').css('display', 'none') }, 3000);
				setTimeout(function(){ window.location = '?logout=true'; }, 3000);
			}else if (result == 'Successfully Updated2') {
				// setTimeout(function(){ window.location = 'index.php'; }, 3000);
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html('Successfully Updated')
				setTimeout(function(){ $('#loggedMsg').css('display', 'none') }, 3000);
			}else{
				$('#loggedMsg').css('display', 'block').css('background', 'orangered').html(result)
				setTimeout(function(){ window.location = 'index.php'; }, 3000);
			}

		}
	});
});
