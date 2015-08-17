<?php
include 'php/config.php';
$site = new site();
$site->head("Property Management Software"); ?>

<div class="navy">
<section class="home">
    <div class="banner banner-homepage">

        <div class="clear-bgrd">
        <?php $site->nav() ?>
        </div>

        <div class="container">
                <div class="content">
                    <h1 class="white">
                        Property Management Software That Doesn’t Make You Angry.
                    </h1>
                    <p class="white lead">
                        Your goals are more important than our bottom line. Maybe that’s why everyone’s switching to ResMan.
                    </p>
                    <div class="btn-cta btn-cool right">
                        <a href="http://go.resmancloud.com/request-demo">
                          <span class="left title">TRY IT</span>
                          <span class="right icon">&rarr;<span class="slant-right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="trust hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <img src="img/trust/units.png" />
            </div>
            <div class="col-sm-2">
                <img src="img/trust/naa.png" />
            </div>
            <div class="col-sm-2">
                <img src="img/trust/taa.png" />
            </div>
            <div class="col-sm-2">
                <img src="img/trust/nmhc.png" />
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center green second-column">
                <h2>A Product That Walks Bigger Than It Talks.</h2>
                <p class="lead">
                    ResMan’s unique all-in-one intuitive platform puts all the tools you’re used to in a Property Management System at your fingertips within 3 clicks or less.
                </p>
            </div>

            <div class="col-sm-6">
                <div class="row">

                    <div class="col-sm-6 first-row">
                            <div id="carousel-one" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="products/lead-management/">
                                            <div class="orange box-1">
                                                <img class="img-responsive" src="img/product/marketing.png" alt="" />
                                                <h3><span>Marketing</span> & Leasing</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="products/accounting/">
                                            <div class="green box-1">
                                                <img class="img-responsive" src="img/product/accounting-suite.png" alt="" />
                                                <h3><span>Accounting</span> Suite</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 first-row hidden-xs">
                            <div id="carousel-two" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/bi-directional-texting-feature">
                                            <div class="blue box-2">
                                                <img class="img-responsive" src="img/product/texting.png" alt="" />
                                                <h3><span>Bi-directional</span> Texting</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://go.resmancloud.com/online-property-management-software">
                                            <div class="orange box-2">
                                                <img class="img-responsive" src="img/product/intuitive-software.png" alt="" />
                                                <h3><span>Intuitive</span> Software</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- 2ND COL, 1ST ROW, HIDDEN ABOVE 768PX -->
                    <div class="col-sm-6 second-row visible-xs">

                            <div id="carousel-two" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/bi-directional-texting-feature">
                                            <div class="blue box-2">
                                                <img class="img-responsive" src="img/product/texting.png" alt="" />
                                                <h3><span>Bi-directional</span> Texting</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://go.resmancloud.com/online-property-management-software">
                                            <div class="orange box-2">
                                                <img class="img-responsive" src="img/product/intuitive-software.png" alt="" />
                                                <h3><span>Intuitive</span> Software</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!-- END 2 COL 1 ROW -->

                </div>

                <!-- 2ND ROW, HIDDEN ABOVE 992PX -->
                <div class="row hidden-md hidden-lg">
                    <div class="col-sm-6 first-row">
                            <div id="carousel-three" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/resident-portal-feature">
                                            <div class="green box-3">
                                                <img class="img-responsive" src="img/product/community.png" alt="" />
                                                <h3><span>Community</span> Portal</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://go.resmancloud.com/operations-suite">
                                            <div class="blue box-3">
                                                <img class="img-responsive" src="img/product/operations-suite.png" alt="" />
                                                <h3><span>Operations</span> Suite</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-sm-6 first-row hidden-xs">
                            <div id="carousel-four" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/budgeting-forecasting-module">
                                            <div class="orange box-4">
                                                <img class="img-responsive" src="img/product/budgeting.png" alt="" />
                                                <h3><span>Budget</span> & Forecasting</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="products/portfolio/">
                                            <div class="green box-4">
                                                <img class="img-responsive" src="img/product/portfolio.png" alt="" />
                                                <h3><span>Porfolio</span> Management</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- 2ND COL, 2ND ROW, HIDDEN ABOVE 768PX -->
                    <div class="col-sm-6 second-row visible-xs">
                            <div id="carousel-four" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/budgeting-forecasting-module">
                                            <div class="orange box-4">
                                                <img class="img-responsive" src="img/product/budgeting.png" alt="" />
                                                <h3><span>Budget</span> & Forecasting</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="products/portfolio/">
                                            <div class="green box-4">
                                                <img class="img-responsive" src="img/product/portfolio.png" alt="" />
                                                <h3><span>Portfolio</span> Management</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- END 2 COL 2 ROW -->

                </div>

                <!-- 2ND ROW, HIDDEN BELOW 992PX -->
                <div class="row hidden-sm hidden-xs">

                    <div class="col-sm-4 second-row">
                            <div id="carousel-three" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/resident-portal-feature">
                                            <div class="green box-3">
                                                <img class="img-responsive" src="img/product/community.png" alt="" />
                                                <h3><span>Community</span> Portal</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://go.resmancloud.com/operations-suite">
                                            <div class="blue box-3">
                                                <img class="img-responsive" src="img/product/operations-suite.png" alt="" />
                                                <h3><span>Operations</span> Suite</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-4 second-row">
                            <div id="carousel-four" data-ride="carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <a href="http://go.resmancloud.com/budgeting-forecasting-module">
                                            <div class="blue box-4">
                                                <img class="img-responsive" src="img/product/budgeting.png" alt="" />
                                                <h3><span>Budget</span> & Forecasting</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="products/portfolio/">
                                            <div class="orange box-4">
                                                <img class="img-responsive" src="img/product/portfolio.png" alt="" />
                                                <h3><span>Portfolio</span> Management</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-4 second-row">

                        <div id="carousel-five" data-ride="carousel" class="carousel slide">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a href="http://go.resmancloud.com/open-api-feature">
                                        <div class="orange box-5">
                                            <img class="img-responsive" src="img/product/open-api.png" alt="" />
                                            <h3><span>Open</span>API</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="products/reports/">
                                        <div class="blue box-5">
                                            <img class="img-responsive" src="img/product/custom-reporting.png" alt="" />
                                            <h3><span>Custom</span> Reporting</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END HIDDEN BELOW 992PX -->

            </div>

        </div>
    </div>
