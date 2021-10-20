<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  {{ csrf_field() }}
  <a href="{{route('process')}}">送信</a>
  <br>
  <a href="{{route('contact.index')}}" >修正する</a>
</body>
</html>