{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
 --}}
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }} dir="rtl"
      direction="rtl"
      style="direction: rtl">
    <head>
        <meta charset="utf-8"/>
        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>
        {{-- Meta Data --}}
        <meta name="description"
              content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        {{-- Favicon --}}
        <link rel="shortcut icon"
              href="{{ asset('admin/media/logos/favicon.ico') }}"/>
        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}"
                  rel="stylesheet"
                  type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}"
                  rel="stylesheet"
                  type="text/css"/>
        @endforeach
        <livewire:styles/>
        <style>
            html {
                overflow-y: scroll;
            }

            .modal-open {
                overflow: hidden !important;
            }

            html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown):not(.sweetalert2-nopadding), body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown):not(.sweetalert2-nopadding) {
                padding-right: 0 !important;
                overflow-y: hidden !important;
            }

            html.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown):not(.sweetalert2-nopadding) {
                overflow-y: scroll !important;
            }
        </style>
        {{-- Includable CSS --}}
        @yield('styles')
    </head>
    <body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>
        @if (config('layout.page-loader.type') != '')
            @include('admin.layout.partials._page-loader')
        @endif

        @include('admin.layout.base._layout')

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
          var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        <livewire:scripts/>

        <script src="/js/app.js" defer></script>

        {{-- Global Theme JS Bundle (used by all pages)  --}}
        @foreach(config('layout.resources.js') as $script)
            <script src="{{ asset($script) }}"
                    type="text/javascript"
                    defer></script>
        @endforeach


        {{-- Includable JS --}}
        <script>
          //Confirmation Prompt for every delete action
          function confirmDelete(event, id, ent, method = 'delete') {
            Swal.fire({
              title: `آیا از پاک کردن ${ent} مطمئن هستید؟`,
              text: "این کار غیر قابل بازگشت است!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'بله',
              cancelButtonText: 'لغو'
            }).then((result) => {
              if (result.isConfirmed) {
                livewire.emit(method, id);
              }
            })
          }

          //Action Success toaster
          window.addEventListener('success', function (e) {
            Swal.fire({
              toast: true,
              position: 'bottom-left',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              title: e.detail.message,
              icon: 'success'
            })
          });

          //Action Failed toaster
          window.addEventListener('action_failed', function (e) {
            Swal.fire({
              toast: true,
              position: 'top',
              color: 'danger',
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              title: e.detail.message,
              icon: 'danger'
            })
          });

        </script>
        @yield('scripts')
    </body>
</html>

