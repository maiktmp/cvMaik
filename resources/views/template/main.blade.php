<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C.V. Miguel Colin Flores</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/ic_contact_me.png') }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    @include('template.global_css')

</head>
<body>
<div id="app">
    <v-main-container/>
</div>

@include('template.global_js')
</body>
</html>
