<?php include __DIR__ . '/header.php'; ?>

<main id="main" class="main page">
    <section id="page-content" class="container-fluid page-content">
        <div class="row">
            <div class="col-12 column">
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/footer.php'; ?>