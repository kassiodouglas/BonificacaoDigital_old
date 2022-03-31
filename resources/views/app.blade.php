<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name='csrf-token' content="{{ csrf_token() }}">

  <meta name='url' content="{{config('app.url')}}">

  <title> BonificaçãoDigital</title>
  <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('favicon.png') }}">


  {{--  CSS  --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}" >


</head>
<body class="">

  @yield('content_root')

  <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
