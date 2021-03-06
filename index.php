<?php 
    require 'includes/config.php';
    require 'partials/header.php';
    require 'partials/navigation.php';
    require 'partials/footer.php';
    $projects = getProjects($dbh);
?>


<!-- Start of Content -->
<div class="container">
    <div class="row">
    <!-- Your loop will start here and loop through the card markup -->
    <?php foreach ($projects as $project):?>
        <!-- Start of Card -->
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading card-header">
                    <img class="img-responsive" src="<?= $project['image_url'] ?>">
                </div>

                <div class="panel-body">
                    <h4><?= $project['title'] ?></h4>
                    <p>
                        <?= $project['content'] ?>
                    </p>
                    <a href="<?= $project['link'] ?>" class="btn btn-default btn-xs">
                        View
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Card -->
    <?php endforeach; ?>
    

    </div>
</div>
