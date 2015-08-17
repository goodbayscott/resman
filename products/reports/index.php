<?php
include '../../php/config.php';
$site = new site();
$site->head("Reports");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/powerful-reports.png">
                <span>Robust Reporting</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Analyze Data with Industry Specific Reports.</div>
        <p class="lead">You need to know how your business is doing. ResMan’s real time financial reports give you instant insight into the health of your business. What’s going right? What’s not? Available anywhere, these reports help you make informed decisions even while on the go.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Accounting &amp; Management Reporting</h2>
                <p>With our industry-specific reporting options, you can spend more time managing and less time generating reports.</p>
            </div>
            <div class="col-md-4">
                <h2>Reporting Tools that Accommodate Work Flow</h2>
                <p>Complicated accounting software only adds to your already congested workload. ResMan’s intuitive workflows set a new accounting standard. Ease of use and increased ROI, that’s our goal.</p>
            </div>
            <div class="col-md-4">
                <h2>Accuracy Counts</h2>
                <p>Reporting data that aligns with your business goals may be a given, however, what those reports indicate is equally important. Accuracy counts. Reports generated through ResMan are key to protecting and growing your investment.</p>
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
                <img class="img-responsive" src="../../img/products/reportsharing.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Report Sharing</h2>
                    <p class="lead">Save reports in a variety of file formats and email the data to team members or investors from directly within ResMan. As a bonus, these reports can convert to functional excel files. Export away!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/recurringbatch-reports.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Recurring Batch Reports</h2>
                    <p>Use ResMan to generate batch reports on a weekly, monthly, quarterly or annual basis.   Define individual report parameters based on your business needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
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
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/reports-4.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Custom Reporting</h2>
                    <p>In addition to the extensive industry reports available in ResMan, users quickly and efficiently create, print and publish custom financial reports.</p>
                    <p>ResMan’s Custom Report Tool also allows you to save reports and templates for future use.</p>
                    <p>Reports are subject to the same access and user rules as all other modules—so you only expose the reports to authorized users.</p>
                </div>
            </div>
        </div>
    </div>
</section>


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
