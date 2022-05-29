
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('login/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('login/signin.css') }}">
    <meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <main class="form-signin">
    <form action="/register" method="post">
        @csrf
      <img class="mb-4 " src="{{ asset('login/assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Register Now!!</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
        <label for="name">name</label>
        @error('name')
        <div id="validationServer03Feedback" class="invalid-feedback">
          {{ $message }}
          </div>      
      </div>
     @enderror
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}"  required>
        <label for="Username">Username</label>
        @error('username')
        <div id="validationServer03Feedback" class="invalid-feedback">
          {{ $message }}
          </div>      
      </div>
     @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"  required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
        <div id="validationServer03Feedback" class="invalid-feedback">
          {{ $message }}
          </div>      
      </div>
     @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" required>
        <label for="Password">Password</label>
        @error('password')
        <div id="validationServer03Feedback" class="invalid-feedback">
          {{ $message }}
          </div>      
      </div>
     @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">register</button>
    </form>
    <small>Alredy to register? <a href="admin/login">login</a></small>
  </main>
  </body>
</html>
