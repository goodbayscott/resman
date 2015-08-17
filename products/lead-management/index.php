<?php
include '../../php/config.php';
$site = new site();
$site->head("Residential Lead Management");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/lead-management.png">
                <span>Lead Management</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Elevate Your Marketing to the Next Level.</div>
        <p class="lead"></p>

        <div class="row">
            <div class="col-md-4">
                <h2>More Bang for the Buck</h2>
                <p>Managing customers is an integral part of property management that begins with the first contact. ResMan incorporates the tools necessary for lead management as part of the base price.</p>
            </div>
            <div class="col-md-4">
                <h2>Ease of Use for You and Your Customer</h2>
                <p>ResMan’s ease of use goes beyond the user’s interface. The online leasing portal and community portal was designed to be user friendly.</p>
            </div>
            <div class="col-md-4">
                <h2>Go Green, Save Paper</h2>
                <p>ResMan’s online access allows members of your organization to effortlessly share data and digital files. ResMan’s document management eliminates the need for bulky file folders and file cabinets.</p>
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
                <img class="img-responsive" src="../../img/products/lead-mgmt-1.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Maximize Your Marketing ROI</h2>
                    <p class="lead">Your online content is the digital face of your company and community. Manage your online marketing within ResMan.</p>
                    <p>ResMan allows users to automatically update and feed marketing content into online ILS partners. This ensures that all online content is updated with current community specific information and pricing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 switch-right">
                <img class="img-responsive" src="../../img/products/lead-mgmt-2.jpg">
            </div>
            <div class="col-sm-6 switch-left">
                <div class="content computer">
                    <h2>Increase Closing Ratios</h2>
                    <p>Do you want to see an increase in closing ratios? ResMan elevates your leasing associates to leasing professionals with powerful tools to manage the workflow associated with converting a lead to a lease.</p>
                    <p>Ensure follow up and lead conversions with automated response templates and automated task management features found in ResMan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/lead-mgmt-3.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content tablet">
                    <h2>Online Availability</h2>
                    <p class="lead">Every day more prospects are looking to lease online. Ease of use for the renter is as important to them as it is to you. The online availability tool will guide the prospect from unit selection to the online application.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/revenue-tools') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Manage Ancillary Income</h2>
            <p class="lead white">
                Optimize Your Ancillary Revenue Generators and Stop Leaving Money on the Table.
            </p>
            <a href="<?php echo $site->baseUrl('products/revenue-tools') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/resident-retention') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Resident Retention</h2>
            <p class="lead white">Manage Turnovers with ResMan and take back control of your assets.</p>
            <a href="<?php echo $site->baseUrl('products/resident-retention') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
