<html direction="rtl" dir="rtl" style="direction: rtl">
    <!--begin::Head-->
    <head>
        <meta charset="utf-8">
        <title>{{ $page_title ?? 'ثبت نام ورود' }}</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="{{ asset('css/pages/login/classic/login-4.rtl.css') }}" rel="stylesheet" type="text/css">
        <!--end::Page Custom Styles-->
        <!--begin::GLobal Styles-->
        <link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css">
        <!--end::GLobal Styles-->
        <!--begin::Layout تمs(used by all pages)-->
        <link href="{{ asset('css/themes/layout/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/themes/layout/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/themes/layout/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/themes/layout/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
    <!--end::Layout تمs-->
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}">
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root bg-white">
            <!--begin::Login-->
            <div class="login login-4 d-flex flex-row-fluid login-signin-on" id="kt_login">
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat">
                    <div class="login-form text-center p-7 position-relative overflow-hidden">
                        @yield('form')
                    </div>
                </div>
            </div>
            <!--end::Login-->
        </div>
        <!--begin::Global تم Bundle(used by all pages)-->
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <!--end::Global تم Bundle-->
    @yield('scripts')
    <!--end::Body-->
    </body>
</html>