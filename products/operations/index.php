<?php
include '../../php/config.php';
$site = new site();
$site->head("Operations");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/product/operations-suite.png">
                <span>Operations</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Time is Money. Shouldn't You Spend Yours Wisely?</div>
        <p class="lead">Whether you're operating one asset or multiple portfolios, ResMan BoardRoom modules will help you target where your efforts are needed most.</p>

        <div class="row">
            <div class="col-md-6">
                <h2>Enhance performance</h2>
                <p>In a competitive environment, you can't afford to react to performance issues after they impact the P&amp;L! Real-time KPIs reveal potential threats to financial performance for portfolios and/or individual assets.</p>
            </div>
            <div class="col-md-6">
                <h2>Improved Efficiency</h2>
                <p>Using ResMan’s BoardRoom modules and extensive automation options, area supervisors can set expectations and ensure that tasks are completed on schedule.</p>
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
                <img class="img-responsive" src="../../img/products/operations-1.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content" style="margin-top: 0px;">
                    <h2>Operations Made Easy</h2>
                    <p class="lead">ResMan works they way you do—that’s why with one login users can dive into KPIs for each positon and each department.  When potential threats to performance are identified early on, the financial impact is reduced—if not eliminated.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/operations-2.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content" style="margin-top: 30px;">
                    <h2>See What Counts When You Need To</h2>
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
