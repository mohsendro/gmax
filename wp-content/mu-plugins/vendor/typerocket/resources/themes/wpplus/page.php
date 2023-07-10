<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<?php
    $queried_id = get_queried_object_id();
?>

<main id="main" class="main page">
    <section id="page-content" class="container page-content">
        <div class="row">
            <div class="col-12 column">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>