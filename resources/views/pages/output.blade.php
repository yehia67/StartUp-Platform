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
  <title>Startup Platform</title>

<body data-spy="scroll" data-target=".nav">
    <!--APP-->

    <!--HEADER-->
    <header>
        <!--NAVBAR-->

        <ul class="nav   fixed-top  nav-tabs justify-content-center">

            <!--LOGO-->
            <a class="navbar-brand" href="#"> <img src="{{ asset('svg') }}/logo3.png" width="30" height="30" alt="not found">Startup Platform
            </a>
            <!--/LOGO-->
            <!-- NAV-ITEMS -->
            <li class="nav-item">
                <a class="nav-link active" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portofolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact US</a>
            </li>
            <li class="nav-item">
                <!-- /NAV-ITEMS -->
        </ul>
        <div class="lang fixed-top text-right">
            <a class="nav-link" href="http://127.0.0.1:8000/outputAr">اللغه العربيه </a>
        </div>


        <!--/NAVBAR-->
        <!--HOME-->
        <div class="home" id="home">
            <div class="home-info">
                <h1 class="mb-5">our start-Up for perfect Solutions</h1>
                <a class="btn btn-primary" href="#pricing" role="button">GET START</a>

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
                    <h2 class="section-heading text-uppercase">portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/01-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Threads</h4>
                        <p class="text-muted">Illustration</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/02-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Explore</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/03-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Finish</h4>
                        <p class="text-muted">Identity</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/04-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Lines</h4>
                        <p class="text-muted">Branding</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/05-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Southwest</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item mb-2">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">

                        <img class="portofolio-img" src="{{ asset('svg') }}/portfolio/06-full.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Window</h4>
                        <p class="text-muted">Photography</p>
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
                        <h2 class="section-heading text-uppercase">the best services for you!</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur</h3>
                    </div>
                    <div class="row m-5">
                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon1.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>Service One</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio maxime vitae quae!</p>
                            <button type="button" data-toggle="modal" data-target="#modalService1" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon2.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>Service Two</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio maxime vitae quae!</p>
                            <button type="button" data-toggle="modal" data-target="#modalService2" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon3.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>Service Three</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio maxime vitae quae!</p>
                            <button type="button" data-toggle="modal" data-target="#modalService3" class="text-uppercase btn btn-info">find out more</button>
                        </div>
                        <!--/SERVICES BOX-->

                        <!--SERVICES BOX-->
                        <div class="col-sm-12 col-md-3 p-3">
                            <div class="service-icon">
                                <img src="{{ asset('svg') }}/Services/service-icon4.png" alt="Image" class="img-fluid">
                            </div>
                            <h4>Service Four</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio maxime vitae quae!</p>
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
                <h1 class="section-heading text-capitalize text-center">pick up the perfect plan</h1>

                <p class="lead mb-4 text-center"></p>
                <!-- Plans -->
                <!--Pricing Card-->
                <div class="card-deck">
                    <article class="plan-item card">
                        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                        <header class="card-header package-header">
                            <h3>COMMUNITY</h3>
                            <div class="price">$25<span>/month</span></div>
                        </header>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">5 projects included</li>
                            <li class="list-group-item">25 Gb fast storage</li>
                            <li class="list-group-item">24/7 customer support</li>
                            <li class="list-group-item">Promotion projects</li>
                            <li class="list-group-item"><del>25 projects included</del></li>
                            <li class="list-group-item"><del>50 Gb fast storage</del></li>
                        </ul>
                    </article>
                    <!--/Pricing Card-->

                    <!--Pricing Card-->
                    <article class="plan-item card text-white bg-secondary">
                        <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                        <header class="package-header card-header">
                            <h3>STARTER</h3>
                            <div class="price">$50<span>/month</span></div>
                        </header>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-secondary">25 projects included</li>
                            <li class="list-group-item text-white bg-secondary">50 Gb fast storage</li>
                            <li class="list-group-item text-white bg-secondary">24/7 customer support</li>
                            <li class="list-group-item text-white bg-secondary">Promotion projects</li>
                            <li class="list-group-item text-white bg-secondary">25 projects included</li>
                            <li class="list-group-item text-white bg-secondary">50 Gb fast storage</li>
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
                            <li class="list-group-item">100 projects included</li>
                            <li class="list-group-item">1000 Gb fast storage</li>
                            <li class="list-group-item">24/7 customer support</li>
                            <li class="list-group-item">Promotion projects</li>
                            <li class="list-group-item">25 projects included</li>
                            <li class="list-group-item">50 Gb fast storage</li>
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
                        <h1 class="about-us-title text-uppercase m-3">about us</h1>
                        <h3 class="about-us-subtitle text-muted">--Our Mission--</h3>
                    </div>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur officia, numquam et reiciendis rem quas quasi obcaecati impedit vel eaque enim totam debitis perspiciatis sed laborum harum, eligendi laboriosam aliquam. Lorem ipsum dolor, sit amet consectetur
                        adipisicing elit. Culpa, debitis. Numquam adipisci quaerat similique assumenda, vel corrupti possimus cupiditate corporis? Aliquam accusantium sapiente, voluptatem repellat fugiat reiciendis dolorum commodi! Odio. Lorem ipsum dolor
                        sit, amet consectetur adipisicing elit. Accusantium, impedit beatae! Rerum quae velit explicabo ea? Repellendus recusandae labore fugit quas sit, porro, eaque atque cupiditate molestiae maiores fuga est.
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
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('svg') }}/team/1.jpg" alt="team">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
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
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
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
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
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
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
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
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn contactus-btn btn-xl text-uppercase" type="submit">Send Message</button>
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
                    <span class="copyright">Copyright © Yehia Tarek </span>
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
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/01-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/02-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/03-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/04-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/05-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/portfolio/06-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Service Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon1.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Service Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon2.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Service Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon3.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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
                                <h2 class="text-uppercase">Service Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('svg') }}/Services/service-icon4.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate,
                                    maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fas fa-times"></i>
                          Close Project</button>
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