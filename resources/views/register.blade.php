@include('layouts.header')
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ثبت نام</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signup {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <form class="form-signup" method="POST" action="{{ route('register') }}">
        @csrf
        <h2 class="form-signup-heading">ثبت نام کنید</h2>
        <label for="inputName" class="sr-only">نام</label>
        <input type="text" id="inputName" name="name" class="form-control" placeholder="نام" required autofocus>
        <label for="inputEmail" class="sr-only">آدرس ایمیل</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="آدرس ایمیل" required>
        <label for="inputPassword" class="sr-only">رمز عبور</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="رمز عبور" required>
        <label for="inputPasswordConfirm" class="sr-only">تایید رمز عبور</label>
        <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control" placeholder="تایید رمز عبور" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ثبت نام</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
