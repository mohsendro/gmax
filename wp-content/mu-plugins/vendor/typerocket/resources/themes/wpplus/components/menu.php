<!-- Header Start -->
<header id="header" class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-1 col-xl-1 col-xl-1 logo-column column order-2 order-xl-1">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/global/logo.png" alt="logo" width="auto" height="auto">
                </a>
            </div>

            <div class="col-6 col-sm-5 col-xl-7 col-xl-7 menu-column column order-1 order-xl-2">
                <div class="stellarnav">
                    <?php
                        $args = array(
                            'menu'		=> "main_menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'container'	=> "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 col-xl-4 link-column column order-3 order-xl-3">
                <a href="<?php echo get_home_url() . '/?s='; ?>" class="btn btn-search d-block d-xl-none"><i class="las la-search"></i></a>
                <button class="btn btn-search d-none d-xl-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchOffcanvasTop" aria-controls="offcanvasTop"><i class="las la-search"></i></button>
                <a href="tel:02191095659" class="btn btn-call"><span class="d-none d-xl-block">021-<strong>91095659</strong></span><i class="las la-phone"></i></a>
                <a href="https://panel.gmaxads.com/index.php?rp=/login" target="_blank" type="button" class="btn btn-login"><span class="d-none d-xl-block">ورود | ثبت نام</span><i class="las la-user"></i></a>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Search Offcanvas Start -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="searchOffcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="<?php echo get_home_url('/?s=')?>" method="get">
            <input type="text" name="s" class="form-control">
            <button type="submit" class="btn"><span class="d-none d-xl-block">جستجو</span><i class="las la-search"></i></button>
        </form>
    </div>
</div>
<!-- Search Offcanvas End -->