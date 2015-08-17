<?php
include '../php/config.php';
$site = new site();
$site->head('Satisfacts');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/satisfacts-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Satisfacts
            </h3>
            <a href="http://www.satisfacts.com/" class="lead" target="_blank">
                satisfacts.com
            </a>
            <h4>
                About Satisfacts
            </h4>
            <div>
                <p>
                    SatisFacts and ApartmentRatings.com, both part of Internet Brands, are multifamily’s leading Retention and Reputation Management Solutions providers, serving hundreds of management companies and millions of units. SatisFacts’ suite of resident feedback, retention and reputation management services (Annual Surveys and Insite®, year-round Move-In, Work Order Follow-Up, Pre-Renewal and Prospect feedback), help clients improve retention and NOI, while the ApartmentRatings.com Verified Resident Program® helps enhance online reputations. ApartmentRatings.com, multifamily’s largest review site, offers the ability to respond to, monitor and leverage a property’s online reputation via the Manager Center, Reputation Manager and Leads products.</p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
