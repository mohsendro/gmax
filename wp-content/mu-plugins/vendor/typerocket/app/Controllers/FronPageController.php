<?php
namespace App\Controllers;

use App\Models\Post;
use App\Models\Option;
use TypeRocket\Controllers\WPPostController;
use TypeRocket\Http\Request;

class FronPageController extends WPPostController
{
    public function index(Post $post, Option $option)
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
        $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC')->get();

        return tr_view('front-page', compact('posts', 'queried_object') );
    }
}