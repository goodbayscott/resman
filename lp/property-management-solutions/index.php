<?
Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: http://go.resmancloud.com/property-management-solution" );
?>

<?php
include '../php/config.php';
$site = new site();
$site->head("Property Management Solutions");
$site->nav() ?>

<!-- //// LANDING PAGE - EDIT THIS SECTION! //// -->
<section class="request-demo white">
    <div class="container">
        <div class="col-sm-7 content">

            <h2 class="text-center">The #1 Property Management Solution.</h2>
            <img class="img-responsive" src="<?php echo $site->baseUrl('img/mac-with-resman.png')?>" style="margin: 20px auto" />
            <p class="lead">ResMan is the <strong>only</strong> software for property management that works the way you do.  With the easy-to-use interface you can review a delinquent account, follow up on a work order, or manage your portfolio—all within 3 clicks or less. </p>
            <p class="lead">ResMan's property management solutions also features:</p>
            <ul>
                <li>Robust Accounting Suite</li>
                <li>Portfolio Reporting</li>
                <li>Maintenance Utility Module</li>
                <li>Lead Management</li>
                <li>Resident Portal</li>
                <li>Online Leasing &#038; Availability</li>
                <li>Accessibility on phone, tablet, and computer</li>
            </ul>
        </div>
<!-- STOP EDITING! -->

<!-- FORM START -->
        <div class="col-sm-5">
            <div class="well">
                <div class="well-content">
                    <h3 class="text-center light" style="margin-top: 0">Sign up and see for yourself.</h3>
                    <form id="requestForm" method="post">
                        <div class="form-group">
                            <label class="control-label" for="formName">Full Name<span>*</span></label>
                            <input type="text" class="form-control" id="formName" placeholder="Full Name">
                            <div class="error-message">
                                Please enter your name
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formEmail">Email<span>*</span></label>
                            <input type="email" class="form-control" id="formEmail" placeholder="Email">
                            <div class="error-message">
                                Please enter a valid email address
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="formPhone">Phone<span>*</span></label>
                            <input type="tel" class="form-control" id="formPhone" placeholder="Phone">
                            <div class="error-message">
                                Please enter a valid phone number
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formUnits">Number of Units<span>*</span></label>
                            <input type="number" class="form-control" id="formUnits" placeholder="Number of Units">
                            <div class="error-message">
                                Please enter a valid number
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formCompany">Management Company<span>*</span></label>
                            <input type="text" class="form-control" id="formCompany" placeholder="Management Company">
                            <div class="error-message">
                                This cannot be left blank
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formRole">What is your primary role?</label>
                            <select class="form-control" id="formRole">
                                <option value="0" selected disabled>Select Role</option>
                                <option value="Leasing Agent">Leasing Agent</option>
                                <option value="Onsite Maintenance">Onsite Maintenance</option>
                                <option value="Onsite Management">Onsite Management</option>
                                <option value="Regional Management">Regional Management</option>
                                <option value="Corporate Management">Corporate Management</option>
                                <option value="Accounting/Back-office">Accounting/Back-office</option>
                                <option value="Executive Leadership">Executive Leadership</option>
                                <option value="Asset Owner/Stakeholder">Asset Owner/Stakeholder</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="formSoftware">Existing Property Management Software</label>
                            <input type="text" class="form-control" id="formSoftware" placeholder="Property Management Software">
                        </div>
                        <div class="form-group">
                            <label for="formNeeds">Business Needs</label>
                            <textarea class="form-control" rows="3" id="formNeeds"></textarea>
                        </div>
                        <div class="alert alert-danger text-center master-error">
                            Please Complete the form before submitting
                        </div>
                        <button type="button" class="btn btn-cta btn-block btn-lg" onclick="sendRequest();_gaq.push(['_trackEvent', 'Contact', 'Demo Request', 'Contact Form',, false]);">Submit</button>
                    </form>
                </div>
            </div>
            <div style="color: red; font-weight: 700" class="text-right required-fields">*Required Fields</div>
        </div>
<!-- FORM END -->

    </div>
</section>

<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
</body>
</html>
