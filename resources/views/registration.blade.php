<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="shape">
     <form class="reg-form" method="post" action="{{ URL::to('/store') }}">
         @csrf
        <fieldset>
            <legend>
                <div class="heading">Registration  Form</div>
            </legend>

            <fieldset>
                <legend>
                    <div class="name" >Name</div>
                </legend>
                <input type="text" name="name" value="" placeholder="Enter Your Name" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="phone" >Phone</div>
                </legend>
                <input type="tel" name="phone" value="" placeholder="Enter Your Phone Number" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="email" >Email</div>
                </legend>
                <input type="email" name="email" value="" placeholder="Enter Your Email" required>
            </fieldset>

            <fieldset>
                <legend>
                    <div class="password" >Password</div>
                </legend>
                <input type="password" name="password" value="" placeholder="Enter Password" required>
            </fieldset>

            <fieldset>
                <div>
                    <button name="submit">Submit</button>
                </div>
            </fieldset>
        </fieldset>
    </form>
</div>
</body>
</html>
