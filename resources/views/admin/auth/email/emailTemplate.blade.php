<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TechGhor.com:Forgot-Password-Email</title>
  </head>
  <body>

<div class="card text-center">
  <div class="card-header">
    Forget Password Email
  </div>
  <div class="card-body">
    <h5 class="card-title">কি অহ পাসওয়ার্ড ভুলে গেছো</h5>
    <p class="card-text">You can reset password from bellow link:</p>
    <a  class="btn btn-primary" href="{{ route('reset.password.get', $token) }}">Reset Password</a>
  </div>
  <div class="card-footer text-muted">
    30 min time out
  </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>