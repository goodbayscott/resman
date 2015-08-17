<?php
include '../php/config.php';
$site = new site();
$site->head('First Advantage');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/first-advantage-large.png')?>" class="img-responsive" style="margin: 0 auto" alt="Minol USA"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                First Advantage
            </h3>
            <a href="http://www.fadv.com/" class="lead" target="_blank">
                fadv.com
            </a>
            <div>
                <h4>
                    About First Advantage
                </h4>
                <p>
                    First Advantage offers one of the most comprehensive multi-family housing screening and
                    collections services available for the industry. We enable property owners and managers to
                    effectively evaluate residents during the application phase, monitor them after move-in and
                    locate them after they’ve moved out, if necessary. With First Advantage, property managers can
                    quickly turn qualified applicants into residents, and help protect their property from problem
                    renters. As a result, property owners and managers can avoid both financial losses and potential
                    liability.
                </p>
            </div>
            <!--div class="col-sm-6">
                <h4>
                    Make Informed Decisions that Maximize Revenues and Mitigates Risk
                </h4>
                <ul class="lead">
                    <li>
                        Choose your own decision criteria to quickly identify red flags
                    </li>
                    <li>
                        Customize criteria on a property-by-property basis
                    </li>
                    <li>
                        Access data from all three credit bureaus and one of the most comprehensive criminal record
                        searches available
                    </li>
                    <li>
                        Quickly pinpoint recent payment problems with our proprietary database, SkipWatch
                    </li>
                    <li>
                        Simplify debt collection and rental contract disputes
                    </li>
                    <li>
                        Receive 7-day a week customer service
                    </li>
                </ul>
            </div-->

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>