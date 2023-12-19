<?php get_header(); ?>
    <section id="ma__bio" class="ma__bio">
        <div class="ma__bio__content">
            <?php echo get_field("biography_part_1", 18); ?>    
        </div>
    </section>
    <section id="ma__works" class="ma__works">
        <div class="ma__works__content">
            <h2 class="ma__works__title">Works</h2>
            <div class="ma__works__slider">
                <?php
                    global $post;
                    $works_args = array(
                        'post_type' => 'works',
                        'post_status' => 'publish',
                        'numberposts' => 12
                    );

                    $works_posts = get_posts($works_args);

                    if(!empty($works_posts)) {
                        foreach($works_posts as $work) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($work->ID), 'full', false, '');
                ?>
                            <div class="ma__works__slider__item"> 
                                <div class="ma__works__slider__item__content">
                                    <img class="ma__works__slider__item__thumb" src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title($work->ID); ?>">
                                    <div class="ma__works__slider__item__info">
                                        <h2><?php echo get_the_title($work->ID); ?></h2>
                                        <span><?php echo get_field("subtitle", $work->ID) ?></span>
                                        <p><?php echo get_field("synopsis", $work->ID) ?></p>
                                        <a class="ma__works__slider__item__info__btn" href="<?php echo get_permalink($work->ID); ?>">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
        <div class="ma__works__slider__btn-next">
            →
        </div>
        <div class="ma__works__slider__btn-prev">
            ←
        </div>
    </section>
    <section id="ma__bio-additional" class="ma__bio-additional">
        <div class="ma__bio-additional__content">
            <?php echo get_field("biography_part_2", 18); ?>
        </div>
    </section>
    <section id="ma__contact" class="ma__contact">
        <div class="ma__contact__content">
            <h2 class="ma__contact__title">Hablemos</h2>
            <?php echo get_field("hablemos", 18); ?>
        </div>
    </section>

<?php get_footer(); ?>