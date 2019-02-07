<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
/*Start Global Rules

* {
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0px;
    margin: 0px
}
*/

a {
    text-decoration: none;
    display: block
}

a:hover {
    text-decoration: none;
    -o-transition: 0.5ms all;
    -moz-transition: 0.5ms all;
    -webkit-transition: 0.5ms all;
    transition: 0.5ms all
}

.lang {
    text-decoration: underline !important;
    cursor: pointer;
    color: #00F !important;
    width: max-content
}

button:hover {
    background-color: blue !important;
    cursor: pointer
}

body {
    font-family: 'Open Sans', sans-serif;
    color: #929292
}

section {
    padding: 100px 0
}


/*End Global Rules*/


/*Header*/

.navbar-brand {
    color: #000
}

.home {
    background-image: url({{ asset('svg') }}/startipwalpaper3.jpg);
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    background-size: cover;
    text-align: center;
    height: -webkit-fill-available
}

.home .home-info {
    position: absolute;
    top: auto;
    bottom: 17%;
    left: 31%
}

.home .home-info h1 {
    text-transform: capitalize
}

.home .home-info a {
    text-transform: uppercase;
    width: 138px;
    height: 43px
}


/*Header*/


/*Sections*/

.section-heading {
    font-size: 40px;
    margin-top: 0;
    margin-bottom: 15px;
}

.section-subheading {
    font-size: 16px;
    font-weight: 400;
    font-style: italic;
    margin-bottom: 75px;
    text-transform: none;
    font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}


/*Sections*/


/*Portofolio*/

.portofolio-img {
    max-width: 100%;
    height: 20%;
}


/*Portofolio*/


/*Services*/


/*Services*/


/*About us*/

.about-us-title {}

.about-us-subtitle {}


/*About us*/


/*Team*/

.team-member {
    margin-bottom: 50px;
    text-align: center
}

.team-member img {
    width: 225px;
    height: 225px;
    border: 7px solid #fff
}

.team-member h4 {
    margin-top: 25px;
    margin-bottom: 0;
    text-transform: none
}

.team-member p {
    margin-top: 0
}

ul.social-buttons {
    margin-bottom: 0
}

ul.social-buttons li a {
    font-size: 20px;
    line-height: 50px;
    display: block;
    width: 50px;
    height: 50px;
    -webkit-transition: all .3s;
    transition: all .3s;
    color: #fff;
    border-radius: 100%;
    outline: 0;
    background-color: #212529
}

ul.social-buttons li a i {
    line-height: 50px
}

ul.social-buttons li a:hover {
    background-color: #fed136
}


/* Team */


/*Contact us*/

section#contact {
    background-color: #212529;
    background-image: url({{ asset('svg') }}/contactus/map-image.png);
    background-repeat: no-repeat;
    background-position: center;
}

section#contact .section-heading {
    color: #fff;
}

section#contact .form-group {
    margin-bottom: 25px;
}

section#contact .form-group input.form-control {
    height: auto;
}

section#contact .form-group input,
section#contact .form-group textarea {
    padding: 20px;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.contactus-btn {
    background-color: #fed136;
    border-color: #fed136 !important
}

.contactus-btn:hover {
    background-color: #fed336d5 !important;
}


/*Contact us*/


/*Footer*/

footer {
    padding: 25px 0;
    text-align: center;
}

footer span.copyright {
    font-size: 90%;
    line-height: 40px;
    text-transform: none;
    font-family: Montserrat, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

footer ul.quicklinks {
    font-size: 90%;
    line-height: 40px;
    margin-bottom: 0;
    text-transform: none;
    font-family: Montserrat, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}


/*Footer*/


/*Modales*/

.portfolio-modal {
    padding-right: 0!important;
}

.portfolio-modal .modal-dialog {
    margin: 1rem;
    max-width: 100vw;
}

.portfolio-modal .modal-content {
    padding: 100px 0;
    text-align: center;
}

.portfolio-modal .close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 75px;
    height: 75px;
    cursor: pointer;
    background-color: transparent;
}

