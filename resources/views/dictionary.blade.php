<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/translate" method="post">
    @csrf
    <h5>Nhập từ muốn dịch:</h5>
    <input type="text" name="inp" placeholder="nhap tu muon dich">
    <button>Dịch</button>
</form>
</body>
</html>