</section>

<section class="customers">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 visible-xs hearts">
                <img class="img-responsive" src="img/hearts/heart-1.jpg">
            </div>
            <div class="col-sm-6 text-right">
                <div class="content">
                    <h2>In Our World, Service Comes First.</h2>
                    <p class="lead">
                        Maybe it’s our dedicated support team, or our friendly and comprehensive training, or even our bubbly personality.  Here at ResMan, customers are always happy.
                    </p>
                    <div class="btn-cta btn-cool right">
                        <a href="service/">
                          <span class="left title">LEARN MORE</span>
                          <span class="right icon">&rarr;<span class="slant-right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hearts hidden-xs">
                <div class="col-sm-12">
                    <img class="img-responsive" src="img/hearts/heart-1.jpg">
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="img/hearts/heart-2.jpg">
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="img/hearts/heart-3.jpg">
                </div>
                <!--div class="col-sm-6">
                    <img class="img-responsive" src="img/hearts/heart-4.jpg">
                </div-->
            </div>
        </div>
    </div>
</section>


<section class="onboarding">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-sm-offset-2">
                <img class="img-responsive" src="img/onboarding.png" />
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <div class="content">
                    <h2>Onboarding Made Easy</h2>
                    <p class="lead">
                        Whether you're just starting out or rounding on year 20, we've got you covered. No need to spend oodles of money on training you don't need.
                    </p>
                    <div class="btn-cta btn-cool right">
                        <a href="http://go.resmancloud.com/2015-onboarding-packages">
                          <span class="left title">LEARN MORE</span>
                          <span class="right icon">&rarr;<span class="slant-right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="curve">
</section>
</div> <!-- end Navy -->

<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
