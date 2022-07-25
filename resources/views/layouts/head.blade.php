<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lusha') }}</title>

<link href="{{ asset('public/assets/css/bootstrap/bootstrap5.min.css') }}" rel="stylesheet">

<script src="{{ asset('public/assets/js/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/bootstrap/jquery.min.js') }}" defer></script>
<script src="{{ asset('public/assets/js/bootstrap/jquery.validate.js') }}" defer></script>

<!-- custom css and js  -->
<script src="{{ asset('public/assets/js/custom-script.js') }}" defer></script>
<script src="{{ asset('public/assets/js/custom-ajax.js') }}" defer></script>
<link href="{{ asset('public/assets/css/custom-style.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/css/custom-style2.css') }}" rel="stylesheet">

<link href="{{ asset('public/assets/css/dashboard-style.css') }}" rel="stylesheet">

<!-- data table  -->
<link href="{{ asset('public/assets/css/bootstrap/bootstrap-table.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/css/bootstrap/jquery.dataTables.min.css') }}" rel="stylesheet">

 <!-- Font awseom -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<script>
  var base_url = '{{ url("/") }}'; 
</script>