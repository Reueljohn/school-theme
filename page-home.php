<?php
/**
 * Template Name: Custom Front Page
 * Description: A custom template for the front page.
 */

 get_header();
 ?>

<div class="page-content">
             <?php
             // Output the content added using the block editor
             while (have_posts()) : the_post();
                 the_content();
             endwhile;
             ?>
         </div>
     </main><!-- #main -->
 </div><!-- #primary -->
 
 <div id="primary" class="content-area">
     <main id="main" class="site-main">
         <div class="latest-posts">
             <?php
             $args = array(
                 'post_type'      => 'post',
                 'posts_per_page' => 3,
             );
             $query = new WP_Query($args);
 
             if ($query->have_posts()) :
                 while ($query->have_posts()) :
                     $query->the_post();
             ?>
             <div class="post">
                 <h2 class="post-title"><?php the_title(); ?></h2>
                 <div class="post-thumbnail">
                     <?php
                     if (has_post_thumbnail()) {
                         the_post_thumbnail('medium');
                     }
                     ?>
                 </div>
             </div>
             <?php
                 endwhile;
                 wp_reset_postdata(); // Reset the post data
             endif;
             ?>
         </div>
 
         
 
 <?php
 get_footer();
 ?>