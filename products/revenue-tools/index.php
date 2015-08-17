<?php
include '../../php/config.php';
$site = new site();
$site->head("Ancillary Revenue Income");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/revenue-tools.png">
                <span>Manage Ancillary Income</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Optimize Your Ancillary Revenue Generators and Stop Leaving Money on the Table.  </div>
        <p class="lead"></p>

        <div class="row">
            <div class="col-md-4">
                <h2>Fee Automation</h2>
                <p>From time to time, fees set in place by management are not assessed appropriately to resident ledger. Avoid a loss of income with ResMan’s fee schedules.</p>
            </div>
            <div class="col-md-4">
                <h2>Utility Cost Recovery</h2>
                <p>Take advantage of ResMan's built-in allocation module or one of the tightly integrated utility billing providers. You're sure to see an impact on your NOI.</p>
            </div>
            <div class="col-md-4">
                <h2>Rentable Items</h2>
                <p>How many vacant garages or carports do you have and what are these vacancies costing you each month? ResMan's reports and workflows efficiently manage rentable items.</p>
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
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/revenue-1.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content tablet">
                    <h2>Administrative Settings</h2>
                    <p class="lead">When you use ResMan's Fee Schedules to define parameters for the collection of application, administrative, late and lease termination fees, you ensure that your front-line team is following policy.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/revenue-2.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Ratio Utility Billing Systems (RUBS)</h2>
                    <p>ResMan enables you to recapture utility costs by proportionately allocating these costs among residents. Users can calculate cost, generate statements, and track collection efforts in-house.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/revenue-3.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content phone">
                    <h2>Third-party Utility Integrations</h2>
                    <p class="lead">Looking to take utility billing to a higher level? ResMan has sophisticated integrations with leading Utility Billing Providers. Third party utility billing companies provide a variety of expertise and analytics. Put the responsibility of billing and collecting in their capable hands.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/vendor-management') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Vendor Management</h2>
            <p class="lead white">
                Vendors play a key role in your success. We make it easy.
            </p>
            <a href="<?php echo $site->baseUrl('products/vendor-management') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/lead-management') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Lead Management</h2>
            <p class="lead white">Set yourself apart from the competition and elevate your marketing to the next level.</p>
            <a href="<?php echo $site->baseUrl('products/lead-management') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
