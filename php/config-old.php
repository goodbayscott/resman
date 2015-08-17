<?php

class site {

    /** BASE URL
     * the current root location of the directory
     */
    function baseUrl($page = "") {
        //$base_url = "http://localhost/client-resman/";
        //$base_url = "http://127.0.0.1:4567/goodbay/dev/resman/";
        //$base_url = "http://www.goodbay.co/dev/resman/";
        $base_url = "http://resmancloud.com/";
        return $base_url . $page;
    }

    /** HEAD
     * top section of HTML page
     * add all stylesheets and top-loading js here
     * parameters: $title, $description, $author
     */
    function head($title=false, $description=false, $author=false) {

        // TITLE
        $base_title = "ResMan"; // put base title here (Format: base_title | title)
        if ($title==false) {
            $title = $base_title;
        } else {
            $title = $base_title . ' | ' . $title;
        }

        // AUTHOR
        if ($author==false) {
            $author = "http://goodbay.co";
        }

        // DESCRIPTION
        if ($description==false) {
            $description = "You have your hands full with occupancy, marketing, and accounting. ResMan manages every part of your business at one price."; // Put default description here
        }


        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta title="description" content="<?php echo $description ?>">
            <meta title="author" content="<?php echo $author ?>">
            <title><?php echo $title ?></title>

            <!--CSS-->
            <link rel="stylesheet" href="<?php echo self::baseUrl("lib/bootstrap/css/bootstrap.min.css")?>">
            <link rel="stylesheet" href="<?php echo self::baseUrl("css/main.css") ?>">
            <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

            <!--favicon
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./docs-assets/ico/apple-touch-icon-144-precomposed.png">
            <link rel="shortcut icon" href="./docs-assets/ico/favicon.png">
            <script async="" id="gauges-tracker" data-site-id="4f0dc9fef5a1f55508000013" src="//secure.gaug.es/track.js"></script>
            <script async="" src="http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ"></script>
            -->

            <!-- edge preload -->
            <script type="text/javascript" charset="utf-8" src="resources/animation_edgePreload.js"></script>

            <!-- fancybox
            <link rel="stylesheet" href="<?php echo self::baseUrl('resources/jquery.fancybox.css?v=2.1.5')?>" type="text/css" media="screen" />
            <script type="text/javascript" src="<?php echo self::baseUrl('resources/jquery.fancybox.pack.js?v=2.1.5')?>"></script>
            <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
            <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
            <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

            <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
            <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
            -->

            <!-- Start of Woopra Code -->
                <script>
                (function(){
                        var t,i,e,n=window,o=document,a=arguments,s="script",r=["config","track","identify","visit","push","call","trackForm","trackClick"],c=function(){var t,i=this;for(i._e=[],t=0;r.length>t;t++)(function(t){i[t]=function(){return i._e.push([t].concat(Array.prototype.slice.call(arguments,0))),i}})(r[t])};for(n._w=n._w||{},t=0;a.length>t;t++)n._w[a[t]]=n[a[t]]=n[a[t]]||new c;i=o.createElement(s),i.async=1,i.src="//static.woopra.com/js/w.js",e=o.getElementsByTagName(s)[0],e.parentNode.insertBefore(i,e)
                })("woopra");

                woopra.config({
                    domain: 'resmancloud.com'
                });
                woopra.track();
                </script>
            <!-- End of Woopra Code -->

        </head>
        <body>



    <?php }


    /** FOOTER LINKS (end HTML PAGE)
     * the bottom of the HTML page
     * add all js dependencies here
     */
    function footerLinks() { ?>
        <!-- In production use:
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/2.0.3/angular.min.js"></script>
        -->
        <script src="<?php echo self::baseUrl("lib/jquery/jquery-2.1.0.min.js")?>"></script>
        <script src="<?php echo self::baseUrl("lib/noty/js/noty/packaged/jquery.noty.packaged.min.js")?>"></script>
        <script src="<?php echo self::baseUrl("lib/bootstrap/js/bootstrap.min.js")?>"></script>
        <script src="<?php echo self::baseUrl("js/main.js")?>"></script>
        </body>
        </html>
    <?php }



