<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Zerk</title>
</head>
<body style="font-family: 'B Yekan'">
<h2>
@if(Session::has('createMessage'))
    <div class="alert alert-success">{{Session::get('createMessage')}}</div>
@endif
</h2>
<h2>
    <div class="alert alert-success">
    <a href="{{route('home')}}"><input type="button"  value="بازگشت" ></a>
    </div>
</h2>
</body>
</html>
