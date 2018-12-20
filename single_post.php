<<<<<<< HEAD
<?php include "header.php";
include_once("connection.php");
$id = $_GET['id'];
$getContent = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($getContent);
$posts = $result->fetchAll(PDO::FETCH_ASSOC);
foreach($posts as $key=>$post)
$getUser = "SELECT * FROM users"
?>

=======
<?php
    $id = (int) $_GET['id'];
    include_once "connection.php";
    $sql = "SELECT * FROM posts WHERE id=$id";

    $result = $conn->query($sql);

    $post = $result->fetch(PDO::FETCH_ASSOC);

    if(!$post) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

    include "header.php";

?>
>>>>>>> 52d058877d28f28b5f53a63309450baaca9c528d
<section role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From my Journal!
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title"><?=$post['title']; ?></h2>
                <p class="blog-post-meta"><?=date("M d, Y", strtotime($post['post_date'])); ?> by <a href="//twiter.com/EkanemEvidence?=09">Evidoski</a></p>

                <p>
                    <?=$post['content']; ?>
                </p>

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="https://getbootstrap.com/docs/4.1/examples/blog/#">Newer</a>
                </nav>
            </div>

        </div>
    </div><!-- /.row -->

</section>
<?php include "footer.php" ?>