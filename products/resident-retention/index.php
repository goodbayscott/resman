<?php
include '../../php/config.php';
$site = new site();
$site->head("Resident Retention");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/products/product-icons/resident-retention.png">
                <span>Resident Retention</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Manage Turnovers with ResMan and take back control of your assets.</div>
        <p class="lead"></p>

        <div class="row">
            <div class="col-md-4">
                <h2>The Owner Is Your First Priority</h2>
                <p>Leverage resident satisfaction to secure owner satisfaction. ResMan provides the means to manage your business objectives.</p>
            </div>
            <div class="col-md-4">
                <h2>Technology Eliminates Normal Office Hours</h2>
                <p>Win your residents over with our self-service options, allowing them to manage their account, pay bills, and submit work orders anytime, anywhere.</p>
            </div>
            <div class="col-md-4">
                <h2>Empower Your Front Line</h2>
                <p>Follow up and follow through are essential to successful property management. Bi-directional emails, task management and online lease documents increase overall efficiency.</p>
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
                <img class="img-responsive" src="../../img/products/retention-1.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content phone">
                    <h2>Community Members Portal</h2>
                    <p class="lead">Residents can view account balance in real time; submit and track work orders online; check for package delivery; and upload and share documents and pictures with management. ResMan's Resident Portal takes the effort out of your renewal efforts.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 switch-right">
                <img class="img-responsive" src="../../img/products/retention-2.jpg">
            </div>
            <div class="col-sm-7 switch-left">
                <div class="content tablet">
                    <h2>Mass Communication</h2>
                    <p>Today's renters use multiple platforms to communicate on both a personal and professional level. Communicate an urgent message to your residents while away from the community or send a rent reminder from within ResMan.</p>
                    <p>ResMan's user interface promotes follow-up. Your employees can communicate with residents through individual or bulk email, automated messages, and SMS text.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/retention-3.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content computer">
                    <h2>Renewal Reporting</h2>
                    <p class="lead">Real-time renewal logs alert regional management to retention issues. This allows time for redirection and additional efforts as needed. Manage your revenue with detailed reports that reflect effective rent increases and market rent variances.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <a href="<?php echo $site->baseUrl('products/lead-management') ?>">
                <img src="../../img/arrow-left.png">
            </a>
            <h2 class="white">Lead Management</h2>
            <p class="lead white">Set yourself apart from the competition and elevate your marketing to the next level.</p>
            <a href="<?php echo $site->baseUrl('products/lead-management') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <a href="<?php echo $site->baseUrl('products/portfolio') ?>">
                <img src="../../img/arrow-right.png">
            </a>
            <h2 class="white">Portfolio Views</h2>
            <p class="lead white">Business Intelligence at your very own fingertips whenever you want it.</p>
            <a href="<?php echo $site->baseUrl('products/portfolio') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section>


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
