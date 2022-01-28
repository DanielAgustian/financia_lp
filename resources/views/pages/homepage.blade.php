<!--begin::Entry-->

@extends('welcome')

@section('cssinline')

    <style>
        .form-control {
            height: 30px;
        }
        /* .g-recaptcha > div{
            width: 100% !important
        } */
    </style>

@endsection
@section('banner')
    <div class=" w-100 min-h-350px min-h-lg-500px px-5">
        <!--begin::Heading-->
        <div>
            <div class="row justify-content-end">

                <div class="col-lg-6 ">
                    <div class="bg-white rounded shadow-sm  p-10 mb-4" style="opacity:0.95;">

                        <!--begin::Heading-->
                        <div class="mb-7 text-center">
                            <!--begin::Title-->
                            <h3 class="text-dark mb-3">Create an Account</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-5">Already have an account?
                                <a href="https://financiafx.co/login" class="link-danger fw-bolder">Sign in
                                    here</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <a href="https://financiafx.co/login/oAuth/process/google">
                            <button type="button" class="btn btn-light-danger fw-bolder w-100 mb-7">
                                <img alt="Logo" src="https://financiafx.co/assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />
                                Sign in with Google
                            </button>
                        </a>




                        <!--end::Action-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-7">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->

                        <!--begin::Form-->
                        <form class="form w-100" method="post" action="https://financiafx.co/auth/register"
                            id="registerForm">
                            <!--begin::Input group-->
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="fv-row mb-5">
                                        <!--begin::Col-->
                                        <label class="form-label fw-bolder text-dark fs-7">Nama Lengkap</label>
                                        <input class="form-control  form-control-solid  " type="text" placeholder=""
                                            name="name" autocomplete="off" value="" required />
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bolder text-dark fs-7">Email</label>
                                        <input class="form-control  form-control-solid  " type="email" placeholder=""
                                            name="email" autocomplete="off" value="" required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bolder text-dark fs-7">Whatsapp</label>
                                        <input class="form-control  form-control-solid  " type="text" id="ot_phone"
                                            placeholder="" name="phone" value="" autocomplete="off" required />
                                    </div>
                                    

                                    
                                </div>
                                <div class="col-md-6">
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-8 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bolder text-dark fs-7">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control  form-control-solid " type="password"
                                                    placeholder="" minlength="8" name="password" autocomplete="off"
                                                    required />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    {{-- <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i> --}}
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters with a mix of letters,
                                            numbers &amp;
                                            symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bolder text-dark fs-7">Confirm Password</label>
                                        <input class="form-control  form-control-solid " minlength="8" type="password"
                                            placeholder="" name="password_confirmation" autocomplete="off" required />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    
                                    <!--end::Input group-->

                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="fv-row mb-5">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="toc" value="1" required />
                                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
                                                <a href="#" class="ms-1 link-danger">Terms and conditions</a>.</span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="_token" value="UpElcQHZZlZchiDdUWddsIOfPnOCUaS9D0nXrPDy">
                                            <div class="g-recaptcha" data-sitekey="6LePJ_EaAAAAAN1k2B3C32m-giHBDRXQZ-hhpcnb">
                                            </div>
                                    <h4 class="text-danger mt-6" hidden id="recaptcha-error"> 
                                         Wajib
                                    buktikan kamu bukan
                                    robot!</h4>
                                </div>
                            </div>

                            
                            <!--begin::Actions-->
                            <div class="text-center mt-6">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-lg btn-danger rounded" id="ot_button">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                </div>
                            </div>
                            <!--end::Actions-->
                            <script src="https://www.google.com/recaptcha/api.js?hl=id"></script>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection


