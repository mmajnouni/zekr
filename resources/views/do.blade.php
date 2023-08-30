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
    @if(Session::has('createMessage'))
        <div class="alert alert-success">{{Session::get('createMessage')}}</div>
    @endif
</h2>
    <h3 class="mt-4">نام: {{$see->title}}</h3>
    <h3 class="mt-4">ذکر: {{$see->zekr}}</h3>
    <h3 class="mt-4">تعداد کل ذکر: {{$see->allzekr}}</h3>
    <h3 class="mt-4">تعداد روز ها: {{$see->numberofdays}}</h3>
    <h3 class="mt-4">هر روز چه تعداد: {{$see->everyday}}</h3>
<h3 class="mt-4"> تعداد گفته شده:{{$see->counter}}</h3>
<h3 class="mt-4">باقیمانده: {{ $total = $see->allzekr - $see->counter }}</h3>
        @if($total == 0)
    <h3 class="mt-4">ختم به اتمام رسیده است</h3>
         @elseif($total > 0)
   <form action="{{route('do', '$request')}}" method="post" enctype="multipart/form-data">
       @csrf
       @method('put')
       <div class="form-group">
           <label for="allzekr">تعداد ذکر امروز</label>
           <input type="number" class="form-control" id="counter" name="counter"  ria-describedby="counter" placeholder="">
           <input type="hidden" name="id" value="{{$see->id}}">
       </div>
       <button type="submit" class="btn btn-primary">ثبت</button>
   </form>
        @endif
</body>
</html>
