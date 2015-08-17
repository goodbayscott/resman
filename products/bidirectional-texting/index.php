<?php
include '../../php/config.php';
$site = new site();
$site->head("Bi-directional Texting");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/product/texting.png">
                <span>Bi-directional Texting</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Communication Goes Both Ways</div>
        <p class="lead">ResMan's Bi-Directional Texting feature combines the convenience of modern technology with world-class customer service.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Real Time</h2>
                <p>Your customers don’t leave home with out their cell phones. Immediately share community updates and emergency alerts with your residents in real time.</p>
            </div>
            <div class="col-md-4">
                <h2>Customers Love It</h2>
                <p>SMS is a really simple and accessible way of engaging with your customers and with an open rate of 98%, it is heads and shoulders above any other communication method in terms of read rate.</p>
            </div>
            <div class="col-md-4">
                <h2>Cost-effective</h2>
                <p>Not only is an SMS campaign affordable for budgets of all shapes and sizes, but you’ll also see a healthy return on investment with improved collection efforts and on renewal capture rates.</p>
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
                <img class="img-responsive" src="../../img/products/texting-1.png">
            </div>
            <div class="col-sm-6">
                <div class="content" style="margin-top: 0px;">
                    <h2>Texting Made even Easier</h2>
                    <p class="lead">SMS is small and simple and gets the message across instantly without any messing around.  ResMan users can generate and receive text messages from with in ResMan in real time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/texting-2.png">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content phone">
                    <h2>Lead Generation</h2>
                    <p>Making your business mobile-friendly is no longer something you can afford to put off any longer.</p>
                    <p>Follow up with existing leads or reach back out to prospects from the prior months years in a quick and cost efficient way.   When they respond in real time your team can continue the conversation in real time.</p>
                    <p>Text messages can easily be forwarded from one person to another.  Take your  resident referrals to the next level with an SMS campaign.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/texting-1.png">
            </div>
            <div class="col-sm-6">
                <div class="content" style="margin-top: 0px;">
                    <h2>Foolproof Documentation</h2>
                    <p class="lead">Who has not fallen victim to service request or message jotted down on a missing sticky note?</p>
                    <p class="lead">Documentation is critical in property management, yet getting things noted on a communication log seems to be an ongoing problem.</p>
                    <p class="lead">SMS messages send out and responses received are automatically recorded in the residents communication log.</p>
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