@section('content')
    <!--begin::How It Works Section-->
    <div class="mb-n10 mb-lg-n20 z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <a href="#registerDiSini" class="btn btn-danger btn-lg mb-20">Register Sekarang</a>
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
                    Robot Bimasakti 2022</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold">Kamu harus tau ini! Robot Bimasakti 2022. Robot ini akan jadi
                    teman setia kamu untuk trading Emas (Gold) XAUUSD.
                    <br />Buka akun sekarang dan atur Robot-mu untuk langsung cari profit! Tingkat keberhasilnya
                    rata-rata 55% bahkan bisa lebih setiap bulannya.
                    <br />Robot ini bisa dipantau melalui :
                </div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20">
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <a href="https://download.mql5.com/cdn/web/16230/mt4/financiatrader4setup.exe" target="_blank"><img
                                src="https://financia-fx.com/wp-content/uploads/2019/08/Windows.jpeg" class="mh-125px mb-9"
                                alt="" /></a>

                        <!--end::Illustration-->

                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=FinanciaTrader-Demo,FinanciaTrader-Real"
                            target="_blank"><img src="https://financia-fx.com/wp-content/uploads/2019/08/Apple.jpeg"
                                class="mh-125px mb-9" /></a>
                        <!--end::Illustration-->

                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 px-5">
                    <!--begin::Story-->
                    <div class="text-center mb-10 mb-md-0">
                        <!--begin::Illustration-->
                        <a
                            href="https://download.mql5.com/cdn/mobile/mt4/android?server=FinanciaTrader-Demo,FinanciaTrader-Real"><img
                                src="https://financia-fx.com/wp-content/uploads/2019/08/Android.jpeg" class="mh-125px mb-9"
                                alt="" /></a>

                        <!--end::Illustration-->

                    </div>
                    <!--end::Story-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Product slider-->
            <div class="tns tns-default">
                <!--begin::Slider-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                    data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false"
                    data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                    data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
                    <!--begin::Item-->
                    <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
                        <img src="https://financia-fx.com/wp-content/uploads/2020/11/Deskrip-15menit.png"
                            class="card-rounded shadow mw-100" alt="" />
                    </div>
                    <!--end::Item-->

                </div>
                <!--end::Slider-->
                <!--begin::Slider button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">

                </button>
                <!--end::Slider button-->
                <!--begin::Slider button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">

                </button>
                <!--end::Slider button-->
            </div>
            <!--end::Product slider-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::How It Works Section-->
    <!--begin::Statistics Section-->
    <div class="mt-sm-n10">
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
        <div class="py-20 landing-dark-bg">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Plans-->
                <div class="d-flex flex-column container pt-lg-20">

                    <div class="text-center" id="kt_pricing">
                        <img src="{{ asset('/images/bimasakti-social.jpeg') }}" width="100%">


                    </div>
                    <!--end::Pricing-->
                </div>
                <!--end::Plans-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Statistics Section-->
    <!--begin::Team Section-->
    <div class="py-10 py-lg-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-12">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Rekap
                    Transaksi Robot BimaSakti_2022</h3>
                <!--end::Title-->
                <!--begin::Sub-title-->
                <iframe src="https://financiafx.co/trx/statement.htm" style="height:600px;width:100%;"
                    title="Bukti Transaksi"></iframe>
                <!--end::Sub-title=-->
            </div>
            <!--end::Heading-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Team Section-->

    <!--begin::Pricing Section-->
    <div class="mt-sm-n20">
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
        <div class="pb-15 pt-18 landing-dark-bg">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-white fw-bolder mb-5">Download Robot Bimasakti 2022</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-gray-700 fw-bold">Tanpa banyak syarat, silahkan langsung download Robot
                        (EA) nya di bawah ini
                        <br />Broker jenis ini menyalurkan order kliennya ke penyedia likuiditas (likuiditor) yang
                        mempunyai akses ke pasar antar bank
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Statistics-->
                <div class="d-flex flex-center">
                    <!--begin::Items-->
                    <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                            style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <!--begin::Svg Icon | path: icons/duotone/Interface/Grid.svg-->
                            <img src="https://financiafx.co/assets/media/illustrations/presentation.png" width='200' alt="">
                            <!--end::Svg Icon-->
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mt-10">
                                <!--begin::Value-->

                                <!--end::Value-->

                                <a href="https://financiafx.co/robot/BimaSakti_2022.ex4" download
                                    class="btn btn-success btn-lg btn-block" target="_blank">Download Robot di
                                    sini</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                            style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <img src="https://financiafx.co/assets/media/illustrations/banking.png" width='200' alt="">
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mt-10">
                                <!--begin::Value-->

                                <!--end::Value-->
                                <!--begin::Label-->
                                <a href="https://financiafx.co/register" class="btn btn-primary btn-lg btn-block"
                                    target="_blank">Buka Akun Trading di sini</a>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                            style="background-image: url('assets/media/svg/misc/octagon.svg')">
                            <!--begin::Symbol-->
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Cart4.svg-->
                            <img src="https://financiafx.co/assets/media/illustrations/support.png" width='200' alt="">
                            <!--end::Svg Icon-->
                            <!--end::Symbol-->
                            <!--begin::Info-->
                            <div class="mt-10">

                                <!--begin::Label-->
                                <a href="https://wa.me/6281211006657/?text=Halo admin, saya mau lisensi Robot Bimasakti 2022"
                                    class="btn btn-danger btn-lg btn-block" target="_blank">Dapatkan Lisensi di
                                    sini</a>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Statistics-->
                <!--begin::Testimonial-->
                <div class="fs-2 fw-bold text-muted text-center mb-3">
                    <span class="fs-1 lh-1 text-gray-700">“</span>Adalah tekad kami untuk mengubah pandangan
                    negatif
                    dari masyarakat Indonesia terhadap bisnis trading forex,
                    <br />
                    <span class="text-gray-700 me-1">karena kami tahu bahwa</span>, forex adalah sebuah lahan
                    bisnis
                    yang menguntungkan.
                    <span class="fs-1 lh-1 text-gray-700">“</span>
                </div>
                <!--end::Testimonial-->
                <!--begin::Author-->
                <div class="fs-2 fw-bold text-muted text-center">
                    <a href="#" class="link-primary fs-4 fw-bolder">Visi,</a>
                    <span class="fs-4 fw-bolder text-gray-600">Financia FX</span>
                </div>
                <!--end::Author-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
    <!--end::Pricing Section-->


    <!--begin::Testimonials Section-->
    <div class="mt-20 mb-n20 position-relative z-index-2">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Highlight-->
            <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                style="background: linear-gradient(to top right, #c49229,#f9e655,#91660f);">
                <!--begin::Content-->
                <div class="my-2 me-5">
                    <!--begin::Title-->
                    <div class="fs-1 fs-lg-2qx fw-bolder text-dark mb-2">Start With Financia FX,
                        <span class="fw-normal">Trade Your Best!</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-6 fs-lg-5 text-dark fw-bold opacity-75">Join over 10,000 Traders Community to
                        Stay Ahead</div>
                    <!--end::Description-->
                </div>
                <!--end::Content-->
                <!--begin::Link-->
                <a href="https://financiafx.co/register"
                    class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2"
                    id="registerDiSini">Register Now</a>
                <!--end::Link-->
            </div>
            <!--end::Highlight-->
        </div>
        <!--end::Container-->
    </div>
@endsection


@section('jsPage')

@endsection


<!--end::Entry-->
