<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>
<body>
<div class="content">
    <div class="form">
        <h2>Welcome</h2>
        <form class="login" action="{{URL::to('/logs')}}" method="post">
            @csrf
            <div class="email">Email</div>
            <input class="email_input" type="email" name="email" placeholder="Enter Your Email" required>

            <div class="pass">Password</div>
            <input class="pass_input" type="password" name="password" placeholder="Enter Your Password" required><br>

            <input type="checkbox" class="check-box"><span class="check">Remember Password</span><br><br>

            <input type="submit" class="btn" name="login" value="login" checked><br><br>

            <a href="{{ url('/registration') }}" class="account">Create Account</a>

        </form>
     </div>
    </div>
  </body>
</html>