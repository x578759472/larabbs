<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{csrf_token()}}">

  <title>@yield('title','laraBBS') - Laravel 进阶教程</title>
  <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />

<link rel="stylesheet" href="{{mix('css/app.css')}}">

  @yield('styles')

</head>
<body>
  <div id='app' class="{{route_class()}}-page"></div>

    @include('layouts._header')
    <div class="container">
      @include('shared._messages')
      @yield('content')
    </div>
    @include('layouts._footer')


  <script src="{{mix('js/app.js')}}"></script>

  @yield('scripts')
</body>
</html>
