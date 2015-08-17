<?php
include '../../php/config.php';
$site = new site();
$site->head("Process Receivables");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/receivables.png">
                <span>Process Receivables</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Enable Your Team to Improve Cash Flow</div>
        <p class="lead">With ResMan, you can easily stay focused on collecting receivables. Account balances are visible so that your entire team can work collections.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Working delinquents has never been easier</h2>
                <p>Lower your end-of-month delinquent balances. We don’t just meet industry standards—we beat them.</p>
            </div>
            <div class="col-md-4">
                <h2>Rent isn’t the only account worth collecting</h2>
                <p>Get the tools you need to put money from uncollected move out balances in the bank.</p>
            </div>
            <div class="col-md-4">
                <h2>Monitor Team Collection Efforts</h2>
                <p>See what needs to be done to reduce delinquent balances immediately—no need to wait for weekly reports.</p>
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
                <img class="img-responsive" src="../../img/products/receivables-1.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content phone">
                    <h2>Turn Delinquent Accounts Into Productive Units</h2>
                    <p class="lead">End-of-month delinquencies are reflective of the number of calls made, emails sent, and doors knocked on.  ResMan’s accounting and collection workflows make working delinquent accounts easier. We know firsthand how chaotic your work environment can be—after all, efficiency is essential to reduring delinquency.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 switch-right">
                <img class="img-responsive" src="../../img/products/receivables-2.jpg">
            </div>
            <div class="col-sm-6 switch-left">
                <div class="content computer">
                    <h2>Clear Communication</h2>
                    <p>Through our Resident Portal, maintain effective communication with residents and make managing account balances and ensuring retention easy. Your residents can view account balances and retrieve account statements within moments of logging in.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/receivables-3.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content tablet">
                    <h2>Manage Move Out Balances like never before</h2>
                    <p class="lead">Now you can automatically set up and track a payment plan for each former resident that still owes a balance. ResMan gives you a bird’s eye view of outstanding balances for both the entire property and individual resident. Don’t wait for collection reports from Third Party Collections. Track those account balances with ResMan.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/accounting') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Complete Accounting</h2>
            <p class="lead white">
                Enhanced Accounting Workflows To Win Over Your Accounting Team.
            </p>
            <a href="<?php echo $site->baseUrl('products/accounting') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/vendor-management') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Vendor Management</h2>
            <p class="lead white">Vendors play a key role in your success. We make it easy.</p>
            <a href="<?php echo $site->baseUrl('products/vendor-management') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
