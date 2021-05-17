<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ env('APP_NAME') }} | </title>
    <link rel="shortcut icon" type="image/x-icon" href="/shop/images/favicon.ico"/>
    <link href="/shop/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="/shop/css/vendor/vendor.min.css" rel="stylesheet">
    <link href="/shop/css/style-sport.css" rel="stylesheet">
    <link href="/shop/fonts/icomoon/icons.css" rel="stylesheet">
    <style>
        .prd .prd-inside {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body class="has-smround-btns has-loader-bg equal-height">
@include('shop.layouts.partials._header')
<div class="page-content">
    @yield('content')
</div>
@include('shop.layouts.partials._footer')
<script src="/shop/js/vendor-special/lazysizes.min.js"></script>
<script src="/shop/js/vendor-special/ls.bgset.min.js"></script>
<script src="/shop/js/vendor-special/ls.aspectratio.min.js"></script>
<script src="/shop/js/vendor-special/jquery.min.js"></script>
<script src="/shop/js/vendor-special/jquery.ez-plus.js"></script>
<script src="/shop/js/vendor/vendor.min.js"></script>
<script src="/shop/js/app-html.js"></script>
</body>

</html>