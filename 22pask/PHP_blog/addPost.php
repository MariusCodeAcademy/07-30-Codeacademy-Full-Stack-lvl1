<?php
require_once('./class/DB.php');
$conn = new DB();

// handle form input
// pasitikrinti ar forma issiusta
if (isset($_POST['submitBtn'])) {
    // buvo paspausta issiusti forma
    // issisaugome formos irasus
    $title = $_POST['title'];
    $author = $_POST['author'];
    $body = $_POST['body'];
    // irasome i db
    $conn->addPost($title, $author, $body);
    // isvalome post masyva
    $_POST = [];
    // nukreipti i pabgrini puslapi 
    header('Location: index.php');
}

$currentPage = 'addPost';

require_once './inc/head.php';
require_once './inc/nav.php';

?>

<section class="container">
    <h1 class="display-3 mt-2 mb-4">Add new Post</h1>

    <!-- forma naujam postui ikelti -->
    <form class="w-50" action="addPost.php" method="post">
        <!-- one input -->
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>

        <!-- one input -->
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author">
        </div>
        <!-- text area -->
        <div class="form-group">
            <label for="body">Enter your post text here</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <!-- submit button -->
        <button class="btn btn-lg btn-primary" name="submitBtn" type="submit">Add Post</button>


    </form>
</section>

<section class="container">
    <h2 class="display-4">Ajax posts</h2>
    <button id="loadBtn" class="btn btn-info"> Load Posts</button>
    <div id="app">

    </div>
</section>

<script>
    // iskeliam elementus su kuriais dirbsim i JS
    const appEl = document.getElementById('app');
    const loadBtn = document.getElementById('loadBtn');

    // paspaudimo pasiklausymas
    loadBtn.addEventListener('click', function(e) {

        //fetch is the new ajax
        fetch('./fetch.php')
            .then(function(response) {
                return response.text();
            })
            .then(function(text) {
                // console.log(text)
                appEl.innerHTML = text;
            })

        // asinchroninis pavyzdys
        console.log('pirmas logas');
        setTimeout(function() {
            console.log('antras logas');
        }, 2000);
        console.log('trecias logas');

        // appEl.innerHTML = text;

        // atliekam veiksmus su el. 
        // appEl.innerHTML = fetchtext;
    });
</script>





<?php
require_once './inc/footer.php';
?>