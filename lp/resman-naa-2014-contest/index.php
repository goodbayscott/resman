<?
Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: http://resmancloud.com" );
?>

<?php
include '../php/config.php';
$site = new site();
$site->head("Property Management System");
$site->nav() ?>

<!-- //// LANDING PAGE - EDIT THIS SECTION! //// -->
<section class="request-demo white">
    <div class="container">
        <div class="col-sm-7 content">

            <h2 class="text-center">Enter To Win A New 3D Printer!</h2>
            <img class="img-responsive" src="<?php echo $site->baseUrl('img/giveaway.jpg')?>" style="margin: 20px auto" />
            <p class="lead">ResMan is giving away a brand spankin' new <strong><a href="https://www.youtube.com/watch?v=yTh0rzCXefQ">Cubify Cube2 3D Printer</a></strong> to attendees of the 2014 National Apartment Association Education Conference &#38; Exposition at the Colorado Convention Center in Denver, June 19-20.</p>
            <p class="lead">For a chance to win, come by the ResMan Booth during the show (booth 1415) to pick up your registration code. We'll be announcing the winner at the end of the convention.<p>
            <p class="lead"><em><small>**Winner must be a registered attendee at time of drawing. Limit one (1) registration per company. Those who pre-register must still come by the ResMan booth before the end of the drawing to pick up their registration code to be eligible.</em></small></p>
        </div>
<!-- STOP EDITING! -->

<!-- FORM START -->
        <div class="col-sm-5">
            <div class="well">
                <div class="well-content">
                    <h3 class="text-center light" style="margin-top: 0">Pre-Registration is now closed - please come by the booth to enter!</h3>
                </div>
            </div>
        </div>
<!-- FORM END -->

    </div>
</section>

<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
</body>
</html>
