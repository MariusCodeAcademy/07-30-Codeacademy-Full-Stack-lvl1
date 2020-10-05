<?php
require_once('./class/DB.php');
require_once('./class/functions.php');
$conn = new DB();

$currentPage = 'homePage';
require_once './inc/head.php';
require_once './inc/nav.php';
?>





<div class="container">
    <h1 class="display-3 mt-2 mb-4">PHP blog</h1>

    <?php
    HelperFunctions::renderPostsContainerHtml($conn);
    ?>

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