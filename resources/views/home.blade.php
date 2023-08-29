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
<t2>به نرم افزار ذکر خوش آمدید</t2>
<form action="{{route('add')}}" method="get">
    <button type="submit" class="btn btn-primary">اضافه کردن ذکر</button>
</form>
<form action="{{route('see')}}" method="get">
    <button type="submit" class="btn btn-primary">مشاهده ذکر ها</button>
</form>
</body>
</html>

