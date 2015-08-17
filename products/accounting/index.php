<?php
include '../../php/config.php';
$site = new site();
$site->head("Accounting");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header-green">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/complete-accounting.png">
                <span>Complete Accounting Solution</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Enhanced Accounting Workflows To Win Over Your Accounting Team</div>
        <p class="lead">Accounting objectives, reconciliation, and the need for reports may not have changed over the year, but that doesn’t mean these processes can’t be improved.  ResMan’s accounting workflows and ease of use are setting a new standard in accounting software.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Accounting Your Way</h2>
                <p>Software should enhance your business, not dictate it. ResMan allows for simultaneous cash &#038; accrual accounting options, as well as multiple chart of accounts.</p>
            </div>
            <div class="col-md-4">
                <h2>Productivity</h2>
                <p>Productivity can be the difference between profit and loss.  ResMan users can work in multiple periods, allowing the site level to work in the current month while accounting completes month-end close.</p>
            </div>
            <div class="col-md-4">
                <h2>Budgeting &#038; Forecasting</h2>
                <p>ResMan delivers a collaborative budgeting tool that is completely integrated with core financials to drive strategy, planning and execution.</p>
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
                <img class="img-responsive" src="../../img/products/within-3-clicks.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content phone">
                    <h2>All Within 3 Clicks</h2>
                    <p class="lead">ResMan was designed with your workload in mind.  We have made it easy to go from high-level summary data down to transactional details in as few as 3 clicks. You can work across multiple tabs and in multiple modules without having to close out or lose data.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/automation.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Accounting Automation For the Win</h2>
                    <p>Automating accounting processes improves efficiency, reduces workloads, and enables checks and balances. The ability to automate late fee schedules, month-to-month fees, and schedule budgeted rental increases have a direct impact on your bottom line.</p>
                    <p>Automate lease term fees and processing to ensure compliance on the front line.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/accounts-payable.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Accounts Payable</h2>
                    <p class="lead">You can manage expenses with ResMan’s sophisticated Accounts Payable Module. Easily split purchase orders and invoices between multiple assets.  Drag and drop your scanned invoice copies into the actual invoice record. Set permission limits for puchase orders and invoices and automate approval processes to ensure compliance.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/reports') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Robust Reporting</h2>
            <p class="lead white">
                Analyze Data with Industry Specific Reports for your entire team.
            </p>
            <a href="<?php echo $site->baseUrl('products/reports') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/receivables') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Manage Receivables</h2>
            <p class="lead white">Enable your team to improve cash flow in no time.</p>
            <a href="<?php echo $site->baseUrl('products/receivables') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
