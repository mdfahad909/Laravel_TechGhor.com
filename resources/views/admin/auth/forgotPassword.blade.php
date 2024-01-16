<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TechGhor:Forgot-Password</title>
  </head>
  <body>

       @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
          </div>
       @endif

    <div class="container padding-bottom-3x mb-2 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="forgot">
          	
          	<h2>Forgot your password?</h2>
          <p>Change your password in three easy steps. This will help you to secure your password!</p>
          <ol class="list-unstyled">
            <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
            <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
            <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
          </ol>

          </div>	
          
          <form action="{{ route('forgot.password.post') }}" method="post" class="card mt-4">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="email">Enter your email address</label>
                <input class="form-control" type="email" name="email" id="email" required=""><small class="form-text text-muted">Enter the email address you used during the Login on TechGhor.com</small>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-success" type="submit">Send Password Reset Link</button>
              <a href="{{ route('login') }}" class="btn btn-danger" type="submit">Back to Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>