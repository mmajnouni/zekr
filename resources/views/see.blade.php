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
    <div class="alert alert-success">
        <a href="{{route('home')}}"><input type="button"  value="بازگشت" ></a>
    </div>
</h2>

<h2>
    @if(Session::has('deleteMessage'))
        <div class="alert alert-danger">{{Session::get('deleteMessage')}}</div>
    @endif
</h2>
@foreach($zekrs as $zekr)
<h3 class="mt-4">نام: {{$zekr->title}}</h3>
<h3 class="mt-4">ذکر: {{$zekr->zekr}}</h3>
<h3 class="mt-4">تعداد کل ذکر: {{$zekr->allzekr}}</h3>
<h3 class="mt-4">تعداد روز ها: {{$zekr->numberofdays}}</h3>
<h3 class="mt-4">هر روز چه تعداد: {{$zekr->everyday}}</h3>
<h3 class="mt-4">تاریخ ایجاد: {{verta($zekr->created_at)->formatJalaliDatetime()}}</h3>
<h3 class="mt-4"> تعداد گفته شده:{{$zekr->counter}}</h3>
<h3 class="mt-4">باقیمانده: {{$total =  $zekr->allzekr - $zekr->counter }}</h3>
@if($total == 0)
    <h3 class="mt-4">ختم به اتمام رسیده است</h3>
@endif
<form action="{{route('destroy', $zekr->id)}}" method="post" enctype="multipart/form-data">
    @method('delete')
    @csrf
    <input type="hidden" value="{{$zekr->id}}">
<input type="submit" value="حذف">
</form>
    <hr/>
@endforeach
</body>
</html>


