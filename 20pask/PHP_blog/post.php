<?php
require_once('./class/DB.php');
$conn = new DB();
// print_r($conn);
// die();





require_once './inc/head.php';
require_once './inc/nav.php';




// pasitikriname ar yra nustatytas id
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // id yra gautas ir vygdom uzklausa
    // padaryti reiksme gauta is get atributo saugia naudoti su mysql
    $postID = mysqli_real_escape_string($conn->getConnection(), $_GET['id']);
    $post = $conn->getPost($postID);
} else {
    die('id nenustatytas');
}


// delete formos funkcionalumas
if (isset($_POST['deleteBtn'])) {
    // buvo paspausta delete
    // posto istrynimas

    $conn->deletePost($postID);
    //redirect to home page
    header('Location: index.php');
}




// print_r($post);
// die();
?>
<div class="container">
    <h1 class="display-3 my-4"><?php echo $post['title'] ?></h1>
    <!-- One Card -->
    <div class="card m-2">
        <div class="card-body">
            <h5 class="card-title"><?php echo $post['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['author'] ?></h6>
            <p class="card-text"><?php echo $post['body'] ?></p>
        </div>
        <div class="card-footer">
            <a href="editPost.php?id=<?php echo $postID ?>" class="card-link btn btn-outline-info ">Edit Post</a>
            <form class="float-right" action="post.php?id=<?php echo $postID ?>" method="post">
                <button name="deleteBtn" type="submit" class="btn btn-danger ">Delete post</button>
            </form>

            <p class="text-muted">Created at: <?php echo $post['created_at'] ?></p>
        </div>
    </div>
    <!-- /One Card End -->
</div>










<?php
require_once './inc/footer.php';
?>