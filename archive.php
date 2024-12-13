<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1 class="page-title">
                <?php the_archive_title(); ?>
            </h1>
        </header>

        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_title();

            endwhile;

            the_posts_pagination();

        else:
            // If there are no posts to display, add a "No posts found" message or a search form.
        endif;
        ?>
    </main>
</div>

<?php
get_sidebar(); // Include the sidebar (if you have one)
get_footer(); // Include the footer
?>