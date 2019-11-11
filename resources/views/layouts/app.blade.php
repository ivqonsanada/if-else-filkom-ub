<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#01579b">
    <link rel="icon" href="http://ifelse.filkom.ub.ac.id/public/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IF ELSE FILKOM UB</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons">
    <link rel="stylesheet" href="http://ifelse.filkom.ub.ac.id/public/css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="http://ifelse.filkom.ub.ac.id/public/css/vuetify.css">
    <link rel="manifest" href="http://ifelse.filkom.ub.ac.id/public/manifest.json">

</head>
<body>

    @yield('content')
    
    <!-- Scripts -->

    @yield('extrascript')
    <noscript>Your browser does not support JavaScript!</noscript>
</body>
</html>
