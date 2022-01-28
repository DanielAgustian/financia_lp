<!DOCTYPE html>
<!--
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemeAuthor: KeenThemes
Purchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Home | FinanciaFX</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="https://financiafx.co/images/favicon.png" />
    <meta name="csrf-token" content="UpElcQHZZlZchiDdUWddsIOfPnOCUaS9D0nXrPDy">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('asset/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/style.bundle.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://financiafx.co/assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-icons/woff2')}}">
    {{-- <link href="https://financiafx.co/assets/css/custom.css" rel="stylesheet" type="text/css" /> --}}
    <!--end::Global Stylesheets Bundle-->
    @yield('cssinline')
    <!--begin::Page Custom CSS(used by this page)-->
    <!--end::Page Custom CSS-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5baa53e6b156da713cb3cb65/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1317038468736650');
        fbq('track', 'PageView');
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1317038468736650&ev=PageView&noscript=1" /></noscript>
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-position-x-center landing-dark-bg"
                style="background-image: url('{{ asset('images/bimasakti-small-banner.jpeg') }}'); background-size:cover;">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                                <path
                                                    d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                    fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <a href="https://financiafx.co">
                                    <img alt="Logo" src="https://financiafx.co/images/logo-ffx-1.png"
                                        class="logo-default h-25px h-lg-30px" />
                                    <img alt="Logo" src="/images/logo-ffx.png" class="logo-sticky h-20px h-lg-25px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->

                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">

                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                @yield('banner')
                
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        @yield('content')
        <!--end::Testimonials Section-->
        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-12 pe-lg-16 mb-10 mb-lg-0">
                            <p class="text-white">Seluruh konten di website FinanciaFX ini bersifat informatif.
                                FinanciaFX tidak menjamin kelengkapan berikut akurasi dari informasi tersebut.
                                FinanciaFX tidak bertanggung jawab atas segala bentuk kerugian, baik langsung ataupun
                                tidak, dikarenakan penggunaan informasi yang disediakan di website ini.</p>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo image-->
                            <a href="landing.html">
                                <img alt="Logo" src="https://financiafx.co/images/logo-ffx-1.png"
                                    class="h-15px h-md-20px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="ms-4 ms-md-10 mx-4 fs-6 fw-bold text-gray-600 pt-1"
                                href="https://financiafx.co">© 2021 Financia FX.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">

                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/landing.js"></script>
    <script src="assets/js/custom/pages/company/pricing.js"></script>


    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
