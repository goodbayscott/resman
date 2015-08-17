<?php
include '../php/config.php';
$site = new site();
$site->head("Integrations");
$site->nav() ?>
<!DOCTYPE html>
<section class="white">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 style="margin-top: 30px;">
                    Integrations
                </h2>
            </div>
            <div class="col-sm-4">
                <input type="text" id="filter" class="form-control" placeholder="Quick Search" style="margin-top: 30px;">
            </div>
        </div>
        <div class="clearfix"></div>
        <p class="lead">
            <br />
            We want to make sure that you have the best tools at your disposal as your business continues to grow.  Here's a few of the outstanding integrations we offer.

        </p>
    </div>
</section>
<section id="integration" class="integration">
    <div class="container">
        <div class="integration-row">
            <div class="col-sm-12">
                <div class="box-list isotope-active isotope">

                    <?php
                    foreach ($site->integrationCategories() as $c => $category) {
                        $isCategory = false;

                        foreach ($site->integrationPartners() as $i=>$integrate) {
                            if ($category == $integrate['category']) {
                                if ($isCategory == false) {
                                    $isCategory = true;
                                }
                                if ($integrate['url']=='#') {
                                    $ext = '/';
                                } else {
                                    $ext = '.php';
                                }
                                ?>

                                <div class="box-tile <?php echo substr($category, 0, 4) ?>" data-category="<?php echo substr($category, 0, 4) ?>">
                                    <div class="box-item">
                                        <a href="<?php echo $site->baseUrl('integrations/').$integrate['url'].$ext ?>">
                                            <img class="box-img" src="<?php echo $site->baseUrl('img/integration/'.$integrate['img']) ?>" >
                                            <div class="text">
                                                <?php echo $integrate['name'] ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>




                            <?php }
                          }?>
                 <?php } ?>


                    <!-- OLD SETUP TO GROUP ALL PARTNERS TOGETHER
                    <?php
                    //foreach ($site->integrationPartners() as $i=>$integrate) { ?>
                        <div class="box-item-container">
                            <a href="<?php //echo $site->baseUrl('integrations/').$integrate['url'].'/' ?>" class="box-item-wrapper tr">
                                <div class="box-item">
                                    <img src="<?php //echo $site->baseUrl('img/integration/'.$integrate['img']) ?>" >
                                    <div class="text">
                                        <?php //echo $integrate['name'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php //} ?>
                    -->

                </div>
            </div>
        </div>
        <div class="nav-wrap">
            <nav id="cat-nav" class="nav-title">
                Select By Category
            </nav>
            <div id="navigation" class="side-nav">
                <ul class="nav-list" data-group="categories">
                    <li class="nav-list-option">
                        <a id="#sel-all" href="#" class="category all" data-sort="">All</a>
                    </li>
                <?php
                    foreach ($site->integrationCategories() as $c => $category) {
                        $isCategory = false;
                        foreach ($site->integrationPartners() as $i=>$integrate) {
                            if ($category == $integrate['category']) {
                                if ($isCategory == false) {
                                    $isCategory = true;
                                    print '<li class="nav-list-option">
                                    <a id="#sel-'.substr($category, 0, 4).'" href="#" class="category" data-sort="'.substr($category, 0, 4).'">'.$category.'</a>
                                    </li>';
                                }
                                if ($integrate['url']=='#') {
                                    $ext = '/';
                                } else {
                                    $ext = '.php';
                                }
                            }
                        }
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php $site->footer() ?>
<?php $site->footerLinks()  ?>
