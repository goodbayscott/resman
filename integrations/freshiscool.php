<?php
include '../php/config.php';
$site = new site();
$site->head('Fresh Interactive');
$site->nav() ?>



    <section class="partners white">
        <div class="container">
            <div class="text-center">
                <img src="<?php echo $site->baseUrl('img/integration/freshiscool-lg.jpg')?>" class="img-responsive" style="margin: 0 auto" alt="365 Connect"/>
            </div>
        </div>
    </section>
    <section class="partners light-grey">
        <div class="container">
            <h3>
                Fresh Interactive
            </h3>
            <a href="http://www.freshiscool.com/" class="lead" target="_blank">
                freshiscool.com
            </a>
            <h4>
                About Fresh Interactive
            </h4>
            <div>
                <p>
                    Fresh. Our name is as original, streamlined, and strategic as our solutions to your business needs. We are a progressive, full-service, Interactive agency that creates and delivers fresh ideas for branding, website design, search engine marketing, social media, and technology development.</p>

<p>In 2009, Fresh Interactive opened its doors with a simple premise: provide clients—large and small—with big-agency experience that respects their bottom line. Today, the agency offers over 75 years of combined experience in implementing marketing campaigns and web-based solutions with measurable results for national and regional brands in the travel, real estate, luxury jewelry, entertainment, restaurant and manufacturing industries.</p>

<p>Fresh Interactive’s team, applies strategy, creativity, ingenuity and technology to produce budget-conscious solutions that are designed to turn passive observers into passionate fans, followers and customers.</p>
            </div>

            <div class="clearfix" style="margin-bottom: 20px;"></div>

            <?php $site->partnerNav() ?>
        </div>
    </section>




<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
