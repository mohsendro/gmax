<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تماس با ما */ ?>

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
?>

<main id="main" class="main contact">
    <section id="contact-info" class="container contact-info">
        <div class="row">
            <div class="col-12 col-xl-6 content-column column">
                <div class="contiguity">
                    <div class="head">آدرس:</div>
                    <div class="address">تهران، خیابان وزرا، خیابان هفتم، برج ماموت طبقه دوم</div>
                </div>
                <div class="contiguity">
                    <div class="head">راه های ارتباطی:</div>
                    <ul class="line">
                        <li class="email"><a href="mailto:info@gmaxads.com"><i class="las la-at"></i>info@gmaxads.com</a></li>
                        <li class="phone"><a href="tel:02191095659"><i class="las la-phone"></i><span>021-<strong>91095659</strong></span></a></li>
                        <li class="phone"><a href="tel:09102716553"><i class="las la-phone"></i><strong>09102716553</strong></a></li>
                    </ul>
                    <ul class="socials">
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-linkedin"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-whatsapp"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-youtube"></i></a></li>
                        <li><a href="#" target="_black" rel="nofollow"><i class="lab la-telegram"></i></a></li>
                    </ul>
                </div>
                <div class="contiguity">
                    <div class="head">ساعات کاری:</div>
                    <div class="time"><strong>شنبه تا چهارشنبه</strong>8 الی 18</div>
                    <div class="ticket">پشتیبانی تیکت ۲۴ ساعته</div>
                </div>
            </div>

            <div class="col-12 col-xl-6 map-column column">
                <iframe src="https://balad.ir/embed?p=Pk4kxaDcoROLyB" title="مشاهده «ماموت خودرو» روی نقشه بلد" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>