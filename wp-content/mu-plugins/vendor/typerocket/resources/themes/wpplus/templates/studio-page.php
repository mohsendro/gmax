<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه استودیو یوتیوب جیمکس */ ?>

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

    $meta = get_post_meta( $queried_id, 'pageInfo', true );
?>

<main id="main" class="main studio">
    <section id="hero" class="container-fluid hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 content-column column">
                    <h1 class="title">استودیو یوتیوب جیمکس</h1>
                    <p class="desc">
                        جیمکس ادز برای یوتیوبرهایی که محتوای ارزشمند تولید می کنند شرایط ویژه ای را فراهم نموده. شما می توانید با استفاده از تجهیزات استودیو یوتیوب جیمکس ادز، و ادیتور های با تجربه ی ما، کیفیت کار خود را بالاتر ببرید.
                    </p>
                    <ul class="details">
                        <li>۵۰ متر فضای استودیو با دکورهای متنوع</li>
                        <li>پرده سبز و فون های رنگی دیگر</li>
                        <li>ادیتور های حرفه ای برای بهتر کردن خروجی ویدئو شما</li>
                        <li>امکان سرمایه گذاری بر روی کانال های یوتیوبی شما</li>
                    </ul>
                    <!-- Component Button Start -->
                    <a href="https://panel.gmaxads.com/" class="btn-default" target="_blank">
                        <button type="button" class="btn">
                            <span>ثبت نام</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                    <!-- Component Button End -->
                </div>

                <div class="col-12 col-xl-6 img-column column">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/studio.gif" alt="seo">
                </div>
            </div>
        </div>
    </section>

    <section id="introducing" class="container introducing">
        <div class="row">
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box19.png" alt="">
                    </div>
                    <div class="title">شناخت دقیق علایق ویورها</div>
                    <div class="desc">
                        با استفاده از تبلیغات در گوگل، می توانید مشتریان را با فروشگاه خود آشنا کنید
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box20.png" alt="">
                    </div>
                    <div class="title">هزینه مقرون به صرفه</div>
                    <div class="desc">
                        هزینه اجاره ی استودیو به کمترین شکل ممکن دیده شده. استفاده از استودیو برای محتواهای ارزشمند به صورت سرمایه گذاری خواهد بود
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box21.png" alt="">
                    </div>
                    <div class="title">رشد کانال شما</div>
                    <div class="desc">
                        در بازه ی کوتاه می توانید کیفیت کانال یوتیوب خود را چندین برابر نمایید
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
        </div>
    </section>

    <?php if( $meta['tables'] ): ?>
        <section id="pricing" class="container pricing">
            <div class="row">
                <?php $i = 0; ?>
                <?php foreach( $meta['tables'] as $tables ): ?>
                    <div class="col-12 column">
                        <div class="head dolar-head <?php if( $i != 0 ) echo 'dirham-head'; ?>"><?php echo $tables['title']; ?></div>
                    </div>

                    <?php if( $tables['plans'] ): ?>
                        <div class="col-12 col-xl-10 mx-auto column">
                            <div class="pricing-content dolar-table">
                                <?php foreach( $tables['plans'] as $plan ): ?>
                                    <div class="plan <?php if( $plan['special'] ) echo 'popular'; ?>" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                                        <?php if( $plan['special'] ): ?>
                                            <span class="comment">پیشنهاد ما</span>
                                        <?php endif; ?>
                                        <div class="title"><?php echo $plan['title']; ?></div>
                                        <p class="offer"><?php echo $plan['subtitle']; ?></p>
                                        <div class="price"><?php echo number_format($plan['price']); ?><span class="format">تومان</span><span class="postfix">هر ساعت</span></div>
                                        <?php if( $plan['desc'] ): ?>
                                            <ul class="features">
                                                <?php foreach( $plan['desc'] as $des ): ?>
                                                    <?php if( $des['type'] ): ?>
                                                        <li>
                                                            <i class="las la-check"></i>
                                                            <span class="check"><?php echo $des['feacher']; ?></span>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <i class="las la-exclamation"></i>
                                                            <span class="check"><?php echo $des['feacher']; ?></span>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <a href="<?php echo $plan['link']['url']; ?>" target="_blank" class="link">تماس با ما</a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
    
    <section id="studio-info" class="container-fluid studio-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7 order-1 order-xl-1 content-column column">
                    <h2 class="title">دعوت به همکاری از تدوینگران به صورت پروژه ای</h2>
                    <p class="desc">
                        با توجه به حجم قابل توجه ویدئوهای تولید شده توسط یوتیوبرهای شرکت جیمکس ادز و تمایل این دوستان به استفاده از تدوین و ادیت ویدئو به صورت برون سپاری و پروژه ای، از شما دوستان تدوینگر، دعوت می شود با اعلام آمادگی خود در پنل وب سایت جیمکس ادز، تمایل خود را به همکاری با این مجموعه اعلام فرمایید.
                    </p>
                    <p class="desc">
                        برای اعلام همکاری در وب سایت ثبت نام کرده و تیکت ثبت نمایید.
                    </p>
                    <!-- Component Button Start -->
                    <a href="https://panel.gmaxads.com/" class="btn-default" target="_blank">
                        <button type="button" class="btn">
                            <span>ثبت نام</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                    <!-- Component Button End -->
                </div>

                <div class="col-12 col-xl-5 order-2 order-xl-2 img-column column">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/monetization-studio.jpg" alt="budget">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="container cta">
        <div class="row">
            <div class="col-12 column">
                <!-- Component CTA Start -->
                <div class="content-cta">
                    <div class="title">
                        <strong>اگر همچنان سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید</strong>
                        <p>برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید</p>
                    </div>
                    <a href="https://gmaxads.com/contact-us/" class="btn-cta" target="_blank">
                        <button type="button" class="btn">
                            <span>همین الان مشاوره بگیرید</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                </div>
                <!-- Component CTA End -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>