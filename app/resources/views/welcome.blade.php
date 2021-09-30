<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  </head>
  <body class="antialiased">
    <header>
      <div class="header-navi">
        <img class="logo" src="{{asset("images/logo.svg") }}" alt="">

          @if (Route::has('login'))
            <div class="button">
              @auth
                <a href="{{ url('/home') }}" class="">HOME</a>
              @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">アカウント作成</a>
                  @endif
              @endauth
            </div>
          @endif
        </div>
      </div>
      <img class="fv" src="/images/fv.png" alt="">
    </header>
  </body>
</html>
