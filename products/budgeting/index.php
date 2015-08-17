<?php
include '../../php/config.php';
$site = new site();
$site->head("Budgeting");
$site->nav() ?>



<section class="product-intro">
    <div class="product-header-orange">
        <div class="container">
            <h1>
                <img class="img-responsive" src="../../img/product/budgeting.png">
                <span>Budgeting</span>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="title">Move beyond spreadsheets and automate your entire budgeting system.</div>
        <p class="lead">ResMan’s innovative budgeting module enables users to create a powerful, customized budgeting and forecasting solution.</p>

        <div class="row">
            <div class="col-md-4">
                <h2>Time</h2>
                <p>Are you spending more time managing budget templates then on actual analysis and planning? ResMan’s budgeting module makes building templates easier than ever before.</p>
            </div>
            <div class="col-md-4">
                <h2>Data Integrity</h2>
                <p>Manual data entry by multiple people, what could go wrong?   The more manual entry the more data errors. Avoid mistyped data and broken formulas with ResMan’s budgeting tools.</p>
            </div>
            <div class="col-md-4">
                <h2>Avoid Mental Shutdown</h2>
                <p>Spreadsheets are a major headache. ResMan breaks down your budget process into bite size chunks. This takes the intimidation out of the “BUDGET WORKBOOK”.</p>
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
            <div class="col-sm-6 feature-image">
                <img class="img-responsive" src="../../img/products/budgeting-1.jpg">
            </div>
            <div class="col-sm-6">
                <div class="content" style="margin-top: 0px;">
                    <h2>Ease of Use in Your Budgeting Workflow</h2>
                    <p class="lead">Not an expert in excel, no problem as ResMan's budget module is presented in a familiar interface with out the risk of formula corruptions due to user error.</p>
                    <p class="lead">Utilize one central budgeting template or owner specific templates.</p>
                    <p class="lead">User defined permissions allow users to move between tabs & fields to see and /or edit data.</p>
                    <p class="lead">ResMan pulls historical data directly from your General Ledger ensuring data integrity allowing for greater efficiency in the work flow.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features light-grey">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 switch-right">
                <img class="img-responsive" src="../../img/products/budgeting-2.png">
            </div>
            <div class="col-sm-6 switch-left">
                <div class="content" style="margin-top: 0px;">
                    <h2>Automate Your Projections</h2>
                    <p>Using Historical Information ResMan users can forecast occupancy &amp; financial performance.</p>
                    <p>Project your renewal capture percentage, number of move-outs and number of move-ins using built in tools by unit type.</p>
                    <p>Looking for a more traditional approach? Define your budget with an annualized occupancy target that will populate the numbers needed to hit the target.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-features">
    <div class="container">
        <div class="row flip">
            <div class="col-sm-5 feature-image">
                <img class="img-responsive" src="../../img/products/budgeting-3.jpg">
            </div>
            <div class="col-sm-7">
                <div class="content" style="margin-top: 0px;">
                    <h2>Exports to Functional Excel Doc</h2>
                    <p class="lead">Export your final budget draft to a functional excel document.</p>
                    <p class="lead">Notations made in ResMan for special line items carry over to the excel export saving valuable time.</p>
                    <p class="lead">ResMan retains and tracks notations made be various team members through out the budgeting process. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ~~~~~~ NEXT/PREV ~~~~~~ -->
<!--section class="cta blue">
    <div class="container">
        <div class="tour col-md-5">
            <img src="../../img/arrow-left.png">
            <h2 class="white">Manage Ancillary Income</h2>
            <p class="lead white">
                Optimize Your Ancillary Revenue Generators and Stop Leaving Money on the Table.
            </p>
            <a href="<?php echo $site->baseUrl('products/revenue-tools') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
        <div class="or col-md-2">
            <span class="line"></span>
            <span class="text">OR</span>
        </div>
        <div class="demo col-md-5">
            <img src="../../img/arrow-right.png">
            <h2 class="white">Lead Management</h2>
            <p class="lead white">Set yourself apart from the competition and elevate your marketing to the next level.</p>
            <a href="<?php echo $site->baseUrl('products/lead-management') ?>" class="btn btn-cta btn-block">Check it out</a>
        </div>
    </div>
</section-->


<?php $site->cta() ?>
<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
