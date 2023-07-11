<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<?php
    $queried_id = get_queried_object_id();
    
    $option = new \App\Models\Option;
    $where_option = [
        [
            'column'   => 'option_name',
            'operator' => '=',
            'value'    => 'posts_per_page'
        ]
    ];
    $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
    $option = $option[0]['option_value'];

    $cat_terms = get_the_terms($post->ID, 'category');
    $tag_terms = get_the_terms($post->ID, 'post_tag');

    $category = new \App\Models\Category;
    $cat_id = get_post_meta($post->ID, 'rank_math_primary_category', true);
    if( ! $cat_id ) {
        $cat_id = get_the_category($post->ID);
        $cat_id = $cat_id[0]->term_id;
    }
    $cat_term = get_term($cat_id);
    $related_posts = $category->findById($cat_id)->posts()->take($option, 0)->get();
?>

<main id="main" class="main single">
    <section id="blog-single" class="container blog-single">
        <div class="row top-content gap gx-5 gy-3">
            <div class="col-12 col-xl-7 excerpt-column column">
                <h1 class="title"><?php echo $post->post_title; ?></h1>
                <?php if($post->post_excerpt): ?>
                    <p class="expert"><?php echo $post->post_excerpt; ?></p>
                <?php endif; ?>

                <div class="share">
                    <span class="text">اشتراک گذاری در شبکه‌های اجتماعی:</span>
                    <ul class="icon">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>" target="_blank"><i class="lab la-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink($post->ID); ?>&text=" target="_blank"><i class="lab la-twitter-square"></i></a></li>
                        <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($post->ID); ?>&title=" target="_blank"><i class="lab la-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-xl-5 thumbnail-column column">
                <?php if( has_post_thumbnail($post->ID) ): ?>
                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                <?php else: ?>
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>/resources/assets/img/global/placeholder.webp" class="thumbnail">
                <?php endif; ?>
            </div>
        </div>

        <?php if( $post->post_content ): ?>
            <div class="row main-content">
                <div class="col-12 column">
                    <div class="content"><?php the_content(); ?></div>
                </div>
            </div> 
        <?php endif; ?>

        <?php if( $cat_terms || $tag_terms ): ?>
            <div class="row buttom-content">
                <div class="col-12 column">
                    <?php if( $cat_terms ): ?>
                        <div class="category">
                            <?php foreach( $cat_terms as $cat_term ): ?>
                                <a href="<?php echo get_home_url() . '/category/' . $cat_term->slug; ?>"><?php echo $cat_term->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( $tag_terms ): ?>
                        <div class="tag">
                            <?php foreach( $tag_terms as $tag_term ): ?>
                                <a href="<?php echo get_home_url() . '/tag/' . $tag_term->slug; ?>"><?php echo $tag_term->name; ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div> 
        <?php endif; ?>

        <?php if( $related_posts ): ?>
            <div class="row related">
                <div class="col-12 column">
                    <!-- Component Heading Start -->
                    <div class="heading">
                        <div class="title">مقالات مرتبط</div>
                        <div class="link">
                            <div class="navigation d-none d-sm-block">
                                <div class="nav next blogswiper-button-next"><i class="las la-angle-right"></i></div>
                                <div class="nav prev blogswiper-button-prev"><i class="las la-angle-left"></i></div>
                            </div>
                            <a href="<?php echo get_home_url() . '/category/' . $cat_term->slug; ?>" class="more">
                                <button type="button" class="btn">
                                    <span>مشاهده بیشتر</span>
                                    <i class="las la-paperclip"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Component Heading End -->
                </div>

                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            <?php foreach( $related_posts as $related_post ): ?>
                                <div class="swiper-slide">
                                    <!-- Component Blog Card Start -->
                                    <?php require TYPEROCKET_DIR_PATH . '/resources/views/components/related-card.php'; ?>
                                    <!-- Component Blog Card End -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div> 
        <?php endif; ?>

        <?php
            if( comments_open() || get_comments_number() ) :
                // comments_template();
            endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>