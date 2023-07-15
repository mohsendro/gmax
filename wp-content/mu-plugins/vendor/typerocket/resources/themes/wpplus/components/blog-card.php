<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<div class="blog-card">
    <div class="info">
        <a href="<?php echo get_permalink($post->ID); ?>" class="thumbnail">
            <?php if( has_post_thumbnail($post->ID) ): ?>
                <?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
            <?php else: ?>
                <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/global/placeholder.webp" class="thumbnail">
            <?php endif; ?>
        </a>
        <ul class="detial line-clamp-1">
            <li><span><?php echo get_the_date('j F Y', $post->ID); ?></span></li>
            <li><span><?php echo get_the_author_meta('display_name', $post->post_author); ?></span></li>
            <!-- <li><a href="<?php // echo get_home_url() . '/author/' . get_the_author_meta('user_login', $post->post_author); ?>"><?php // echo get_the_author_meta('display_name', $post->post_author); ?></a></li> -->
        </ul>
    </div>
    <div class="content">
        <a href="<?php echo get_permalink($post->ID); ?>" class="title line-clamp-1"><?php echo $post->post_title; ?></a>
        <p class="desc line-clamp-3">
            <?php 
                if( $post->post_excerpt ) {
                    echo substr( sanitize_textarea_field($post->post_excerpt), 0, 250);
                } else {
                    echo substr( sanitize_textarea_field($post->post_content), 0, 250);
                }
            ?>
        </p>
    </div>
</div>