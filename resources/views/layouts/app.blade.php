<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>{{config('app.name', 'Blog')}}</title>
    </head>
    <body>
    <header>
    @include('inc.navbar')
    </header>
    <style>
     body {
        padding-top: 60px;
        }
    </style>
    <main role="main" class="flex-shrink-0">
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
   </main>
   </body>
</html>
