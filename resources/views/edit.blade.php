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
<h2>ویرایش ذکر</h2>
<form action="{{route('edit', $id->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="title">عنوان</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  ria-describedby="title" value="{{$id->title}}" placeholder="اجباری">
        @error('title')
        <div class="alert alert-danger">عنوان وارد نشده است</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="zekr">ذکر</label>
        <input type="text" class="form-control @error('zekr') is-invalid @enderror" id="zekr" name="zekr"  ria-describedby="zekr" value="{{$id->zekr}}" placeholder="اجباری">
        @error('zekr')
        <div class="alert alert-danger">ذکر وارد نشده است</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="allzekr">تعداد کل ذکر</label>
        <input type="number" class="form-control @error('allzekr') is-invalid @enderror" id="allzekr" name="allzekr"  ria-describedby="allzekr" value="{{$id->allzekr}}" placeholder="اجباری">
        <small id="emailHelp" class="form-text text-muted">تعداد ذکر کل اگر بصورت روز به روز باشد کار پایین پر شود</small>
        @error('allzekr')
        <div class="alert alert-danger">ذکر وارد نشده است</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="numberofdays">تعداد روز</label>
        <input type="number"  class="form-control" id="numberofdays" name ="numberofdays" placeholder="اختیاری" value="{{$id->numberofdays}}">
    </div>
    <div class="form-group">
        <label for="everyday">هر روز چه تعداد</label>
        <input type="number" class="form-control" id="everyday" name="everyday" placeholder="اختیاری" value="{{$id->everyday}}">
    </div>
    <button type="submit" class="btn btn-primary">ویرایش</button>
</form>
<a href="{{route('home')}}"> <input type="button" value="بازگشت"></a>
</body>
</html>
