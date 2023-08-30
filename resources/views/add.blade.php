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

<form action="{{route('save')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="title">عنوان</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  ria-describedby="title" value="{{ old('title') }}" placeholder="اجباری">
        @error('title')
        <div class="alert alert-danger">عنوان وارد نشده است</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="zekr">ذکر</label>
        <input type="text" class="form-control @error('zekr') is-invalid @enderror" id="zekr" name="zekr"  ria-describedby="zekr" placeholder="اجباری">
        @error('zekr')
        <div class="alert alert-danger">ذکر وارد نشده است</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="allzekr">تعداد کل ذکر</label>
        <input type="number" class="form-control @error('allzekr') is-invalid @enderror" id="allzekr" name="allzekr"  ria-describedby="allzekr" placeholder="اجباری">
        <small id="emailHelp" class="form-text text-muted">تعداد ذکر کل اگر بصورت روز به روز باشد کار پایین پر شود</small>
        @error('allzekr')
        <div class="alert alert-danger">ذکر وارد نشده است</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="numberofdays">تعداد روز</label>
        <input type="number"  class="form-control" id="numberofdays" name ="numberofdays" placeholder="اختیاری">
    </div>
    <div class="form-group">
        <label for="everyday">هر روز چه تعداد</label>
        <input type="number" class="form-control" id="everyday" name="everyday" placeholder="اختیاری">
    </div>
    <button type="submit" class="btn btn-primary">ثبت</button>
</form>
<form action="{{route('home')}}" method="get">
<button type="submit" class="btn btn-primary">بازگشت</button>
</form>
<script type="text/javascript">

    let input = document.getElementById('numberofdays');

    input.addEventListener("input", function(){
        let allzekr = document.querySelector("#allzekr").value;
        let numberofdays = document.querySelector('#numberofdays').value;
        let divide = allzekr / numberofdays;
        document.querySelector("#everyday").value = divide;
    })

</script>
</body>
</html>
