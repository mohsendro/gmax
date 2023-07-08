<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

// Taxonomy: category - دسته نوشته
function category_taxonomy_args( $args, $taxonomy ) {
    
    var_dump($args); die();
    // Target "category"
    if ( 'category' === $taxonomy ) {
        $args['with_front'] = false;
        // $args['rewrite']['hierarchical'] = false;
        return $args;
    }

    return $args;
    
}
// add_filter( 'register_taxonomy_args', 'category_taxonomy_args', 10, 2 );

function gmax_remove_parent_category() {
    if ( 'category' != $_GET['taxonomy'] )
        return;

    $parent = 'parent()';

    if ( isset( $_GET['action'] ) )
        $parent = 'parent().parent()';

    ?>
        <script type="text/javascript">
            jQuery(document).ready(function($)
            {     
                $('label[for=parent]').<?php echo $parent; ?>.remove();       
            });
        </script>
    <?php
}
add_action( 'admin_head-edit-tags.php', 'gmax_remove_parent_category' );