<?php
include '../php/config.php';
$site = new site();
$site->head("About Us");
$site->nav() ?>


   <section class="white about-us-team">
      <div class="container">
         <div class="group"></div>
         <p class="about-1">The Key</p>
         <p class="about-2">To Our Product</p>
      </div>
   </section>
   <section class="white about-us">
      <div class="container">
         <div class="group"></div>
         <p class="about-3">Is In</p>
         <p class="about-4">The Passion</p>
      </div>
   </section>

   <section class="white about-us-team">
      <div class="container about-tag">
         <p class="about-5">Of Our</p>
         <p class="about-6">People</p>
           <p class="lead text-center">
             ResMan was designed and built by active multifamily professionals who understand the unique challenges you face on a daily basis.
             The developers and designers of ResMan are experienced property managers with "boots on the ground" experience and know what you need
             to increase your profitability, decrease expenses, and make your life easier.
           </p>
            <p class="lead text-center">
               Everything we do is guided by a moral compass that ensures fairness, respect, and an appreciation for the members of the multifamily
               industry. We work day-in and day-out to provide tools that make a difference and allow customers to focus on what matters: their own customers.
            </p>

            <div class="container exec">
               <h1>Meet The Team</h1>
                <div class="row exec">
                    <div class="col-sm-4 tami-pic">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/tami.jpg')?>" />
                    </div>
                    <div class="col-sm-8 tami">
                        <h3>Tami Franklin — <span class="title"><em>President</em></span></h3>
                        <p class="bio">Tami Franklin has been instrumental in bringing intuitive software to an industry she has been a part of
                            for over 30 years.  Over the past decade she has been a driving force to bringing ResMan to fruition.  Tami is determined
                            to provide a superior product to the multifamily industry that enables businesses to reach new heights of performance.</p>
                    </div>
                </div>
                <div class="row exec">
                    <div class="col-sm-4 switch-right dave-pic">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/dave-mckenna.jpg')?>" />
                    </div>
                    <div class="col-sm-8 dave switch-left">
                        <h3>Dave McKenna — <span class="title"><em>Sr. VP of Product Management</em></span></h3>
                        <p class="bio">Dave is an accomplished leader with 20 years of experience delivering technology solutions in the multifamily, telecommunications, and defense industries. He is an energetic thought-leader whose passion for building SaaS products and high-performing operational teams fits perfectly with the ResMan way.</p>
                    </div>
                </div>
                <div class="row exec">
                    <div class="col-sm-4 nick-pic">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/nick.jpg')?>" />
                    </div>
                    <div class="col-sm-8 dave">
                        <h3>Nick Olsen — <span class="title"><em>Sr. VP of Software Development</em></span></h3>
                        <p class="bio">Nick has an intellect and character well beyond his years.  His effort to
                            make a solution that would make a difference in the users work life is evident in every detail and functionality of ResMan.
                            Nick Olsen has been developing business applications for over ten years and has held positions from Quality Assurance
                            to Lead Software Engineer prior to joining the ResMan team.  </p>
                    </div>
                </div>
                <div class="row exec">
                    <div class="col-sm-4 elizabeth-pic switch-right">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/elizabeth.jpg')?>" />
                    </div>
                    <div class="col-sm-8 elizabeth switch-left">
                        <h3>Elizabeth Francisco — <span class="title"><em>Sr. VP of Industry Relations (SVIR)</em></span></h3>
                        <p class="bio">Fearless and confident, Elizabeth possesses over 20 years of successful property management experience including REITs, 1031 Exchanges, single investor, acquisitions, lease-ups, and new construction. She has an intimate understanding of how the industry has changed over the last 20 years and to what degree those changes impact day-to-day operations.  Elizabeth is a tireless advocate for improving the multi-family industry by improving functionality and through elevating best practices.  </p>
                    </div>
                </div>
                <div class="row exec">
                    <div class="col-sm-4 phil-pic">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/phil.jpg')?>" />
                    </div>
                    <div class="col-sm-8 phil">
                        <h3>Phil Rodgers — <span class="title"><em>Sr. VP of Sales</em></span></h3>
                        <p class="bio">Phil has held various positions within the multifamily software and marketing industry. All the while, his mantra
                            has been based around developing solutions “for the user, by the user".  Phil is an accomplished sales manager, teacher and
                            coach with a strong emphasis on new business development, recruiting and customer relations.   Phil is a true coach at heart
                            and ResMan is his championship-bound team.</p>
                    </div>
                </div>
                <div class="row exec">
                    <div class="col-sm-4 joe-pic switch-right">
                        <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/joe-miskell.jpg')?>" />
                    </div>
                    <div class="col-sm-8 joe switch-left">
                        <h3>Joe Miskell — <span class="title"><em>Sr. VP of Corporate Services</em></span></h3>
                        <p class="bio">Joe is a Certified Public Accountant who brings over 17 years of business experience to ResMan.  As an accountant, he believes that there is nothing​ more important than​​ providing exceptional service, making him a perfect fit for ResMan.  His favorite quote, “The Buck Stop Here” sums up his philosophy in how he approaches business.  By taking ownership of Corporate Services, Joe and his team support the company’s internal processing, freeing others to provide outstanding service to our external partners.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light-blue about-us-team">
        <div class="row exec">
            <div class="container exec">
                <div id="roi" class="col-sm-4 roi-pic">
                    <img class="img-responsive" src="<?php echo $site->baseUrl('img/company/roi3.png')?>" />
                </div>
                <div class="col-sm-8 roi">
                    <h3>Meet ROI!</h3>
                    <p class="bio">R.O.I. (pronounced "Roy", short for Return On Investment) is ResMan’s mascot. His uncanny chameleon-like ability to
                        adapt to any situation serves him well in the multifamily industry, where everyone wears various hats and each person plays
                        multiple roles.  R.O.I. represents your investment... something both he and ResMan take very seriously.</p>
                </div>
            </div>
        </div>
    </section>


