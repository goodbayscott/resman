<?php
include '../php/config.php';
$site = new site();
$site->head("Service");
?>



<section class="home">
    <div class="banner banner-service">

        <div class="clear-bgrd">
        <?php $site->nav() ?>
        </div>

        <div class="container">
                <div class="content">
                    <h1 class="white">
                        Serving You is What We Do.
                    </h1>
                    <p class="white lead">
                        No one appreciates good customer service more than we do, and it shows—we have the highest customer satisfaction ratings in the industry.  When a company’s motto is “Service First”, you should expect no less.
                    </p>
                </div>
            </div>
        </div>
</section>


<section class="serve-customers">
    <div class="container">
        <h2 class="title">Heaps of Happy Customers</h2>
        <div class="row">
            <div class="col-sm-4">
                <img src="../img/customer-logos/apartment-dynamics.jpg" class="img-responsive" />
                <p>"The hands-on training provided by ResMan at the time of our conversion was top notch, and users left the training feeling confident in being able to do their job.""</p>
                <h3>MARY GWYN | CHIEF INNOVATOR</h3>
            </div>
            <div class="col-sm-4">
                <img src="../img/customer-logos/hettig-kahn.jpg" class="img-responsive" />
                <p>"The pricing is much lower, the service from their techs is excellent and their program is so easy for the on-site personnel.""</p>
                <h3>DARLENE GUIDRY | PRESIDENT</h3>
            </div>
            <div class="col-sm-4">
                <img src="../img/customer-logos/bsr.jpg" class="img-responsive" />
                <p>"What's not to like? The training and support provided by ResMan is what I would expect of a professional training company, not a property management system provider!""</p>
                <h3>SCOTT RAY | CEO</h3>
            </div>
        </div>
    </div>

</section>

<section class="serve-tiles">
    <!--div class="">
        <img src="../img/mosaic.jpg" class="img-responsive" />
    </div-->
</section>

<section class="serve-best">
    <div class="container">
        <h2>How Does ResMan Serve You Best?</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/clarity.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Clarity</h3>
                        <p>We are not looking to sell you software, we are looking for a partnership.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/communication.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Communication</h3>
                        <p>Clear communication & transparent pricing—no hidden agenda whatsoever.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/precise-training.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Precise Training</h3>
                        <p>Training options to empower users to be productive right out of the gates.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/setup-options.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Setup Options</h3>
                        <p>Providing implementation designed to work with your teams experience and workload and meet your budget needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/dedicated-support.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Dedicated Support</h3>
                        <p>Providing a forum where you voice counts and helps to deliver a product that makes a difference to each and every user.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../img/service-icons/hearing-feedback.png" class="img-responsive" />
                    </div>
                    <div class="col-xs-9">
                        <h3>Hearing Feedback</h3>
                        <p>Ensuring a positive user experience in the software, commitment of internal resources to ensure ease and functionality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="serve-cta">
    <div class="container text-center">
        <h2>Ready to Switch?</h2>
        <div class="btn-cta btn-cool btn-blue right">
            <a href="http://go.resmancloud.com/request-demo">
              <span class="left title">SIGN UP NOW</span>
              <span class="right icon">&rarr;<span class="slant-right"></span></span>
            </a>
        </div>
    </div>
</section>



<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
