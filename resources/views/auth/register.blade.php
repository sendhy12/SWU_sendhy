<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="m-5">
<h1 class="m-4"> Ini Register</h1>
<form action="{{ route('register.save')}}" class="user" role="form" method="POST">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="name">
    @error('name')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control  @error('email')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('email')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="exampleInputPassword1">
    @error('password')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')is-invalid @enderror" id="exampleInputPassword1">
    @error('password_confirmation')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<p class="mb-4 text-sm mx-auto">Have an account?
    <a href="{{route('login') }}">Login</a>
</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>