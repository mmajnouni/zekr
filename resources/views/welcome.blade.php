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

<form action="{{route('test')}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="allzekr">تعداد کل ذکر</label>
        <input type="number" class="form-control" id="allzekr" name="allzekr"  ria-describedby="allzekr" placeholder="">
        <small id="emailHelp" class="form-text text-muted">تعداد ذکر کل اگر بصورت روز به روز باشد کار پایین پر شود</small>
    </div>
    <div class="form-group">
        <label for="numberofdays">تعداد روز</label>
        <input type="number"  class="form-control" id="numberofdays" name ="numberofdays" placeholder="">
    </div>
    <div class="form-group">
        <label for="everyday">هر روز چه تعداد</label>
        <input type="number" class="form-control" id="everyday" name="everyday" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">ثبت</button>
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
