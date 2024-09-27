@extends('layout')
@section('title','Login')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      max-width: 400px;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-btn {
      width: 100%;
    }

    .form-group label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn btn-primary login-btn">Login</button>
      <div class="text-center mt-3">
        <a href="#">Forgot password?</a>
      </div>
    </form>
  </div>

 
</body>
</html>

@endsection