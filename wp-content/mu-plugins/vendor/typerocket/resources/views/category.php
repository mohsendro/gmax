<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<main id="main" class="main blogs">
    <section id="blog-archive" class="container blog-archive">
        <div class="row">
            <div class="col-12 column">
                <!-- Component Heading Start -->
                <div class="heading">
                    <div class="title"><?php echo $category->name; ?></div>
                </div>
                <!-- Component Heading End -->
            </div>
        </div>

        <?php if( $posts ): ?>
            <div class="row gap gx-3 gy-5">
                <?php foreach( $posts as $post ): ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 column">
                        <!-- Component Blog Card Start -->
                        <?php require TYPEROCKET_DIR_PATH . '/resources/views/components/blog-card.php'; ?>
                        <!-- Component Blog Card End -->
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Component Not Result Start -->
            <?php require TYPEROCKET_DIR_PATH . '/resources/views/components/not-result.php'; ?>
            <!-- Component Not Result End -->
        <?php endif; ?>

        <?php
            if( $count > 0 ):
                require TYPEROCKET_DIR_PATH . '/functions/snippets/pagination.php';
                insertPagination(home_url('category/' . $category->slug . '/page'), $current_page, $total_page, true);
            endif;
        ?>

        <?php if( $category->description ): ?>
            <div class="row">
                <div class="col-12 column">
                    <div class="seo-desc">
                        <?php echo $category->description; ?>
                    </div>
                </div>
            </div>  
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>