    /** NAVIGATION
     * responsive header
     *
     */
    function nav_links() {
        return array(
            array(
                'name'=>'Home',
                'url'=>self::baseUrl(),
                'class'=>'btn-primary'
            ),
            array(
                'name'=>'Product Tour',
                'url'=>self::baseUrl('product-tour/'),
                'class'=>'btn-primary'
            ),
            array(
                'name'=>'Blog',
                'url'=>'http://blog.resmancloud.com/',
                'class'=>'btn-primary'
            ),
            array(
                'name'=>'About Us',
                'url'=>self::baseUrl('about-us/'),
                'class'=>'btn-primary'
            ),
            array(
                'name'=>'Contact',
                'url'=>self::baseUrl('contact/'),
                'class'=>'btn-primary'
            ),
            array(
                'name'=>'Request Demo',
                'url'=>('http://go.resmancloud.com/request-demo'),
                'class'=>'btn-cta'
            )
        );
    }

    function nav() {
        ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo self::baseUrl() ?>">
                        <div class="logo"></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right visible-xs">
                        <li class="btn-primary"><a href="<?php echo self::baseUrl() ?>">Home<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown btn-primary">
                            <a href="<?php echo self::baseUrl('product-tour') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo self::baseUrl('products/product-tour') ?>">Take A Tour</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo self::baseUrl('products/portfolio') ?>">Portfolio</a></li>
                                <li><a href="<?php echo self::baseUrl('products/reports') ?>">Reports</a></li>
                                <li><a href="<?php echo self::baseUrl('products/accounting') ?>">Accounting</a></li>
                                <li><a href="<?php echo self::baseUrl('products/receivables') ?>">Receivables</a></li>
                                <li><a href="<?php echo self::baseUrl('products/vendor-management') ?>">Vendor Management</a></li>
                                <li><a href="<?php echo self::baseUrl('products/revenue-tools') ?>">Revenue Tools</a></li>
                                <li><a href="<?php echo self::baseUrl('products/lead-management') ?>">Lead Management</a></li>
                                <li><a href="<?php echo self::baseUrl('products/resident-retention') ?>">Retention Tools</a></li>
                            </ul>
                        </li>
                        <li class="btn-primary"><a href="http://blog.resmancloud.com">Blog</a></li>
                        <li class="btn-primary"><a href="<?php echo self::baseUrl('about-us') ?>">About Us</a></li>
                        <li class="btn-primary"><a href="<?php echo self::baseUrl('contact') ?>">Contact</a></li>
                        <!-- REMOVING PHP INSERTED LINKS AND ADDING HTML -->
                        <!--?php
                        foreach (self::nav_links() as $link) {
                            echo '
                            <li>
                                <a href="'.$link['url'].'">'.$link['name'].'</a>
                            </li>
                            ';
                        }
                        ?-->
                    </ul>
                    <div class="navbar-right hidden-xs">
                        <ul class="nav navbar-nav">
                            <li class="btn-primary"><a href="<?php echo self::baseUrl() ?>">Home<span class="sr-only">(current)</span></a></li>
                            <li class="dropdown btn-primary">
                                <a href="<?php echo self::baseUrl('product-tour') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo self::baseUrl('product-tour') ?>">Take A Tour</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo self::baseUrl('products/portfolio') ?>">Portfolio Views</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/reports') ?>">Reports</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/accounting') ?>">Accounting</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/receivables') ?>">Receivables</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/vendor-management') ?>">Vendor Management</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/revenue-tools') ?>">Revenue Tools</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/lead-management') ?>">Lead Management</a></li>
                                    <li><a href="<?php echo self::baseUrl('products/resident-retention') ?>">Retention Tools</a></li>
                                </ul>
                            </li>
                            <li class="btn-primary"><a href="http://blog.resmancloud.com">Blog</a></li>
                            <li class="btn-primary"><a href="<?php echo self::baseUrl('about-us') ?>">About Us</a></li>
                            <li class="btn-primary"><a href="<?php echo self::baseUrl('contact') ?>">Contact</a></li>
                        </ul>
                        <a href="http://go.resmancloud.com/request-demo"><button type="button" class="btn navbar-btn btn-cta">Request Demo</button></a>
                        <!-- REMOVING PHP INSERTED LINKS AND ADDING HTML -->
                        <!--?php
                        foreach (self::nav_links() as $link) {
                            echo '
                            <a href="'.$link['url'].'" class="btn navbar-btn pull-left '.$link['class'].'">
                                '.$link['name'].'
                            </a>
                            ';
                        }
                        ?-->
                    </div>

                </div>
            </div>
        </nav>
    <?php }


    /** FOOTER
     * all footer content
     */
    function footer() { ?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h4><small>NAVIGATE</small></h4>
                        <ul>
                            <?php
                            $length = count(self::nav_links());
                            $loop = 0;
                            foreach(self::nav_links() as $links) {
                                if ($length != ($loop + 1)) {
                                echo '<li>
                                <a href="'.$links['url'].'" class="btn btn-sm">
                                '.$links['name'].'
                                </a>
                                </li>';
                                $loop++;
                                }
                            }
                            ?>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-4">
                        <h4>
                            <small>LEARN MORE</small>
                        </h4>
                        <ul>
                            <li>
                                <a href="http://go.resmancloud.com/request-demo" class="btn btn-sm">
                                    Request A Free Demo
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo self::baseUrl('integration-partners/') ?>" class="btn btn-sm">
                                    Integration Partners
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo self::baseUrl('privacy/') ?>" class="btn btn-sm">
                                    Privacy Policy
                                </a>
                            </li>
                            <!-- HIDE TILL FURTHER NOTICE

                            <li>
                                <a href="<?php echo self::baseUrl('#') ?>" class="btn btn-sm">
                                    Careers
                                </a>
                            </li>
                            -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-4 text-left">
                        <div class="address hidden-xs">
                            <div>
                                <i class="glyphicon glyphicon-home glyphicon-th-large"></i>
                            </div>
                            <p class="lead">
                                4965 Preston Park Blvd. Suite 260<br />
                                Plano, Texas 75093
                            </p>
                        </div>
                        <div class="phone">
                            <div>
                                <i class="glyphicon glyphicon-phone-alt glyphicon-th-large"></i>
                            </div>
                            <p class="lead">
                                Office: (972) 349-1406<br />
                                Sales: (855) 737-6261<br />
                                Support: (888) 702-0971
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="logo"></div>
                <div class="footer-left">
                    <div class="social">
                        <a class="facebook" href="https://www.facebook.com/ResMan" target="_blank"></a>
                        <a class="linkedin" href="http://www.linkedin.com/company/resman-cloud" target="_blank"></a>
                        <a class="twitter" href="https://twitter.com/ResMan3" target="_blank"></a>
                        <a class="youtube" href="http://www.youtube.com/user/ResManCloud" target="_blank"></a>
                    </div>
                    <br />
                    <div class="copyright">
                        &copy; <?php echo date("Y") ?> ResMan, an Ensoware company.
                    </div>
                </div>
            </div>
        </footer>
    <?php }



    /** CTA
     * The Call to Action
     */
    function cta() { ?>
        <section class="tour-cta">
            <div class="container">
                <h1 class="text-center white">
                    Let ResMan Accelerate Your Business Forever
                </h1>
                <div class="lead text-center text-white">
                    Request a personal demo today and see how ResMan will save you hundreds of hours.
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="roi" src="<?php echo self::baseUrl('img/roi-head.png') ?>" alt=""/>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="white">
                            All accounts come with:
                        </h3>
                        <div class="text-white feature">
                            <i class="glyphicon glyphicon-ok"></i>
                            Outstanding Customer Service
                        </div>
                        <div class="text-white feature">
                            <i class="glyphicon glyphicon-ok"></i>
                            100% Transparent Pricing
                        </div>
                        <div class="text-white feature">
                            <i class="glyphicon glyphicon-ok"></i>
                            Every Feature
                        </div>
                    </div>
                </div>
                <a href="http://go.resmancloud.com/request-demo" class="btn btn-cta btn-lg">Request A Demo</a>
            </div>
        </section>
    <?php }




    /** CUSTOMER LINKS
     *
     */
    function customers_list() {
        return array(
            array(
                'img_name'=>'jay-caldwell.jpg',
                'quote'=>'Since making the switch to ResMan, we have become much, much more efficient.',
                'name'=>'Jay Caldwell',
                'title'=>'Vice President, Lackland Holdings'
            ),
            array(
                'img_name'=>'tom-gwyn.jpg',
                'quote'=>'I needed a software solution meeting several key requirements.  ResMan has met every one of them for us.',
                'name'=>'Tom Gwyn',
                'title'=>'Owner/President, Apartment Dynamics'
            ),

            array(
                'img_name'=>'michele-mcginnis.jpg',
                'quote'=>'Other systems make you feel like you are just a number—ResMan makes us feel like we matter.',
                'name'=>'Michele McGinnis',
                'title'=>'Assistant Controller, Deerfield Management Co.'
            ),
            array(
                'img_name'=>'lori-salgado.jpg',
                'quote'=>'ResMan brings residential management up to speed on technology and puts it to use.',
                'name'=>'Lori Salgado',
                'title'=>'Property Manager, Class A Management'
            ),
            array(
                'img_name'=>'duane-wethington.jpg',
                'quote'=>'There are not many systems out there that accommodate the needs of the maintenance team like ResMan.',
                'name'=>'Duane Wethington',
                'title'=>'Maintenance Supervisor,The Forum at Grand Prairie'
            )

        );
    }

    function customers() { ?>
        <div id="carousel" class="carousel slide" data-ride="carousel">
        <h1 class="text-center">
            <div class="contain">
                Our Customers <i class="glyphicon glyphicon-heart" style="color: #ff6496;"></i> Us!
            </div>
        </h1>
        <div class="clearfix"></div>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                foreach (self::customers_list() as $key=>$customer) { ?>
                <div class="item <?php echo $key==0?'active':'' ?>">
                    <div class="container">
                        <div class="contain">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="customer-view" src="img/customers/<?php echo $customer['img_name'] ?>">
                                </div>
                                <div class="col-sm-8">
                                    <div class="customer-quote">
                                        <p>
                                            "<?php echo $customer['quote'] ?>"
                                        </p>
                                        <h4><?php echo $customer['name'] ?><br /><small><?php echo $customer['title'] ?></small></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>
            <!-- Indicators -->
            <ol class="carousel-indicators new">
                <?php
                foreach (self::customers_list() as $key=>$customer) { ?>
                <li data-target="#carousel" data-slide-to="<?php echo $key ?>" class="<?php echo $key==0?'active':'' ?>">
                    <img src="img/customers/<?php echo $customer['img_name']?>">
                </li>
                <?php } ?>
            </ol>
            <!-- Controls -->
            <a class="left carousel-control new hidden-xs" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control new hidden-xs" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
    <?php }




    function integrationCategories() {
        return array(
            'Applicant Screening',
			'Call Center',
			'CRM',
            'Collections',
            'Communication',
            'Electronic Signature',
            'Lease Documents',
            'Market Surveys',
            'Marketing &#038; Web Design',
            'Online Payments',
            'Debt Collection',
            'Prospect and Leasing',
            'Resident Services',
            'Renters Insurance',
			'Revenue Management',
            'Surveys',
            'Utility Billing',
			'Vendor Compliance',
            'Coming Soon',
            'Business Partners Offering Discounts',
            'Surety Bonds'
        );
    }

    function integrationPartners() {
        return array(

			 array (
                'name'=>'LRO',
                'url'=>'#',
                'img'=>'LRO_small.png',
                'category'=>'Revenue Management'
            ),
			array (
                'name'=>'MaxLeases',
                'url'=>'#',
                'img'=>'max_leases.png',
                'category'=>'CRM'
            ),
			array (
                'name'=>'365 Connect',
                'url'=>'365connect',
                'img'=>'365connect.jpg',
                'category'=>'Marketing &#038; Web Design'
            ),
            array (
                'name'=>'Jonah Systems',
                'url'=>'jonah',
                'img'=>'jonah.jpg',
                'category'=>'Marketing &#038; Web Design'
            ),
			array (
                'name'=>'InRentive',
                'url'=>'inrentive',
                'img'=>'inrentive.jpg',
                'category'=>'Marketing &#038; Web Design'
            ),
            array (
                'name'=>'AmRent',
                'url'=>'amrent',
                'img'=>'amrent.jpg',
                'category'=>'Applicant Screening'
            ),
            array (
                'name'=>'ePremium',
                'url'=>'epremium',
                'img'=>'epremium.jpg',
                'category'=>'Renters Insurance'
            ),
			array (
                'name'=>'Level One Contact Center',
                'url'=>'#',
                'img'=>'level-one.png',
                'category'=>'Call Center'
            ),
            array (
                'name'=>'AudioImages',
                'url'=>'#',
                'img'=>'audioimages.png',
                'category'=>'Communication'
            ),
            array (
                'name'=>'Ellipse',
                'url'=>'#',
                'img'=>'ellipse.png',
                'category'=>'Communication'
            ),
            array (
                'name'=>'BlueMoon',
                'url'=>'#',
                'img'=>'bluemoon.png',
                'category'=>'Lease Documents'
            ),
            array (
                'name'=>'Findersites',
                'url'=>'#',
                'img'=>'findersites.png',
                'category'=>'Marketing &#038; Web Design'
            ),
            array (
                'name'=>'Fresh Interactive',
                'url'=>'freshiscool',
                'img'=>'freshiscool.png',
                'category'=>'Marketing &#038; Web Design'
            ),
            array (
                'name'=>'Renters Legal Liability',
                'url'=>'#',
                'img'=>'renters-legal-liability.png',
                'category'=>'Renters Insurance'
            ),
			array (
                'name'=>'Assurant',
                'url'=>'#',
                'img'=>'Assurant.png',
                'category'=>'Renters Insurance'
            ),
            array (
                'name'=>'SafeRent Resident Screening',
                'url'=>'#',
                'img'=>'corelogic.png',
                'category'=>'Applicant Screening'
            ),
            array (
                'name'=>'Kwelia',
                'url'=>'#',
                'img'=>'kwelia.png',
                'category'=>'Surveys'
            ),
            array (
                'name'=>'Satisfacts',
                'url'=>'satisfacts',
                'img'=>'satisfacts.png',
                'category'=>'Surveys'
            ),
            array (
                'name'=>'AUM Utility Billing',
                'url'=>'#',
                'img'=>'aum.png',
                'category'=>'Utility Billing'
            ),
            array (
                'name'=>'Conservice',
                'url'=>'#',
                'img'=>'conservice.png',
                'category'=>'Utility Billing'
            ),
            array (
                'name'=>'NWP',
                'url'=>'#',
                'img'=>'nwp.png',
                'category'=>'Utility Billing'
            ),
            array (
                'name'=>'Minol USA: Premier Partner',
                'url'=>'minol-usa',
                'img'=>'minol.png',
                'category'=>'Utility Billing'
            ),
            array (
                'name'=>'InDatus',
                'url'=>'indatus',
                'img'=>'indatus.png',
                'category'=>'Communication'
            ),
            array (
                'name'=>'ResidentCheck',
                'url'=>'residentcheck',
                'img'=>'resident-check.png',
                'category'=>'Applicant Screening'
            ),
            array (
                'name'=>'First Advantage',
                'url'=>'first-advantage',
                'img'=>'first-advantage.png',
                'category'=>'Applicant Screening'
            ),
            array (
                'name'=>'Rental History Reports',
                'url'=>'rental-history-reports',
                'img'=>'rental-history-reports.png',
                'category'=>'Applicant Screening'
            ),
			array (
                'name'=>'CIC',
                'url'=>'cic',
                'img'=>'cic.png',
                'category'=>'Applicant Screening'
            ),
            array (
                'name'=>'Aptexx: Premier Partner',
                'url'=>'aptexx',
                'img'=>'aptexx.png',
                'category'=>'Online Payments'
            ),
            array (
                'name'=>'RentPush',
                'url'=>'rentpush',
                'img'=>'rentpush.jpg',
                'category'=>'Revenue Management'
            ),
            array (
                'name'=>'RentDebt',
                'url'=>'rentdebt',
                'img'=>'rentdebt.png',
                'category'=>'Debt Collection'
            ),
            array (
                'name'=>'AMS Billing',
                'url'=>'ams-billing',
                'img'=>'ams.png',
                'category'=>'Utility Billing'
            ),
			array (
                'name'=>'Hocutt',
                'url'=>'#',
                'img'=>'hocutt.png',
                'category'=>'Utility Billing'
            ),
            array (
                'name'=>'DepositIQ',
                'url'=>'depositiq',
                'img'=>'depositiq.jpg',
                'category'=>'Surety Bonds'
            ),
            array (
                'name'=>'Updater',
                'url'=>'updater',
                'img'=>'updater.png',
                'category'=>'Resident Services'
            ),
        );
    }

    function isPartner() {
        $url = $_SERVER['REQUEST_URI'];
        $url[0] = '';
        //$url = substr($url, 0, -1);
        $url_array = explode('/', $url);
        $partner = $url_array[count($url_array) - 1];
        $partners = self::integrationPartners();
        $key = '';
        foreach ($partners as $i=>$item) {
            if ($item['url'] == $partner) {
                $key = $i;
            }
        }
        $data['partner'] = $partners[$key];
        $data['key'] = $key;
        return $data;
    }

    function partnerNav() {
        $partners = self::integrationPartners(); ?>

        <!-- OLD SETUP NAVIGATES THROUGH integrationPartners()
        <a href="<?php //echo $key==0?self::baseUrl('integration-partners/'):self::baseUrl('integration-partners/'.$partners[$key-1]['url']); ?>" class="btn btn-default pull-left">
            <span class="hidden-sm hidden-xs">
                <i class="glyphicon glyphicon-circle-arrow-left"></i>
                &nbsp;<?php //echo $key==0?'Back to Integration Partners':$partners[$key-1]['name']; ?>
            </span>
            <span class="visible-xs visible-sm">
                <i class="glyphicon glyphicon-circle-arrow-left"></i>
                &nbsp;Back
            </span>
        </a>

        <a href="<?php //echo $key==(count($partners)-1)?self::baseUrl('integration-partners/'):self::baseUrl('integration-partners/'.$partners[$key+1]['url']); ?>" class="btn btn-default pull-right">
            <span class="hidden-sm hidden-xs">
                <?php //echo $key==(count($partners)-1)?'Back to Integration Partners':$partners[$key+1]['name']; ?>&nbsp;
                <i class="glyphicon glyphicon-circle-arrow-right"></i>
            </span>
            <span class="visible-xs visible-sm">
                Next&nbsp;
                <i class="glyphicon glyphicon-circle-arrow-right"></i>
            </span>
        </a>
        -->

        <a href="<?php echo self::baseUrl('integration-partners/') ?>" class="btn btn-default pull-left" style="margin-left: 14px;">
            <i class="glyphicon glyphicon-circle-arrow-left"></i>
            &nbsp;Back
        </a>


    <?php }







}
