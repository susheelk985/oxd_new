<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OXYDYSER</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="{{ asset('storage/components/bootstrap/dist/css/bootstrap.min.css') }}">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{ asset('storage/components/font-awesome/css/font-awesome.min.css') }}">

  <!-- Ionicons -->

  <link rel="stylesheet" href="{{ asset('storage/components/Ionicons/css/ionicons.min.css') }}">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{ asset('storage/dist/css/AdminLTE.min.css') }}">



  <!-- Google Font -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



  <link rel="stylesheet" href="{{ asset('storage/dist/css/skins/_all-skins.min.css') }}">

  <link rel="stylesheet" href="{{ asset('storage/plugins/pace/pace.min.css') }}">
