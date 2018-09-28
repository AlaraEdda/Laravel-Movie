<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Alara')}}</title>

    </head>
    <body>
        <!-- 
        Installeer extentie voor VSCode
        ext install laravel-blade
        
        De "Pages" krijgen allemaal deze lay-out.
        -->
        @yield('content')
    </body>
</html>
