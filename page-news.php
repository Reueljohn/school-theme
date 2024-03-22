<script>
AOS.init({
    duration: 500,
    delay: 200,
  });
</script>
<?php
/*
Template Name: News Template
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // The WordPress Loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();

                // Display page content
                the_content();

            endwhile;
        else :
            // If no content, include the "No posts found" template
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

        <?php
        // Query to fetch latest blog posts
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3, // Change the number of posts to display
            'meta_key' => '_thumbnail_id' // Exclude posts without featured images
        );
        $query = new WP_Query($args);

        // The WordPress Loop for displaying blog posts
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>

            <article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </header>

                    <div class="entry-content" >
                        <?php
                        if (has_post_thumbnail()) {
                            // Display featured image
                            the_post_thumbnail('large');
                        }
                        ?>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </article>
                
        <?php
            endwhile;
            wp_reset_postdata(); // Reset the post data
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar(); // Include sidebar
get_footer();