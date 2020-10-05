<?php

class HelperFunctions
{
    // statiniai metodai
    public static function checkGetVar($getVar, $conn)
    {
        // pasitikriname ar yra nustatytas id
        if (isset($_GET[$getVar]) && !empty($_GET[$getVar])) {
            // id yra gautas ir vygdom uzklausa
            // padaryti reiksme gauta is get atributo saugia naudoti su mysql
            $postID = mysqli_real_escape_string($conn->getConnection(), $_GET[$getVar]);
            $post = $conn->getPost($postID);
            //index    0        1
            return [$postID, $post];
        } else {
            die('id nenustatytas');
        }
    }

    // metodas sugeneruoti postams is db i html
    public static function renderPostsContainerHtml($conn)
    {
        // gauname duomenis is lenteles
        $postsArray = $conn->getPostsArray();
?>
        <!-- PRADZIA================== -->

        <div class="card-container d-flex flex-wrap ">

            <?php
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

            ?>

        </div>
        <!-- end card container -->
        <!-- PABAIGA================== -->
<?php
    } // render f pabaiga
}// END helper Func
