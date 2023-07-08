<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

    <!-- Footer Start -->
    <section id="footer" class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-12 about-column column order-1">
                    <a href="<?php echo get_home_url(); ?>" class="logo"><img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/global/logo.png" alt="logo" width="auto" height="auto"></a>
                    <span class="desc">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </span>
                </div>
            </div>

            <div class="row content-row">
                <div class="col-12 col-xl-6 url-column column order-3 order-xl-2">
                    <div class="links">
                        <div class="title">خدمات gmax</div>
                        <ul>
                            <li><a href="#">تبلیغ در یوتیوب</a></li>
                            <li><a href="#">تبلیغ در گوگل</a></li>
                            <li><a href="#">طراحی وب سایت</a></li>
                            <li><a href="#">خدمات سئو</a></li>
                        </ul>
                    </div>

                    <div class="links">
                        <div class="title">با gmax</div>
                        <ul>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">وبلاگ</a></li>
                            <li><a href="#">پلن ها</a></li>
                        </ul>
                    </div>

                    <div class="links">
                        <div class="title">با gmax</div>
                        <ul>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">وبلاگ</a></li>
                            <li><a href="#">پلن ها</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-xl-4 access-column column order-2 order-xl-3">
                    <div class="title">راه‌های ارتباطی</div>
                    <div class="address">تهران، خیابان وزرا، خیابان هفتم، برج ماموت طبقه دوم</div>
                    <ul class="line">
                        <li class="email"><a href="mailto:info@gmaxads.com"><i class="las la-at"></i>info@gmaxads.com</a></li>
                        <li class="phone"><a href="tel:02191095659"><i class="las la-phone"></i><span>021-<strong>91095659</strong></span></span></a></li>
                        <li class="phone"><a href="tel:09102716553"><i class="las la-phone"></i><strong>09102716553</strong></span></a></li>
                    </ul>
                    <ul class="socials">
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-linkedin"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-whatsapp"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-youtube"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-telegram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row newsletter mt-5">
                <div class="col-12 col-xl-6 content-column column">
                    <div class="title">عضویت در خبرنامه</div>
                    <div class="desc">برای اطلاع از مطالب مفید در مورد جیمکس و اطلاع از کمپین‌ها عضو شوید.</div>
                </div>
                <div class="col-12 col-xl-6 form-column column">
                    <form method="post" class="zone" id="newsletter">
                        <input type="email" name="email" placeholder="ایمیل خود را وارد کنید" require>
                        <button type="button" onclick="newsletterAjaxJs()">
                            <i class="las la-envelope-open-text"></i>
                            <span class="bodymovin"></span>
                            <span class="text">ارسال ایمیل</span>
                        </button>
                    </form>

                    <?php // echo do_shortcode('[contact-form-7 id="25" title="خبرنامه"]'); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12 column">
                    <div class="copyright">
                        © 1402 - تمام حقوق برای شرکت Gmax محفوظ است.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->   

    <?php wp_body_open(); ?>
    <?php wp_footer(); ?>

    <!-- AOS Js -->
    <script>AOS.init();</script>
</body>
</html>