<?php
/*
Template Name: page
*/
get_header(); ?>

<main>

    <section class="block1">
        <div class="container">
            <div class="block1-wrap">

                <?php if(have_posts()) : ?>
                    <?php while(have_posts())  : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
                <?php endif; ?>

            </div>
        </div>
    </section>

</main>

<?php
get_footer(); ?>