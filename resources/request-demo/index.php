<?php
include '../php/config.php';
$site = new site();
$site->head("Request Demo");
$site->nav() ?>

<section class="request-demo white">
    <div class="container">
        <div class="col-sm-7 content">
            <h2 class="text-center light">Go Ahead, Try Us Out.</h2>
            <img class="img-responsive" src="<?php echo $site->baseUrl('img/mac-with-resman.png')?>" style="margin: 20px auto" />
            <p class="lead">Whether you're used to other Residential Management software, using spreadsheets, or are starting from scratch, ResMan is guaranteed to save you time and money with features like:</p>
            <ul>
                <li>A dashboard that calculates Economic Occupancy and Projected Occupancy</li>
                <li>A Traffic Scoreboard showing the number of prospects needed to fill a lease</li>
                <li>One-click integrations with billing, verification, payment processing, and other software</li>
                <li>Advanced Resident history tracking</li>
                <li>Mobile access to your information on any device</li>
            </ul>
        </div>
        <div class="col-sm-5">
            <div class="well">
                <div class="well-content">
                    <h3 class="text-center light" style="margin-top: 0">Request a Demo</h3>
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
                            <label for="formNeeds">Business Needs</label>
                            <textarea class="form-control" rows="3" id="formNeeds"></textarea>
                        </div>
                        <div class="alert alert-danger text-center master-error">
                            Please Complete the form before submitting
                        </div>
                        <button type="button" class="btn btn-cta btn-block btn-lg" onclick="sendRequest()">Submit</button>
                    </form>
                </div>
            </div>
            <div style="color: red; font-weight: 700" class="text-right required-fields">*Required Fields</div>
        </div>
    </div>
</section>

<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
</body>
</html>