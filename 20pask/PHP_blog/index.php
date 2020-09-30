<?php
require_once('./class/DB.php');
$conn = new DB();

$currentPage = 'homePage';
require_once './inc/head.php';
require_once './inc/nav.php';
?>





<div class="container">
    <h1 class="display-3 mt-2 mb-4">PHP blog</h1>



    <div class="card-container d-flex flex-wrap ">

        <?php
        // gauname duomenis is lenteles
        $postsArray = $conn->getPostsArray();


        foreach ($postsArray as $post) { ?>

            <!-- One Card -->
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['author'] ?></h6>
                    <p class="card-text"><?php echo $post['body'] ?></p>
                </div>
                <div class="card-footer">
                    <a href="post.php?id=<?php echo $post['id'] ?>" class="card-link d-block"> <i class="fa fa-book" aria-hidden="true"></i> Read Post</a>
                    <p class="text-muted">Created at: <?php echo $post['created_at'] ?></p>
                </div>
            </div>
            <!-- /One Card End -->

        <?php };
        // pasibandom ar veikia delete
        // $conn->deletePost(2);
        ?>





    </div>
    <!-- end card container -->



    <pre>
    <?php
    // sukurti nauja lentele duomenu bazeje
    // $conn->createPostsTable();

    // irasyti nauja irasa i db lentele
    // $conn->addPost('First post', 'Jane Jonson', 'This is our first post from DB method');

    // pasibandome gauti duomenis masyvo pavidalu
    // $postsArray = $conn->getPostsArray();

    // print_r($postsArray);


    ?>
    </pre>

</div>
<!-- container end -->




<?php
require_once './inc/footer.php';
?>