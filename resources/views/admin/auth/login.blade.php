<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>TechGhor.com:Login</title>
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    	*{padding:0;margin:0;box-sizing:border-box}body{background-color:#eee;height:70vh;font-family:'Poppins',sans-serif;background:linear-gradient(to top,#fff 10%,rgba(93,42,141,.4) 90%) no-repeat}.wrapper{max-width:500px;border-radius:10px;margin:80px auto;padding:30px 40px;box-shadow:20px 20px 80px rgb(206,206,206)}.h2{font-family:'Courgette',cursive;font-size:3.5rem;font-weight:700;color:#400485;font-style:italic}.h4{font-family:'Poppins',sans-serif;color:#fb5200!important}.input-field{border-radius:5px;padding:5px;display:flex;align-items:center;cursor:pointer;border:1px solid #400485;color:#400485}.input-field:hover{color:#fb5200;border:1px solid #000}#togglePassword{padding:.375rem .75rem}input{border:none;outline:none;box-shadow:none;width:100%;padding:0 2px;font-family:'Poppins',sans-serif}input#remember1{width:31px}.fa-eye-slash.btn{border:none;outline:none;box-shadow:none}span.icon-lock{font-size:22px;padding:5px 9px}a{text-decoration:none;color:#400485;font-weight:700}a:hover{text-decoration:none;color:#fb5200}#forgot:hover{cursor:help!important}.option{position:relative;padding-left:0;cursor:pointer}.option label.text-muted{display:block;cursor:pointer}.option input{display:none}.checkmark{position:absolute;top:3px;left:0;height:20px;width:20px;background-color:#fff;border:1px solid #ddd;border-radius:50%;cursor:pointer}.option input:checked~.checkmark::after{display:block}.option .checkmark::after{content:"";width:13px;height:13px;display:block;background:#400485;position:absolute;top:48%;left:53%;border-radius:50%;transform:translate(-50%,-50%) scale(0);transition:300ms ease-in-out 0s}.option input[type="radio"]:checked~.checkmark{background:#fff;transition:300ms ease-in-out 0s;border:1px solid #400485}.option input[type="radio"]:checked~.checkmark::after{transform:translate(-50%,-50%) scale(1)}.btn.btn-block{border-radius:20px;background-color:#400485;color:#fff}.btn.btn-block:hover{background-color:#fb5200}@media(max-width:575px){.wrapper{margin:50px}}@media(max-width:424px){.wrapper{padding:30px 10px;margin:40px}.option{position:relative;padding-left:0px}.option label.text-muted{font-size:.95rem}.checkmark{position:absolute;top:2px}.option .checkmark::after{top:50%}#forgot{font-size:.95rem}}
    </style>
</head>
<body>
  @if (Session::has('message'))
  <div style="color: red; text-align: center; font-size: 35px;">{{ Session::get('message') }}</div>
    
  @endif

<div class="wrapper bg-white">
	<div class="h2 text-center">Login Form</div>
	<div class="h4 text-muted text-center pt-2">Enter Your Login Details</div>
	
	<form action="{{ route('login') }}" method="POST" class="pt-3">
@csrf
		<div class="form-group py-2">
			<div class="input-field"> <span class="fa-solid fa-envelope p-2"></span>
			<input type="email" id="email" name="email" placeholder="Email Address"  required >
		</div>
	</div>

	<div class="form-group py-1 pb-2">
		<div class="input-field"> <span class="fa-solid fa-lock p-2"></span>
		<input type="password" name="password" id="password" placeholder="Enter your Password" onkeyup="show_pass();" required>
	 <span class="fa-solid fa-eye-slash" id="togglePassword" style="display:none;"></span>
	
	</div>
</div>

<div class="d-flex align-items-start">
	<div class="remember">
		<input type="checkbox" id="remember1" name="remember">
		<label class="option text-muted" for="remember1"> Remember Me</label><br>
	</div>
	<div class="ml-auto"> <a href="{{ route('forgot.password.get') }}" id="forgot">Forgot Password?</a></div>
</div>

<button type="submit" class="btn btn-block text-center my-3">Log in</button>
<div class="text-center">
    <p>Don't have you an Account <a href="{{ route('register') }}">Register</a></p>
</div>
</form>
</div>






 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	

<script >
	function show_pass() {
		var icon = document.querySelector('#togglePassword');
		var password = document.getElementById('password').value;
			if(password!=''){
				icon.style.display = 'initial';
			}else{
				icon.style.display = 'none';
			}
		}
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#password');
		togglePassword.addEventListener('click',function(a){
		const type = password.getAttribute('type')==='password' ? 'text' : 'password';
			password.setAttribute('type',type);
				this.classList.toggle('fa-eye-slash');
				this.classList.toggle('fa-eye');
			});
		</script>

</body>
</html>


