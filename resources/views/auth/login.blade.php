<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="m-5">
    <h1 class="m-4"> Ini Login</h1>
<form action="{{ route ('login.action') }}" method="POST" role="form" >
  @csrf
  @if ($errors -> any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
  </div>
 
  <div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
    <label class="form-check-label" for="rememberMe">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p class="mb-4 text-sm mx-auto">Doesn't have an account?
    <a href="{{route('register') }}">Register</a>
</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>