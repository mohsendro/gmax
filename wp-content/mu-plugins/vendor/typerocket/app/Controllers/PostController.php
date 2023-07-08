<?php
namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Option;
use TypeRocket\Controllers\WPPostController;
use TypeRocket\Http\Request;

class PostController extends WPPostController
{
    protected $modelClass = Post::class;

    public function home(Post $post, Option $option)
    {
        $queried_object = get_queried_object();
        $where_option = [
            [
                'column'   => 'option_name',
                'operator' => '=',
                'value'    => 'posts_per_page'
            ]
        ];
        $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
        $option = $option[0]['option_value'];

        $where_post = [
            [
                'column'   => 'post_status',
                'operator' => '=',
                'value'    => 'publish'
            ]
        ];
        $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC');
        $posts_data = $posts; 
        $posts = $posts->get();

        if( $posts != null || $posts > 0 ) {

            $count = $posts->count();
            $total_page = ceil($count / $option);
            $current_page = 1;
            $posts = $posts_data->take($option, 0)->get();

        } else {

            $posts = [];
            $count = 0;
            $total_page = 0;
            $current_page = 0;
            
        }      

        return tr_view('home', compact('posts', 'count', 'total_page', 'current_page', 'queried_object') );
    }

    public function page(Post $post, Option $option)
    {
        // tr_redirect()->toURL(home_url('/blog/'))->now();
        return include( get_query_template( '404' ) );
    }

    public function archive(Post $post, Option $option, $number)
    {
        $queried_object = get_queried_object();
        $where_option = [
            [
                'column'   => 'option_name',
                'operator' => '=',
                'value'    => 'posts_per_page'
            ]
        ];
        $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
        $option = $option[0]['option_value'];

        $where_post = [
            [
                'column'   => 'post_status',
                'operator' => '=',
                'value'    => 'publish'
            ]
        ];
        $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC');
        $posts_data = $posts; 
        $posts = $posts->get();

        if( $posts != null || $posts > 0 ) {

            $count = $posts->count();
            $total_page = ceil($count / $option);
            $current_page = intval($number);

            if( (intval($number) <= $total_page) && (intval($number) >= 1) ) {
                $posts = $posts_data->take($option, ($number-1)*$option)->get();
                if( $number == 1 ) {
                    // $posts = $posts->take($option, 1);
                    tr_redirect()->toURL(home_url('/blog/'))->now();
                }
            } else {
                // $posts = $posts->take($option, $number);
                // tr_redirect()->toURL(home_url('/blog/'))->now();
                return include( get_query_template( '404' ) );
            }

        } else {

            $posts = [];
            $count = 0;
            $total_page = 0;
            $current_page = 0;
            
        } 

        return tr_view('home', compact('posts', 'count', 'total_page', 'current_page', 'queried_object') );
    }

    public function single(Post $post, Category $category, Option $option, $slug)
    {
        $queried_object = get_queried_object();
        $where_post = [
            [
                'column'   => 'post_status',
                'operator' => '=',
                'value'    => 'publish'
            ],
            'AND',
            [
                'column'   => 'post_name',
                'operator' => '=',
                'value'    => $slug
            ]
        ];
        $post = $post->first()->with('meta')->where($where_post)->get();

        $cat_terms = get_the_terms($post->ID, 'category');
        $tag_terms = get_the_terms($post->ID, 'post_tag');

        $where_option = [
            [
                'column'   => 'option_name',
                'operator' => '=',
                'value'    => 'posts_per_page'
            ]
        ];
        $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
        $option = $option[0]['option_value'];

        // $cate_id = get_the_category($post->ID);
        // $cate_id = $related_cat[0]->term_id;
        $cat_id = get_post_meta($post->ID, 'rank_math_primary_category', true);
        $cat_term = get_term($cat_id);
        $related_posts = $category->findById($cat_id)->posts()->take($option, 0)->get();
        
        if( $post ) {

            return tr_view('single-post', compact('post', 'slug', 'queried_object', 'cat_terms', 'tag_terms', 'related_posts', 'cat_term') );

        } else {

            return include( get_query_template( '404' ) );

        }
    }
}