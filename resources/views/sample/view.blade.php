<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <a href="http://kachibon.work/tabeo-journalize/public/auth/redirect"><button>Googleでログイン</button></a>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
  </head>
  <body>

    <div id="app">
      <v-app>
          <calender-component></calender-component>
      <v-app>
    </div>


    <div>
      @if (Route::has('login'))
        <div class="top-right links">
          @auth
            <a href="{{ url('/home') }}">Home</a>
          @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
          @endauth
        </div>
      @endif
    </div>

  <script src="{{ asset('js/app.js')}}"></script>
  {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
  {{-- </body> --}}
{{-- </html> --}} 