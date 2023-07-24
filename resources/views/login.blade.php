@include('layouts.header')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ورود</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h2 class="form-signin-heading">لطفا وارد شوید</h2>
        <label for="inputEmail" class="sr-only">آدرس ایمیل</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="آدرس ایمیل" required autofocus>
        <label for="inputPassword" class="sr-only">رمز عبور</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="رمز عبور" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ورود</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
