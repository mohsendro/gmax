<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="blog-card">
    <div class="info">
        <a href="<?php echo get_permalink($related_post->ID); ?>" class="thumbnail">
            <?php if( has_post_thumbnail($related_post->ID) ): ?>
                <?php echo get_the_post_thumbnail( $related_post->ID, 'medium' ); ?>
            <?php else: ?>
                <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/global/placeholder.webp" class="thumbnail">
            <?php endif; ?>
        </a>
        <ul class="detial line-clamp-1">
            <li><span><?php echo get_the_date('j F Y', $related_post->ID); ?></span></li>
            <li><span><?php echo get_the_author_meta('display_name', $related_post->post_author); ?></span></li>
            <!-- <li><a href="<?php // echo get_home_url() . '/author/' . get_the_author_meta('user_login', $related_post->post_author); ?>"><?php // echo get_the_author_meta('display_name', $related_post->post_author); ?></a></li> -->
        </ul>
    </div>
    <div class="content">
        <a href="<?php echo get_permalink($related_post->ID); ?>" class="title line-clamp-1"><?php echo $related_post->post_title; ?></a>
        <p class="desc line-clamp-3">
            <?php 
                if( $related_post->post_excerpt ) {
                    echo substr( $related_post->post_excerpt, 0, 250);
                } else {
                    echo substr( $related_post->post_content, 0, 250);
                }
            ?>
        </p>
    </div>
</div>