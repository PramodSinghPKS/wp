<?php get_header(); ?>
    <section id="ma__single" class="ma__single">
        <div class="ma__single__content">
            <div class="ma__single__header">
                <a class="ma__single__header__btn-home" href="<?php echo get_home_url(); ?>">Volver al Home</a>
            </div>
            <div class="ma__single__header__thumb">
                <?php
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', false, '');
                ?>
                <img src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title(); ?>">
            </div>
        </div>
        <div class="ma__single__info">
            <h2><?php echo get_the_title(); ?></h2>
            <span><?php echo get_field("subtitle"); ?></span>
            <?php echo get_field("description"); ?>
        </div>
        <?php the_content(); ?>
        <ul class="ma__single__control-links">
            <?php 
                $prev_post = get_previous_post();
                if($prev_post) {
                    echo '<li><a href="'.get_permalink($prev_post->ID).'">Anterior</a></li>';
                }
                $next_post = get_next_post();
                if($next_post) {
                    echo '<li><a href="'.get_permalink($next_post->ID).'">Siguiente</a></li>';
                }
            ?>
        </ul>
    </section> 
<?php get_footer(); ?>