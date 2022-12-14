@extends('master')

@section('slider')
    <section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-40 min-vh-lg-100 include-header">
        <div class="slider-inner"
            style="background:  linear-gradient(90deg,rgb(247, 247, 247) 35%, rgba(117, 19, 93, 0)), url('{{ asset('images/bimasakti-small-banner-flip.png') }}') center center no-repeat; background-size: cover;">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="row pt-5">
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-title">
                                <div class="badge rounded-pill badge-default">SEO Ready</div>
                                <h2>Tahun 2022 Dapatkan Cuan
                                    dengan Robot Bima Sakti</h2>
                                <h3 class="text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">
                                    Profit Rate <span class="t-rotate">55%</span> Per Bulan!</h3>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia vitae mollitia
                                    dignissimos ab qui aspernatur.</p> --}}
                                <div></div>
                                <button class="button btn-regis button-rounded button-large nott ls0">Daftar Sekarang</button>
                                <button
                                    class="button btn-benefit button-rounded button-large button-light text-dark bg-white border nott ls0">Benefit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="video-wrap h-100 d-block d-lg-none">
                <div class="video-overlay" style="background: rgba(255,255,255,0.85);"></div>
            </div>

        </div>
    </section>
@endsection

@section('content')
    <section id="content">

        <div class="content-wrap pt-0">

            <!-- Client Carousel -->
            <div class="heading-block border-bottom-0 center mx-auto mb-0 pt-5 pb-3" style="max-width: 700px">
                <div class="badge rounded-pill badge-default">Robot Kami</div>
                <h3 class="nott ls0 mb-3">Robot Bimasakti 2022</h3>
                <p class="mx-md-0 mx-1">Kamu harus tau ini! Robot Bimasakti 2022. Robot ini akan jadi teman setia kamu
                    untuk trading Emas (Gold)
                    XAUUSD.
                    Buka akun sekarang dan atur Robot-mu untuk langsung cari profit! Tingkat keberhasilnya rata-rata 55%
                    bahkan bisa lebih setiap bulannya.
                    Robot ini bisa dipantau melalui :.</p>
            </div>
            <div class="section bg-transparent m-0 border-bottom pb-5">

                <div class="container container-application">
                    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100"
                        data-loop="true" data-autoplay="5000" data-nav="false" data-pagi="false" data-items-xs="2"
                        data-items-sm="1" data-items-md="2" data-items-lg="3" data-items-xl="3">
                        <div class="oc-item"><a href="#"><img
                                    src="https://financia-fx.com/wp-content/uploads/2019/08/Apple.jpeg" alt="Brands"></a>
                        </div>
                        <div class="oc-item"><a href="#"><img
                                    src="https://financia-fx.com/wp-content/uploads/2019/08/Windows.jpeg" alt="Brands"></a>
                        </div>
                        <div class="oc-item"><a href="#"><img
                                    src="https://financia-fx.com/wp-content/uploads/2019/08/Android.jpeg" alt="Brands"></a>
                        </div>
                        {{-- <div class="oc-item"><a href="#"><img src="demos/business/images/clients/zillow.svg"
                                    alt="Brands"></a></div>
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/amazon.svg"
                                    alt="Brands"></a></div> --}}
                    </div>
                </div>
            </div>

            <!-- Benefit -->
            <div id="section-benefit" class="section bg-transparent mt-4 mb-0 pb-0">
                <div class="container">
                    <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                        <div class="badge rounded-pill badge-default">Benefit</div>
                        <h3 class="nott ls0 mb-3">Kenapa Harus Bimasakti?</h3>
                        <p>Bimasakti punya beberapa keuntungan dibandingkan dengan beberapa robot yang tersedia di pasaran.
                            Coba intip kelebihan bimasakti!</p>
                    </div>
                    <div class="row justify-content-between align-items-center ">

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box flex-md-row-reverse text-md-end border-0 ">
                                <div class="fbox-icon">
                                    <a href="#">
                                        <h1 style="font-weight: 900" class="icon-text">50%</h1>
                                    </a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">50% Revenue Per Bulan</h3>
                                    <p>Dengan robot Bima Sakti Kamu akan
                                        mendapatkan Profit Rate 50% TP/SL
                                        Ration 1.5:1</p>
                                </div>
                            </div>
                            <div class="ganjelan"></div>
                            <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5 mb-md-0 mb-5">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fas fa-robot icon-text"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Autopilot</h3>
                                    <p>Tidak perlu khawatir untuk selalu
                                        memantau, karena Bima Sakti Robot
                                        Canggih???..
                                    </p>
                                </div>
                            </div>
                            <div class="ganjelan"></div>
                            {{-- <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/analysis.svg" alt="Feature Icon"
                                            class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Digital Analysis</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                                </div>
                            </div> --}}

                        </div>

                        <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-none d-lg-block center my-5">
                            <img src="{{ asset('images/2.png') }}" alt="iphone" class="rounded  parallax">
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box border-0 ">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fas fa-theater-masks icon-text"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Trading Method</h3>
                                    <p>Price Action, Tidak Martingale, Tidak
                                        Averaging, Tidak Double Posisi, TP SL
                                        Menyesuaikan, & Kondisi Lebar Pasa.</p>
                                </div>
                            </div>

                            <div class="feature-box border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><i class="fas fa-file-medical-alt icon-text"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Portofolio</h3>
                                    <p>
                                        Robot Bima Sakti tidak pernah
                                        menjanjikan selalu profit. Robot Bima
                                        Sakti bisa memaksimalkan kinerja
                                        analisa untuk mendapatkan profit. Loss
                                        & Profit tergantung market</p>
                                </div>
                            </div>

                            {{-- <div class="feature-box border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/content_marketing.svg" alt="Feature Icon"
                                            class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">Content Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.
                                    </p>
                                </div>
                            </div> --}}

                        </div>

                    </div>
                </div>
            </div>

            <!-- Pricing-->
            {{-- <div class="section m-0"
                style="background: url('demos/seo/images/sections/4.png') no-repeat center top; background-size: cover; padding: 140px 0 0;">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mt-4">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="badge rounded-pill badge-default">Pricing Table</div>
                                <h3 class="nott ls0">No Hidden Charges. <br>Choose Your Best Plan.</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem
                                assumenda quae possimus sunt dignissimos tempora officia.</p>
                            <div class="pricing-tenure-switcher d-flex align-items-center mb-4 position-relative"
                                data-container="#pricing-switch">
                                <span class="pts-left fw-bold text-muted">Monthly</span>
                                <div class="pts-switcher mx-3">
                                    <div class="switch">
                                        <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round"
                                            type="checkbox">
                                        <label for="switch-toggle-pricing-tenure" class="mb-0"></label>
                                    </div>
                                </div>
                                <span class="pts-right fw-bold text-muted">Yearly</span>
                                <div class="price-discount"></div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div id="section-pricing" class="page-section p-0 m-0">

                                <div id="pricing-switch" class="pricing row align-items-end g-0 col-mb-50 mb-4">

                                    <div class="col-md-6">

                                        <div class="pricing-box">
                                            <div class="pricing-title">
                                                <img class="mb-2 bg-transparent rounded-0"
                                                    src="demos/seo/images/icons/man.svg" alt="Pricing Icon" width="50">
                                                <h3>Single User Plan</h3>
                                                <span>Most Popular</span>
                                            </div>
                                            <div class="pricing-price">
                                                <div class="pts-switch-content-left"><span
                                                        class="price-unit">&dollar;</span>5<span
                                                        class="price-tenure">Per Month</span></div>
                                                <div class="pts-switch-content-right"><span
                                                        class="price-unit">&dollar;</span>48<span
                                                        class="price-tenure">Per Year</span></div>
                                            </div>
                                            <div class="pricing-features border-0 bg-transparent">
                                                <ul>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>Limited</strong>
                                                        Support</li>
                                                    <li class="pts-switch-content-left text-black-50"><i
                                                            class="icon-minus-circle me-2"></i><del
                                                            style="opacity: .5"><strong>1</strong> Free
                                                            Optimization</del></li>
                                                    <li class="pts-switch-content-right"><i
                                                            class="icon-check-circle color me-2"></i><strong>1</strong>
                                                        Free Optimization</li>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>100+</strong>
                                                        Pages</li>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>Single</strong>
                                                        User License</li>
                                                    <li><i class="icon-check-circle color me-2"></i>Phone &amp;
                                                        Email Support</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-action">
                                                <div class="pts-switch-content-left"><a href="#"
                                                        class="button button-large button-rounded w-100 text-capitalize m-0 ls0">Get
                                                        Started</a></div>
                                                <div class="pts-switch-content-right"><a href="#"
                                                        class="button button-large button-rounded w-100 text-capitalize m-0 ls0">Get
                                                        Started</a></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="pricing-box">
                                            <div class="pricing-title">
                                                <img class="mb-2 bg-transparent rounded-0"
                                                    src="demos/seo/images/icons/group.svg" alt="Pricing Icon" width="60">
                                                <h3>Multiple User Plan</h3>
                                            </div>
                                            <div class="pricing-price">
                                                <div class="pts-switch-content-left"><span
                                                        class="price-unit">&dollar;</span>12<span
                                                        class="price-tenure">Per Month</span></div>
                                                <div class="pts-switch-content-right"><span
                                                        class="price-unit">&dollar;</span>115<span
                                                        class="price-tenure">Per Year</span></div>
                                            </div>
                                            <div class="pricing-features border-0 bg-transparent">
                                                <ul>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>24*7</strong>
                                                        Support</li>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>10</strong>
                                                        Free Optimization</li>
                                                    <li><i class="icon-check-circle color me-2"></i><strong>1000+</strong>
                                                        Pages</li>
                                                    <li><i
                                                            class="icon-check-circle color me-2"></i><strong>Unlimited</strong>
                                                        User License</li>
                                                    <li><i class="icon-check-circle color me-2"></i>Phone &amp;
                                                        Email Support</li>
                                                </ul>
                                            </div>
                                            <div class="pricing-action">
                                                <div class="pts-switch-content-left"><a href="#"
                                                        class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">Get
                                                        Started</a></div>
                                                <div class="pts-switch-content-right"><a href="#"
                                                        class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">Get
                                                        Started</a></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}

            <!-- Form Section -->
            <div id="section-register" class="section m-0"
                style="background: url('demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-md-6 img-mob-form">
                            <img src="{{ asset('images/bimasakti-social.jpeg') }}" alt="" class="img-form  rounded">
                        </div>

                        <div class="col-lg-6 col-md-7">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h2 class="mb-3 text-center mb-4">Apply Now</h2>
                                    <div class="form-widget">
                                        <div class="form-result"></div>
                                        <form class="row mb-0" id="template-contactform" name="template-contactform"
                                            action="include/form.php" method="post">
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-name">Nama Lengkap:*</label>
                                                <input type="text" id="template-contactform-name"
                                                    name="template-contactform-name" class="form-control input-sm required"
                                                    value="" required>
                                            </div>
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-email">Email Address:*</label>
                                                <input type="email" id="template-contactform-email"
                                                    name="template-contactform-email" class="form-control input-sm required"
                                                    value="" required>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-website">Whatsapp:*</label>
                                                <input type="tel" id="template-contactform-whatsapp"
                                                    name="template-contactform-whatsapp"
                                                    class="form-control input-sm required" value="" required>
                                            </div>
                                            <div class="col-md-6 col-12 form-group mb-4">
                                                <label for="template-contactform-website">Password:*</label>
                                                <input type="password" id="template-contactform-password"
                                                    name="template-contactform-password"
                                                    class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-md-6 col-12 form-group mb-4">
                                                <label for="template-contactform-website">Confirm Password:*</label>
                                                <input type="password" id="template-contactform-password"
                                                    name="template-contactform-password"
                                                    class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck"
                                                    name="template-contactform-botcheck" value="" class="sm-form-control" />
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button class="button button-rounded w-100 nott ls0 m-0" type="submit"
                                                    id="template-contactform-submit" name="template-contactform-submit"
                                                    value="submit">Register
                                                    Now</button>
                                            </div>

                                            <h5 class="text-center my-4"> Atau </h5>
                                            <div class="col-12 form-group mb-1">
                                                <button class="button button-rounded w-100 shadow btn-white nott ls0 m-0"
                                                    type="submit" id="template-contactform-submit"
                                                    name="template-contactform-submit" type="button">
                                                    <div class="d-flex justify-content-center"><img
                                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/24px-Google_%22G%22_Logo.svg.png"
                                                            alt="" class="me-3"
                                                            style="height: 24px; width: 24px">Google Sign In </div>
                                                </button>
                                            </div>

                                            <input type="hidden" name="prefix" value="template-contactform-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>

            <!-- Works/Projects -->
            <div class="section m-0"
                style="background: url('{{ asset('images/5.jpg') }}') no-repeat center center; background-size: cover;padding: 80px 0;">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <div class="badge rounded-pill badge-default">Download Robot</div>
                        <h3 class="nott ls0 mb-md-2 mb-3">Download Robot Bimasakti 2022</h3>
                        <p class="text-center mb-5">Tanpa banyak syarat, silahkan langsung download Robot (EA) nya di bawah
                            ini. <br> Broker jenis ini
                            menyalurkan order kliennya ke penyedia likuiditas (likuiditor) yang mempunyai akses ke pasar
                            antar bank</p>
                    </div>
                    <div class="row justify-content-around mt-5">
                        <div class="col-lg-3 col-md-4">
                            <img src="https://financiafx.co/assets/media/illustrations/presentation.png" alt=""
                                class=" img-sect-donlot">
                            <div class="d-flex justify-content-center mb-md-0 mb-5">
                                <a href="" class=" button button-rounded nott btn-green">
                                    Download Here
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4">
                            <img src="https://financiafx.co/assets/media/illustrations/banking.png" alt=""
                                class=" img-sect-donlot">
                            <div class="d-flex justify-content-center mb-md-0 mb-5">
                                <a href="" class=" button button-rounded nott btn-blue">
                                    Buka Akun Trading Disini
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-4">
                            <img src="https://financiafx.co/assets/media/illustrations/support.png" alt=""
                                class=" img-sect-donlot">
                            <div class="d-flex justify-content-center mb-md-0 mb-5">
                                <a href="" class=" button button-rounded nott btn-pink">
                                    Dapatkan Lisensi Disini
                                </a>
                            </div>

                        </div>
                    </div>
                    {{-- <div id="portfolio" class="portfolio row grid-container gutter-20">

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/1.jpg" alt="The Atmosphere">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">The Atmosphere</a></h3>
                                    <span>Digital Marketing</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/2.jpg" alt="Wavelength Structure">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Wavelength Structure</h3>
                                    <span>SEO</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/3.jpg" alt="Greenhouse Garden">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Simplicity Pages</h3>
                                    <span>Analytics</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/4.jpg" alt="Industrial Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>SEO Analysis</h3>
                                    <span>SEO</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/5.jpg" alt="Corporate Headquarters">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Marketing Strategy</h3>
                                    <span>Digital Marketing</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/6.jpg" alt="Space Station">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                            data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                    class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Space Station</h3>
                                    <span>Social Media</span>
                                </div>
                            </div>
                        </article>

                    </div> --}}

                    {{-- <div class="center">
                        <a href="demo-seo-about.html"
                            class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View All
                            Works</a>
                    </div> --}}

                </div>
            </div>

            <!-- Features-->
            {{-- <div class="container clearfix py-5">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/research.svg" alt="Feature Icon"
                                        class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">1. Planning &amp; Research</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore,
                                    voluptates!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/optimizing.svg" alt="Feature Icon"
                                        class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">2. Optimizing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/result.svg" alt="Feature Icon"
                                        class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">3. Result</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Testimonials-->
            <div class="section mt-0 mb-0"
                style="background: url('demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <div class="badge rounded-pill badge-default">Transaksi</div>
                        <h3 class="nott ls0">Rekap Transaksi Robot Bimasakti-2022</h3>
                    </div>

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><iframe src="https://financiafx.co/trx/statement.htm"
                                    style="height:500px;width:100%;" title="Bukti Transaksi"></iframe></div>
                            <div class="swiper-slide"><iframe src="https://financiafx.co/trx/statement.htm"
                                    style="height:500px;width:100%;" title="Bukti Transaksi"></iframe></div>
                            <div class="swiper-slide"><iframe src="https://financiafx.co/trx/statement.htm"
                                    style="height:500px;width:100%;" title="Bukti Transaksi"></iframe></div>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    {{-- <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0"
                        data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1"
                        data-items-md="2" data-items-xl="3">

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/1.jpg"
                                            alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam
                                        quibusdam cum libero illo rerum repellendus!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/2.jpg"
                                            alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                        obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/3.jpg"
                                            alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                        obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/4.jpg"
                                            alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                        obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Mary Jane
                                        <span>Google Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/5.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                        obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Blogs -->
            {{-- <div class="container py-4">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Latest Articles</div>
                    <h3 class="nott ls0">Recently From the Blog</h3>
                </div>

                <div class="row mt-5 clearfix">
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/1.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">Top Most SEO Optizied Websites</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive
                                    technology through pariatur quibusdam veritatis quisquam. Efficiently
                                    communicate alternative.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/2.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Interactively predominate progressive technology through distinctive materials.
                                    Progressively benchmark extensible intellectual. Exercitationem progressive
                                    technology through pariatur.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/3.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Globally synergize premium metrics with holistic e-markets. Professionally morph
                                    interoperable networks vis-a-vis value-added methods.</p>
                            </div>
                        </article>
                    </div>
                </div>

            </div> --}}

            <!-- Promo/Contact-->
            {{-- <div class="section mt-5 footer-stick promo-section bg-transparent"
                style="padding: 100px 0; overflow: visible">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <h5 class="text-uppercase ls1 mb-1">Grab your Free Trail and Explore the Options</h5>
                        <h2 class="nott ls0">Try Keyword Search 30 Days Free With Canvas<span>SEO</span></h2>
                        <a href="demo-seo-contact.html"
                            class="button button-large button-rounded nott ms-0 ls0 mt-4">Contact Us Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection

@section('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        $('.btn-regis').click(function() {
            $('html, body').animate({
                scrollTop: ($("#section-register").offset().top) - 20
            }, 2000);
        });
        $('.btn-benefit').click(function() {
            $('html, body').animate({
                scrollTop: ($("#section-benefit").offset().top) - 30
            }, 2000);
        });
    </script>
@endsection
