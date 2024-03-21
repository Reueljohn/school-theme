<?php
/**
 * The template for displaying the Archive in the school student catagory
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package School_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </header><!-- .page-header -->

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            ?>
            <article class="student-entry-categories">
                <h2 class="student-title"><?php the_title(); ?></h2> 
				<a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'student-crop', array( 'class' => 'alightleft' ) ); ?> 
                    </a>
                <div class="student-content">
                    <?php the_content(); ?> 
                </div>

            </article>
            <?php
        endwhile;

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