<!-- OTHER EMPLOYEES -->
    <section class="light-grey f2">
        <div class="container">
            <div id="about-group" class="container others">
                <img title="Derek Lefler" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/derek.jpg')?>" />

                <img title="Trevor Burbidge" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/trevor.jpg')?>" />
                <img title="Joni Scott" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/joni.jpg')?>" />
                <img title="Anissa Wilson" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/anissa.jpg')?>" />
                <img title="Jake Bertelsen" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/jake-bertelsen.jpg')?>" />
                <img title="Caroline Laws" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/caroline.jpg')?>" />

                <img title="Jordan Betteridge" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/jordan.jpg')?>" />
                <img title="Marco Lopez" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/marco-lopez.jpg')?>" />
                <img title="Diane Beasley" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/diane.jpg')?>" />
                <img title="Becca Lopez" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/becca-lopez.jpg')?>" />
                <img title="Craig Perkins" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/craig.jpg')?>" />
                <img title="Tony Morgan" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/tony-morgan.jpg')?>" />
                <img title="Shivani Jodhka" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/shivani.jpg')?>" />

                <img title="Josh Grigg" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/josh-grigg.jpg')?>" />
                <img title="Arin Palmer" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/arin.jpg')?>" />
                <img title="Calverlina Richardson" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/calverlina.jpg')?>" />
                <img title="Mike Fisk" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/mike-fisk.jpg')?>" />
                <img title="Melanie Poehls" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/melanie.jpg')?>" />

                <img title="Jackie Choto" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/jackie-choto.jpg')?>" />




                <img title="Grace Thomas" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/grace-thomas.jpg')?>" />

                <img title="Mandy Hernandez" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/mandy.jpg')?>" />
                <img title="Rick Bertelsen" data-toggle="tooltip" data-placement="bottom" src="<?php echo $site->baseUrl('img/company/rick-bertelsen.jpg')?>" />
            </div>
            <div class="clearfix" style="height: 80px;"></div>
        </div>
    </section>
</section>

<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks() ?>
