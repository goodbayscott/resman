<?php
include '../php/config.php';
$site = new site();
$site->head("Home");
$site->nav() ?>



<section class="tour-banner">
    <div class="tour-banner"></div>
    <div class="container">
        <a class="roi" href="../about-us/#roi">
            <img src="<?php echo $site->baseUrl('img/tour-front.png') ?>" alt="ROI" data-container="body" data-toggle="popover" data-placement="top" data-content="Click to meet ROI" />
        </a>
        <div class="headline">ResMan is Online<br />Property Management.</div>
        <div class="clearfix"></div>
    </div>
</section>
<section class="tour-5">
    <div class="container">
        <h1 class="white text-center">Manage Your Entire Company Portfolio</h1>
        <div class="lead text-white text-center">
            We’ve rolled all the tools, reports, and analytics for every property your business owns into one easy-to-use
            platform.
        </div>
        <div class="browser visible-lg">
            <div id="tour-carousel-5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="slide-1">
                            <img class="img-responsive" src="<?php echo $site->baseUrl('img/sect-5-1.jpg') ?>" />
                            <div class="content">
                                <div class="title">
                                    Powerful Reports
                                </div>
                                <ul>
                                    <li>
                                        Export to 8 different formats including Excel and PDF
                                    </li>
                                    <li>
                                        Email reports directly from ResMan to executives, managers, and staff
                                    </li>
                                </ul>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide-2">
                            <img class="img-responsive" src="<?php echo $site->baseUrl('img/sect-5-2.jpg') ?>" />
                            <div class="content">
                                <div class="title">
                                    Advanced Portfolio Views
                                </div>
                                <ul>
                                    <li>
                                        Improved forecasting for 30, 60, or 90-day views
                                    </li>
                                    <li>
                                        Modules for real-time tracking of all resident activity
                                    </li>
                                    <li>
                                        Real-time leasing results
                                    </li>
                                </ul>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide-3">
                            <img class="img-responsive" src="<?php echo $site->baseUrl('img/sect-5-3.jpg') ?>" />
                            <div class="content">
                                <div class="title">
                                    Robust Search
                                </div>
                                <ul>
                                    <li>
                                        View vendor and resident profiles before returning calls
                                    </li>
                                    <li>
                                        Easily find and retrieve documents, lease forms, and move-out pictures
                                    </li>
                                    <li>
                                        Quickly access communication logs
                                    </li>
                                </ul>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#tour-carousel-5" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#tour-carousel-5" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="browser-list hidden-lg">
            <img src="<?php echo $site->baseUrl('img/sect-5-mobile.jpg') ?>" class="img-responsive mobile-img">
            <div class="slide">
                <div class="content">
                    <div class="title">
                        Powerful Reports
                    </div>
                    <ul>
                        <li>
                            Export to 8 different formats including Excel and PDF
                        </li>
                        <li>
                            Email reports directly from ResMan to executives, managers, and staff
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <div class="title">
                        Advanced Portfolio Views
                    </div>
                    <ul>
                        <li>
                            Improved forecasting for 30, 60, or 90-day views
                        </li>
                        <li>
                            Modules for real-time tracking of all resident activity
                        </li>
                        <li>
                            Real-time leasing results
                        </li>
                    </ul>
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <div class="title">
                        Robust Search
                    </div>
                    <ul>
                        <li>
                            View vendor and resident profiles before returning calls
                        </li>
                        <li>
                            Easily find and retrieve documents, lease forms, and move-out pictures
                        </li>
                        <li>
                            Quickly access communication logs
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tour-group white">

    <div class="container">
        <div class="tour-4">
            <h1 class="text-center">Complete Accounting Solution</h1>
            <div class="lead text-center">
                Our robust accounting tools will help you get the job done in less than half the time.
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo $site->baseUrl('img/tour-4.png') ?>" alt=""/>
                </div>
                <div class="col-sm-6 content">
                    <h3 style="padding-top: 30px;">Manage Accounts Payable</h3>
                    <div class="lead">
                        Create chart of accounts mapping, run reports for cash or accrual any time you want, and work in
                        multiple financial periods simultaneously.
                    </div>
                    <div class="lead">
                        ResMan also lets you:
                        <ul>
                            <li>
                                Track vendor tax IDs and insurance expirations
                            </li>
                            <li>
                                Submit 1099 forms to the IRS
                            </li>
                            <li>
                                Perform inter-company transactions
                            </li>
                            <li>
                                Automate reconciliation
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tour-3">
            <div id="tour-carousel" class="carousel slide hidden-xs" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active slide1">
                        <div class="slide-in">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="white text-right">Minimize Delinquent Accounts</h3>
                                    <p class="white lead text-right">
                                        See a snapshot of every delinquent account and send out reminders and online payment links in just two clicks.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive" style="margin: 0 auto" src="<?php echo $site->baseUrl('img/delinquent.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide2">
                        <div class="slide-in">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" style="margin: 0 auto" src="<?php echo $site->baseUrl('img/collect.png') ?>">
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="white">Collect Your Own Debts</h3>
                                    <p class="white lead">
                                        Automatically set up and track a payment plan for each former resident that still owes a balance.  Get a
                                        bird’s eye view of the outstanding balance for the entire property or see just a particular resident.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide3">
                        <div class="slide-in">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="white text-right">Utility Billing</h3>
                                    <p class="white lead text-right">
                                        Make back-billing utilities to residents a cinch by letting ResMan do all the work in the system, or
                                        use one of our multiple integration partners to manage utilities for multiple properties.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive" style="margin: 0 auto" src="<?php echo $site->baseUrl('img/utility.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#tour-carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#tour-carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

            <div class="mobile visible-xs">
                <div class="box1 text-center">
                    <img class="img-responsive" src="<?php echo $site->baseUrl('img/delinquent.png') ?>">
                    <h3 class="text-center">Minimize Delinquent Accounts</h3>
                    See a snapshot of every delinquent account and send out reminders and online payment links in just two clicks.
                </div>
                <div class="box2 text-center">
                    <img class="img-responsive" src="<?php echo $site->baseUrl('img/collect.png') ?>">
                    <h3 class="text-center">Minimize Delinquent Accounts</h3>
                    Automatically set up and track a payment plan for each former resident that still owes a balance.  Get a
                    bird’s eye view of the outstanding balance for the entire property or see just a particular resident.
                </div>
                <div class="box3 text-center">
                    <img class="img-responsive" src="<?php echo $site->baseUrl('img/utility.png') ?>">
                    <h3 class="text-center">Minimize Delinquent Accounts</h3>
                    Make back-billing utilities to residents a cinch by letting ResMan do all the work in the system, or
                    use one of our multiple integration partners to manage utilities for multiple properties.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="tour-2">
            <h1 class="text-center">Boost Resident Retention with Communication Tools</h1>
            <div class="lead text-center">
                Retaining your residents has the most significant impact on increasing your business. ResMan’s robust
                communication tools make it easy to keep your residents informed and happy.
            </div>
            <div class="box res">
                <img src="../img/tour-res.png">
                <div class="talk">
                    <div class="title">
                        Residents can:
                    </div>
                    <ul>
                        <li>Check account balance</li>
                        <li>Pay online from computer or mobile</li>
                        <li>Request maintenance</li>
                        <li>See staff photo directory</li>
                        <li>View community activity calendar</li>
                        <li>Receive property alerts</li>
                    </ul>
                    <div class="arrow"></div>
                </div>
            </div>
            <div class="box staff">
                <img src="../img/tour-staff.png">
                <div class="talk">
                    <div class="title">
                        Staff can:
                    </div>
                    <ul>
                        <li>View resident account balances</li>
                        <li>Attach lease documents</li>
                        <li>Notify residents of packages</li>
                        <li>Manage work orders</li>
                        <li>Manage messages from residents</li>
                        <li>Schedule community events</li>
                    </ul>
                    <div class="arrow"></div>
                </div>
            </div>
            <div class="box man">
                <img src="../img/tour-man.png">
                <div class="talk">
                    <div class="title">
                        Management can:
                    </div>
                    <ul>
                        <li>Generate communication reports</li>
                        <li>Create custom employee groups</li>
                        <li>Mass message staff and residents</li>
                        <li>Manage online payments</li>
                        <li>Set up automated rent reminders</li>
                        <li>Add new staff to photo directory</li>
                    </ul>
                    <div class="arrow"></div>
                </div>
            </div>
            <!--div class="box exec">
                <img src="../img/tour-exec.png">
                <div class="talk">
                    <div class="title">
                        Executives can:
                    </div>
                    <ul>
                        <li>Oversee communication efforts</li>
                        <li>Create work order reports</li>
                        <li>Enable/disable settings</li>
                    </ul>
                    <div class="arrow"></div>
                </div>
            </div-->
        </div>
    </div>

</section>


<section class="tour-1">
    <div class="container">
        <h1 class="text-center">Lease Your Apartments Online</h1>
        <div class="lead text-center">
            Gone are the days where you need to rely on paper applications and file cabinets to manage your business.
            ResMan brings easy-to-use leasing tools to the 21st century.
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="img" style="background: url('<?php echo $site->baseUrl('img/lizard-1.png') ?>') no-repeat center;"></div>
                <h3>Paperless Leasing</h3>
                <p class="lead">
                    Receive, view, screen, sign, and store applications and leases without ever picking up a pen.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="img" style="background: url('<?php echo $site->baseUrl('img/lizard-2.png') ?>') no-repeat center;"></div>
                <h3>Payment Processing</h3>
                <p class="lead">
                    Your residents can pay deposits and rent from any device—even by text messaging.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <div class="img" style="background: url('<?php echo $site->baseUrl('img/lizard-3.png') ?>') no-repeat center;"></div>
                <h3>Automatic Pricing</h3>
                <p class="lead">
                    Integrate with our Revenue Management providers to always keep your pricing competitive and accurate.
                </p>
            </div>
        </div>
    </div>
</section>

<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
