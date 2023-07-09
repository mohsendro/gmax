<?php
/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

// Run Custom Controller Method
// $controller = new \App\Controllers\PostController;
// $controller = $controller::test(); // test == method  /* Build the model inside the method and don't give it as argument input to the method  */

// tr_route()->get()->match('path')->do('method@Controller'); or do('method@\App\Controllers\Controller');
// tr_route()->post()->match('path')->do('method@Controller');
// tr_route()->put()->match('path')->do('method@Controller');
// tr_route()->delete()->match('path')->do('method@Controller');
// tr_route()->any()->match('path')->do('method@Controller');
// tr_route()->get()->match('path/(\d+)', ['id'])->do('singlePageMethod@Controller'); // single

// Index or Front-page
tr_route()->get()->match('/')->do('index@FronPageController');

// Other Pages
tr_route()->get()->match('/webdesign')->do('webdesign@PageController');
tr_route()->get()->match('/seo')->do('seo@PageController');
tr_route()->get()->match('/google')->do('google@PageController');
tr_route()->get()->match('/youtube')->do('youtube@PageController');
tr_route()->get()->match('/services')->do('services@PageController');
tr_route()->get()->match('/monetization')->do('monetization@PageController');
tr_route()->get()->match('/studio')->do('studio@PageController');
tr_route()->get()->match('/fraudclicks')->do('fraudclicks@PageController');
tr_route()->get()->match('/about')->do('about@PageController');
tr_route()->get()->match('/contact')->do('contact@PageController');


// Blog or Post
tr_route()->get()->match('/blog')->do('home@PostController');
// // tr_route()->get()->match('/blog/page')->do('page@PostController');
tr_route()->get()->match('/blog/page/([^\/]+)', ['number'])->do('archive@PostController');
// // tr_route()->get()->match('/category/([^\/]+)', ['param']')->do('home@CategoryController');
tr_route()->get()->match('/category/([^\/]+)', ['cat_name'])->do('category@CategoryController');
tr_route()->get()->match('/category/([^\/]+)/page/([^\/]+)', ['cat_name', 'number'])->do('archive@CategoryController');
// // tr_route()->get()->match('/tag/([^\/]+)', ['param']')->do('home@TagController');
tr_route()->get()->match('/tag/([^\/]+)', ['tag_name'])->do('tag@TagController');
tr_route()->get()->match('/tag/([^\/]+)/page/([^\/]+)', ['tag_name', 'number'])->do('archive@TagController');
tr_route()->get()->match('/blog/([^\/]+)', ['slug'])->do('single@PostController'); // single

// Post Type
// tr_route()->get()->match('/post-type')->do('home@PostTypeSampleController');
// // tr_route()->get()->match('/post-type/page')->do('page@PostTypeSampleController');
// tr_route()->get()->match('/post-type/page/([^\/]+)', ['number'])->do('archive@PostTypeSampleController');
// // tr_route()->get()->match('/post-type-taxonomy/([^\/]+)', ['param']')->do('home@TaxonomySampleController');
// tr_route()->get()->match('/post-type-taxonomy/([^\/]+)', ['taxonomy_name'])->do('taxonomy@TaxonomySampleController');
// tr_route()->get()->match('/post-type-taxonomy/([^\/]+)/page/([^\/]+)', ['taxonomy_name', 'number'])->do('archive@TaxonomySampleController');
// tr_route()->get()->match('/post-type/([^\/]+)', ['slug'])->do('single@PostTypeSampleController'); // single

// Author
tr_route()->get()->match('/author')->do('home@UserController');
tr_route()->get()->match('/author/page')->do('page@UserController');
tr_route()->get()->match('/author/page/([^\/]+)', ['number'])->do('archive@UserController');
tr_route()->get()->match('/author/([^\/]+)', ['slug'])->do('single@UserController'); // single

// Metadata Archive
// tr_route()->get()->match('/post-type')->do('home@PostTypeSampleController');

// Search
tr_route()->get()->match('/search')->do('page@SearchController');
tr_route()->get()->match('/search/([^\/]+)', ['param'])->do('archive@SearchController');



/*
|--------------------------------------------------------------------------
| Template Routes
|--------------------------------------------------------------------------
*/
function wpplus_hierarchy_index_template($template, $type, $templates) {

    $controller = new \App\Controllers\FronPageController;
    $controller = $controller->index();

}
// add_filter( 'frontpage_template', 'wpplus_hierarchy_index_template', 10, 3 );
// add_filter( 'index_template', 'wpplus_hierarchy_index_template', 10, 3 );

function wpplus_hierarchy_template($template, $type, $templates) {

    // $controller = new \App\Controllers\PostController;
    // $controller = $controller->test();

}
// add_filter( 'single_template', 'wpplus_hierarchy_template', 10, 3 );