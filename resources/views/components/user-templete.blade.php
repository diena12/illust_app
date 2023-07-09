<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-orange-50">
  <x-header></x-header>
  {{ $slot }}
  <x-footer></x-footer>
</body>
</html>