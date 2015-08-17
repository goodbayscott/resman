<?php
include '../../php/config.php';
$site = new site();
$site->head("123 Click");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/product/intuitive-software.png">
                <span>Intuitive Software</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Simple, Yet Sophisticated Software Is Possible</div>
        <p class="lead">Break the dependency on overcomplicated, hard-to-use software that frustrates your employees.</p>

        <div class="row">
            <div class="col-md-6">
                <h2>The Basics Haven't Changed</h2>
                <p>Tracking residents, processing receivables, processing payables and reconciling balance sheets are basic processes in residential property management.</p>
                <p>ResMan property management software makes these processes seamless with as few as 1 to 3 clicks.</p>
            </div>
            <div class="col-md-6">
                <h2>Intuitive Design</h2>
                <p>Designed with each users role in mind, the ResMan interface makes sense.</p>
                <p>Even team members who are still fighting the technological revolution will find ResMan easy to navigate, ensuring productivity.</p>
            </div>
        </div>

        <div class="divider"></div>

    </div>
</section>

<!-- ~~~~~~ SUBFEATURES ~~~~~~ -->
<section class="product-features">
    <div class="container">
        <div class="title text-center">Features</div>

        <div class="row flip">
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/123click-1.png">
            </div>
            <div class="col-sm-6">
                <div class="content" style="margin-top: 50px;">
                    <h2>Software That Doesn’t Slow You Down</h2>
                    <p class="lead">Anyone can make software—however making a simple, easy-to-use solution that meets sophisticated accounting and operational needs, well, that something only ResMan can do.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/123click-2.png">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content" style="margin-top: 30px;">
                    <h2>123-Click Architecture</h2>
                    <p class="lead">Click 1 - High Level Summary<br />
                    Click 2 - Summary Details<br />
                    Click 3 - Transactional Detail</p>
                    <p class="lead">Robust calculations and functionality by the ResMan platform along with simplified workflow and navigation will free up time for your associates to spend time where it is needed.</p>
                    <ul class="lead">
                        <li>Occupancy Projections</li>
                        <li>Collections Efforts</li>
                        <li>Identify Open Accounting Period(s)</li>
                        <li>Track Late Fee Assessment</li>
                        <li>Automate Annual Inspections</li>
                        <li>Monitor Mass Communication</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/historicalreporting.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content phone">
                    <h2>Historical Reporting</h2>
                    <p class="lead">ResMan reports can be run by period or date range, allowing for the elusive Historical Rent Roll.</p>
                </div>
            </div>
        </div>

    </div>
</section-->


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<!--section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/portfolio') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Portfolio Views</h2>
            <p class="lead white">
                Business Intelligence at your finger tips without even trying.
            </p>
            <a href="<?php echo $site->baseUrl('products/portfolio') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/accounting') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Complete Accounting</h2>
            <p class="lead white">Enhanced accounting workflows to win over your accounting team.</p>
            <a href="<?php echo $site->baseUrl('products/accounting') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section-->


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