.portfolio-modal .close-modal .lr {
    z-index: 1051;
    width: 1px;
    height: 75px;
    margin-left: 35px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    background-color: #212529;
}

.portfolio-modal .close-modal .lr .rl {
    z-index: 1052;
    width: 1px;
    height: 75px;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    background-color: #212529;
}

.portfolio-modal .modal-content h2 {
    font-size: 3em;
    margin-bottom: 15px;
}

.portfolio-modal .modal-content p.item-intro {
    font-size: 16px;
    font-style: italic;
    margin: 20px 0 30px;
    font-family: 'Droid Serif', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
}

.portfolio-modal .modal-content p {
    margin-bottom: 30px;
}

.portfolio-modal .modal-content img {
    margin-bottom: 30px;
}

.portfolio-modal .modal-content p {
    margin-bottom: 30px;
}

.portfolio-modal .modal-content ul.list-inline {
    margin-top: 0;
    margin-bottom: 30px;
}


/*Modales*/
</style>

<title>منصه رياده الاعمال</title>

<body style="direction:rtl" data-spy="scroll" data-target=".nav">
    <!--APP-->

    <!--HEADER-->
    <header>
        <!--NAVBAR-->

        <ul class="nav   fixed-top  nav-tabs justify-content-center">
            <!--LOGO-->
            <a class="navbar-brand ml-2 mr-2" href="#"> <img src="{{ asset('svg') }}/logo3.png" width="30" height="30" alt="not found"> منصه رياده الاعمال
            </a>
            <!--/LOGO-->
            <!-- NAV-ITEMS -->
            <li class="nav-item">
                <a class="nav-link active" href="#home">الرئيسيه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio"> اعمال سابقه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">الخدمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pricing"> الاسعار </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus"> عنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team">الفريق</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"> اتصل بنا</a>
            </li>
            <!-- /NAV-ITEMS -->
        </ul>
        <div class="lang fixed-top">
            <a class="nav-link" href="http://127.0.0.1:8000/output">English </a>
        </div>
        <!--/NAVBAR-->
        <!--HOME-->
        <div class="home" id="home">
            <div class="home-info">
                <h1 class="mb-5">منصتنا هي الحل الافضل</h1>
                <a class="btn btn-primary" href="#pricing" role="button">ابدء الان</a>

            </div>
        </div>
        <!--/HOME-->
    </header>
    <!--/HEADER-->
    <!--PORTOFOLIO-->
    <section id="portfolio">
        <div class="container">
            <div class="row m-2">
                <div class="col-lg-12 text-center mt-3">
                    <h2 class="section-heading text-uppercase">الاعمال السابقه</h2>
                    <h3 class="section-subheading text-muted"> الاعمال السابقه التي قامت شركتنا بها</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/01-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ملابس</h4>
                        <p class="text-muted">موقع للملابي</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/02-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>اكتشف</h4>
                        <p class="text-muted"> تصميم الجرافيك</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/03-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>انهي</h4>
                        <p class="text-muted">الهوية</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/04-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>خطوط</h4>
                        <p class="text-muted">مركات</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/05-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>الجنوب الغربي</h4>
                        <p class="text-muted">تصميم مواقع</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/06-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>النافذه</h4>
                        <p class="text-muted">الفوتوغرفيا</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/PORTOFOLIO-->

    <!--SERVICES-->
    <section class="services" id="services">
        <div class="container">
            <div class="row m-2">
                <div class="col-lg-12 text-center mt-3">
                    <div class="services-title m-3">
                        <h2 class="section-heading text-uppercase">الخدمات الافضل لك</h2>
                        <h3 class="section-subheading text-muted">نسع لتوفير افضل الخدمات</h3>
                    </div>
                    <div class="row m-5">
                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon1.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>الخدمه الاوله</h4>
                            <p>نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما</p>
                            <button type="button" data-toggle="modal" data-target="#modalService1" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon2.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>الخدمه الثانيه</h4>
                            <p>نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما </p>
                            <button type="button" data-toggle="modal" data-target="#modalService2" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon3.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>الخدمه الثالثه</h4>
                            <p>نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما</p>
                            <button type="button" data-toggle="modal" data-target="#modalService3" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon4.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>الخدمه الرابعه</h4>
                            <p>نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما نسع لتوفير افضل الخدما</p>
                            <button type="button" data-toggle="modal" data-target="#modalService4" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--SERVICES BOX-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/SERVICES-->

    <!--PRICING PLAN-->
    <section class="section pricing-plan" id="pricing">
        <div class="inner">
            <div class="container">
                <!--Optional paragraths for users-->
                <h1 class="section-heading text-capitalize text-center">اختر خطه الاسعار الافضل</h1>

                <p class="lead mb-4 text-center"></p>
                <!-- Plans -->
                <!--Pricing Card-->
                <div class="card-deck">
                    <article class="plan-item card">
                        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                        <header class="card-header package-header">
                            <h3>المجتمع</h3>
                            <div class="price">$25<span>/الشهر</span></div>
                        </header>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">25 Gb سرعه المساحه</li>
                            <li class="list-group-item">25 Gb سرعه المساحه</li>
                            <li class="list-group-item">24/7 خدمه العملاء</li>
                            <li class="list-group-item">التسويق للمشاريع</li>
                            <li class="list-group-item"><del>25مشاريع متاح</del></li>
                            <li class="list-group-item"><del>55 Gb  سرعه المساح</del></li>
                        </ul>
                    </article>
                    <!--/Pricing Card-->

                    <!--Pricing Card-->
                    <article class="plan-item card text-white bg-secondary">
                        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                        <header class="package-header card-header">
                            <h3>البدايه</h3>
                            <div class="price">$50<span>/شهر</span></div>
                        </header>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-secondary">25 Gb سرعه المساحه</li>
                            <li class="list-group-item text-white bg-secondary">50 Gb سرعه المساحه</li>
                            <li class="list-group-item text-white bg-secondary">24/7 خدمه العملاء</li>
                            <li class="list-group-item text-white bg-secondary">التسويق للمشاريع </li>
                            <li class="list-group-item text-white bg-secondary">25مشاريع متاح</li>
                            <li class="list-group-item text-white bg-secondary">50 Gb سرعه المساحه</li>
                        </ul>
                    </article>
                    <!--Pricing Card-->
                    <!--Pricing Card-->
                    <article class="plan-item card">
                        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                        <header class="package-header card-header">
                            <h3>ENTERPRISE</h3>
                            <div class="price">$99<span>/month</span></div>
                        </header>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">100 سرعه المساحه</li>
                            <li class="list-group-item">1000 Gb سرعه المساحه</li>
                            <li class="list-group-item">24/7 سرعه المساحه</li>
                            <li class="list-group-item"> سرعه المساحه</li>
                            <li class="list-group-item"> سرعه المساحه</li>
                            <li class="list-group-item"> سرعه المساحه</li>
                        </ul>
                        <!--/Pricing Card-->
                    </article>
                </div>
                <!-- /Plans -->
            </div>
        </div>
    </section>

    <!--/PRICING PLAN-->

    <!--ABOUT US-->
    <section class="about-us" id="aboutus">
        <div class="container">
            <div class="row m-2">
                <div class="col-lg-12 text-center mt-3">
                    <div>
                        <h1 class="about-us-title text-uppercase m-3">اعرف اكثر عنا</h1>
                        <h3 class="about-us-subtitle text-muted">--مهمتنا--</h3>
                    </div>
                    <p>
                        وهي مشروع يهدف لدعم المبرمجين والشركاء لإطلاق مشروعاتهم المستقلة من خلال توفير التدريب لهم علي ريادة الأعمال وتقديم الدعم والمساعدة الفنية والتغطية القانونية والدعم المادي بحد اقصي 300 الف جنية مصري لتنفيذ المشروع أو الفكرة مقابل نسبة صغيرة من ملكية هذا
                        المشروع لا تتعدي 20 % من قيمة الاسهم الخاصة به .
                    </p>

                </div>
            </div>
    </section>
    <!--/ABOUT US-->

    <!--OUR TEAM-->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">فريق عملنا</h2>
                    <h3 class="section-subheading text-muted">فريق عملنا هو مجموعه من المختصين</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('svg') }}/team/1.jpg" alt="team">
                        <h4>احمد يوسف</h4>
                        <p class="text-muted">قائد فريق التصميم</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('svg') }}/team/2.jpg" alt="team">
                        <h4>احمد مصطفي</h4>
                        <p class="text-muted">قائد فريق التسويق</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('svg') }}/team/3.jpg" alt="team">
                        <h4>دينا يوسف</h4>
                        <p class="text-muted">قائده قريق التطوير</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة</p>
                </div>
            </div>
        </div>
    </section>
    <!--/OUR TEAM-->

    <!--CONTACT US-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">اتصل بنا</h2>
                    <h3 class="section-subheading text-muted">فريق المبيعات سيتواصل معك في اقرب فتره ممكنه</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="اسمك *" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="البريد الاكتروني *" required="required" data-validation-required-message="Please enter your email adds.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="الهاتف *" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="رسالتك *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn contactus-btn btn-xl text-uppercase" type="submit">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/CONTACT US-->

    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">حقوق الملكيه © Yehia Tarek </span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">حقوق الملكيه</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">شروط الاستخدام</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/FOOTER-->

    <!--Start Modals-->

    <!--Potfolio Modals-->
    <!--Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/01-full.jpg" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:رجل اعمال</li>
                                    <li>الفيئه : عميل</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 1-->


    <!--Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/02-full.jpg" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:رجل اعمال</li>
                                    <li>الفيئه:مصمم جرافيك</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                       اغلق المشرع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 2-->

    <!--Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/03-full.jpg" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل: مهندس</li>
                                    <li>الفيئه: تطوير</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 3-->

    <!--Modal 4-->

    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/04-full.jpg" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:خطوط</li>
                                    <li>الفيئه:مركات</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 4-->


    <!--Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/05-full.jpg" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 5-->


    <!--Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم المشروع</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/06-full.jpg" alt="">
                                <p>Uفكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 6-->
    <!--/Potfolio Modals-->

    <!--Services Modals-->
    <!--Modal 1-->
    <div class="portfolio-modal modal fade" id="modalService1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم الخدمه</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon1.png" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:رجل اعمال</li>
                                    <li>الفيئه : عميل</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 1-->


    <!--Modal 2-->
    <div class="portfolio-modal modal fade" id="modalService2" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم الخدمه</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon2.png" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:رجل اعمال</li>
                                    <li>الفيئه:مصمم جرافيك</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 2-->

    <!--Modal 3-->
    <div class="portfolio-modal modal fade" id="modalService3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم الخدمه</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon3.png" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل: مهندس</li>
                                    <li>الفيئه: تطوير</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 3-->

    <!--Modal 4-->
    <div class="portfolio-modal modal fade" id="modalService4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">اسم الخدمه</h2>
                                <p class="item-intro text-muted">فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon4.png" alt="">
                                <p>فكرة المشروع والشركة قائمة علي تدريب وتأهيل الكوادر البشرية بشكل احترافي لتكون قادرة علي تنفيذ المشروعات بشكل منفرد علي منصة العمل الحر الخاصة بالشركة ،</p>
                                <ul class="list-inline">
                                    <li>التاريخ: يناير 2017</li>
                                    <li>العميل:خطوط</li>
                                    <li>الفيئه:مركات</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                         اغلق الشروع</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Modal 4-->
    <!--/Services Modals-->

    <!--End Modals-->



    <!--/APP-->





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>