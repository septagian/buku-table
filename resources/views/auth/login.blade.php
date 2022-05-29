
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>

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

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
      </button>
    </div>
    @endif

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <main class="form-signin">
    <form method="POST" action="{{ route('proseslogin') }}">
      @csrf
      <img class="mb-4" src="{{ asset('login/assets/brand/bootstrap-logo.svg') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="username" class="form-control" name="username" id="floatingInput" placeholder="username" required>
        <label for="floatingInput">username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>  
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
          </div>      
      </div>
     @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">log in</button>
    </form>
    <small>Not register? <a href="/register">Register Now!!</a></small>
  </main>
  </body>
</html>
