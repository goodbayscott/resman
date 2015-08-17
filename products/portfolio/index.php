<?php
include '../../php/config.php';
$site = new site();
$site->head("Portfolio Views");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/portfolio-views.png">
                <span>Portfolio Views</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Business Intelligence at your fingertips.</div>
        <p class="lead">Your time is valuable. Keep things simple and increase your ROI. ResMan enables you to manage your business from beginning to end using one platform in real-time.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Real-time Metrics</h2>
                <p>Put your time and energy into the assets that need it and guarantee optimal performance.</p>
            </div>
            <div class="col-md-4">
                <h2>Meet Budget Goals</h2>
                <p>ResMan’s Boardroom Modules alert you to trouble areas that can negatively impact financials and allows time for redirection.</p>
            </div>
            <div class="col-md-4">
                <h2>Effective Team Management</h2>
                <p>Role-based boardroom modules ensure your team is on the same page while working towards cash flow goals.</p>
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
                <img class="img-responsive" src="../../img/products/sidebyside-comparison.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Side-by-side Comparison</h2>
                    <p class="lead">Your biggest challenge is time management. ResMan provides a side-by-side comparison of your assets, and this high-level summary and comparison data allows for effective time management. When you work smarter, goals are met and success is achieved.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/stop-explaining-onthe-fly.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Stop Explaining on the Fly</h2>
                    <p>Oftentimes executive leadership is informed too far after the fact on issues that negatively impact financials. Whether assets are owner or fee managed, financial performance is key to securing third-party management contracts.</p>
                    <p>ResMan’s Boardroom modules provide real-time data for overall property performance, including occupancy, leasing activity, renewal efforts, make-ready turns and work orders. Use these tools to stay ahead of the game and prevent negative financial performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/teamengagement.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content phone">
                    <h2>Ensure Team Engagement</h2>
                    <p class="lead">Property Management is chaotic and full of distractions.  As a property manager, the ability to immediately address issues with site-level team members ensures successful resolution. ResMan allows you to deal with asset performance problems even when you’re away from the office.  Don’t wait. It could be costing you money.</p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/resident-retention') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Resident Retention</h2>
            <p class="lead white">
                Manage Turnovers with ResMan and take back control of your assets.
            </p>
            <a href="<?php echo $site->baseUrl('products/resident-retention') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/reports') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Robust Reports</h2>
            <p class="lead white">Analyze data with industry-specific reports for your entire team.</p>
            <a href="<?php echo $site->baseUrl('products/reports') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
