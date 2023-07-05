<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<main id="main" class="main blogs">
    <section id="blog-archive" class="container blog-archive">
        <div class="row">
            <div class="col-12 column">
                <!-- Component Heading Start -->
                <div class="heading">
                    <div class="title">آخرین اخبار و بلاگ</div>
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
                insertPagination(home_url('blog/page'), $current_page, $total_page, true);
            endif;
        ?>

        <div class="row">
            <div class="col-12 column">
                <div class="seo-desc">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
            </div>
        </div>  
    </section>
</main>

<?php get_footer(); ?>