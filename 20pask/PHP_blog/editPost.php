<?php
require_once('./class/DB.php');
require_once('./class/functions.php');
$conn = new DB();

// sita refactorinom id zemiau esancias 3 eilutes
// // pasitikriname ar yra nustatytas id
// if (isset($_GET['id']) && !empty($_GET['id'])) {
//     // id yra gautas ir vygdom uzklausa
//     // padaryti reiksme gauta is get atributo saugia naudoti su mysql
//     $postID = mysqli_real_escape_string($conn->getConnection(), $_GET['id']);
//     $post = $conn->getPost($postID);
// } else {
//     die('id nenustatytas');
// }

$getArray = HelperFunctions::checkGetVar('id', $conn);
$postID = $getArray[0];
$post = $getArray[1];






// handle form input 
// pasitikrinti ar forma issiusta
if (isset($_POST['submitBtn'])) {
    // echo 'testing123';
    // die();
    // buvo paspausta issiusti forma
    // issisaugome formos irasus
    $title = $_POST['title'];
    $author = $_POST['author'];
    $body = $_POST['body'];
    // irasome i db
    $conn->updatePost($title, $author, $body, $postID);
    // isvalome post masyva
    $_POST = [];
    // nukreipti i pabgrini puslapi 
    // header('Location: index.php');
}





require_once './inc/head.php';
require_once './inc/nav.php';

?>

<section class="container">
    <h1 class="display-3 mt-2 mb-4">Edit Post</h1>

    <!-- forma naujam postui ikelti -->
    <form class="w-50" action="editPost.php?id=<?php echo $postID  ?>" method="post">
        <!-- one input -->
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="<?php echo $post['title']  ?>">
        </div>

        <!-- one input -->
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author" value="<?php echo $post['author']  ?>">
        </div>
        <!-- text area -->
        <div class="form-group">
            <label for="body">Enter your post text here</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"><?php echo $post['body'] ?></textarea>
        </div>
        <!-- submit button -->
        <button class="btn btn-lg btn-primary" name="submitBtn" type="submit">Edit Post</button>


    </form>
</section>


<?php
require_once './inc/footer.php';
?>