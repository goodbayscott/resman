<?php
include '../../php/config.php';
$site = new site();
$site->head("Vendor Management");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/vendor-management.png">
                <span>Vendor Partner Management</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Vendors play a key role in your success. We make it easy.</div>
        <p class="lead">ResMan’s open API allows you to do business with the vendors that you choose. The peace of mind that comes from doing business with a familiar partner is priceless. Why should your property management software dictate who you should do business with?</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Partners For A Reason</h2>
                <p>A good relationship with vendors strengthens your company's overall performance. ResMan understands the value of this relationship and allows for efficient communication.</p>
            </div>
            <div class="col-md-4">
                <h2>Shared Vendors</h2>
                <p>Need to pay on behalf of separate assets but only have one bank account? No problem. We can do that! Use ResMan to set up a vendor for multiple properties.</p>
            </div>
            <div class="col-md-4">
                <h2>Reporting</h2>
                <p>Looking forward to the end of year search for overlooked W-9's? ResMan users stay ahead of the game with 1099 Verification Reports.</p>
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
                <img class="img-responsive" src="../../img/products/vendor-1.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Communication</h2>
                    <p class="lead">Don't let communication issues between you and your vendor lead to closed accounts. Use ResMan to improve communication! Mitigate suppliers risk and manage your supplier relationship to achieve the best value in every deal.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/vendor-2.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Streamline Vendor Workflow</h2>
                    <p>Consolidate and track all vendor data in one central online database that is accessible to your entire team. Save time, money and resources.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/vendor-3.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Vendor &#038; Expense Controls</h2>
                    <p class="lead">Set rules in ResMan to allow or restrict vendor activity. This guarantees vendor compliance and ensures that the spending limits you set are being followed.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/receivables') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Manage Receivables</h2>
            <p class="lead white">
                Enable your team to improve cash flow in no time.
            </p>
            <a href="<?php echo $site->baseUrl('products/receivables') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/revenue-tools') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Manage Ancillary Income</h2>
            <p class="lead white">Optimize your ancillary revenue generators and stop leaving money on the table.</p>
            <a href="<?php echo $site->baseUrl('products/revenue-tools') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
