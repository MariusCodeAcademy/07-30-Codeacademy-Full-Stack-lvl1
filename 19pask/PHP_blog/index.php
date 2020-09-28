<?php
require_once('./class/DB.php');
$conn = new DB();


require_once './inc/head.php';
require_once './inc/nav.php';
?>





<div class="container">
    <h1 class="display-3 mt-2 mb-4">PHP blog</h1>


    <div class="card-container d-flex flex-wrap ">

        <!-- One Card -->
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">First Post</h5>
                <h6 class="card-subtitle mb-2 text-muted">John Dow</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quod molestias eveniet alias animi? Adipisci fuga non officia laboriosam, amet reprehenderit, commodi molestiae veniam velit recusandae quia </p>
            </div>
            <div class="card-footer">
                <a href="#" class="card-link d-block">View more</a>
                <p class="text-muted">2020-09-15</p>
            </div>
        </div>
        <!-- /One Card End -->

        <!-- One Card -->
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">First Post</h5>
                <h6 class="card-subtitle mb-2 text-muted">John Dow</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quod molestias eveniet alias animi? Adipisci fuga non officia laboriosam, amet reprehenderit, commodi molestiae veniam velit recusandae quia </p>
            </div>
            <div class="card-footer">
                <a href="#" class="card-link d-block">View more</a>
                <p class="text-muted">2020-09-15</p>
            </div>
        </div>
        <!-- /One Card End -->

        <!-- One Card -->
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">First Post</h5>
                <h6 class="card-subtitle mb-2 text-muted">John Dow</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quod molestias eveniet alias animi? Adipisci fuga non officia laboriosam, amet reprehenderit, commodi molestiae veniam velit recusandae quia </p>
            </div>
            <div class="card-footer">
                <a href="#" class="card-link d-block">View more</a>
                <p class="text-muted">2020-09-15</p>
            </div>
        </div>
        <!-- /One Card End -->
    </div>
    <!-- end card container -->




    <?php




    ?>

</div>
<!-- container end -->




<?php
require_once './inc/footer.php';
?>