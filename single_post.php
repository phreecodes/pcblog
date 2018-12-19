<?php include "header.php" ?>
<section role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From my Journal!
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title"><?=$post['title']; ?></h2>
                <p class="blog-post-meta"><?=date("M d, Y", strtotime($post['date_added'])); ?> by <a href="//twiter.com/EkanemEvidence?=09">Evidoski</a></p>

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