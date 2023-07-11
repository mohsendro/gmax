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

    $post = new \App\Models\Post;
    $search_query = get_search_query();
    $where_post = [
        [
            'column'   => 'post_status',
            'operator' => '=',
            'value'    => 'publish'
        ],
        'AND',
        [
            'column'   => 'post_title',
            'operator' => 'like',
            'value'    =>  '%'.$search_query.'%'
        ]
    ];
    $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC');
    $posts_data = $posts; 
    $posts = $posts->get();
    
    if( $posts != null || $posts > 0 ) {

        $count = $posts->count();
        $total_page = ceil($count / $option);

        if( isset($_GET['page']) && intval($_GET['page']) ) {
            $current_page = $_GET['page'];
        } else {
            $current_page = 1;
        }
        
        if( isset($_GET['page']) && intval($_GET['page']) ) {
            if( (intval($_GET['page']) <= $total_page) && (intval($_GET['page']) >= 1) ) {
                $posts = $posts_data->take($option, (intval($_GET['page'])-1)*$option)->get();
                // if( $_GET['page'] == 1 ) {
                    //     $url = '/?s='.$search_query;
                    //     wp_safe_redirect($url);
                // }
            } else {
                return include( get_query_template( '404' ) );
            } 
        } else {
            $posts = $posts_data->take($option, 0)->get();
        }

    } else {

        $posts = [];
        $count = 0;
        $total_page = 0;
        $current_page = 0;
        
    }
?>

<main id="main" class="main blogs">
    <section id="blog-archive" class="container blog-archive">
        <div class="row">
            <div class="col-12 column">
                <!-- Component Heading Start -->
                <div class="heading">
                    <div class="title"><?php echo $search_query; ?></div>
                </div>
                <!-- Component Heading End -->
            </div>
        </div>

        <?php if( $posts && ! empty($search_query) ): ?>
            <div class="row gap gx-3 gy-5">
                <?php foreach( $posts as $post ): ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 column">
                        <!-- Component Blog Card Start -->
                        <?php get_template_part( 'components/blog', 'card' ); ?>
                        <!-- Component Blog Card End -->
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Component Not Result Start -->
            <?php get_template_part( 'components/not', 'result' ); ?>
            <!-- Component Not Result End -->
        <?php endif; ?>

        <?php
            if( $count > 0 ):
                require TYPEROCKET_DIR_PATH . '/functions/snippets/pagination.php';
                insertSearchPagination(home_url('search/' . $search_query), $current_page, $total_page, true);
            endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>