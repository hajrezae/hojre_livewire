<!doctype html>
<html lang="fa" dir="rtl" direction="rtl">
<head>
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('shop/css/app.css') }}">
    <title>{{ env('APP_NAME') }} | {{ $page_title ?? 'صفحه' }}</title>
</head>
<body dir="rtl">
@include('shop.layouts.partials._header')
<script src="{{ asset('shop/js/app.js') }}"></script>
</body>
</html>