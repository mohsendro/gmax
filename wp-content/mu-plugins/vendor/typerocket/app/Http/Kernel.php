<?php
namespace App\Http;

use App\Http\Middleware\VerifyNonce;
use TypeRocket\Http\HttpKernel;
use TypeRocket\Http\Middleware\AuthAdmin;
use TypeRocket\Http\Middleware\AuthRead;
use TypeRocket\Http\Middleware\CanManageCategories;
use TypeRocket\Http\Middleware\CanManageOptions;
use TypeRocket\Http\Middleware\CanEditUsers;
use TypeRocket\Http\Middleware\CanEditComments;
use TypeRocket\Http\Middleware\CanEditPosts;
// use App\Http\Middleware\MiddlewareSample;

class Kernel extends HttpKernel
{
    protected $middleware = [
        'hooks' =>
            [],
        'http' =>
            [ VerifyNonce::class ],
        'user' =>
            [ CanEditUsers::class ],
        'post' =>
            [ CanEditPosts::class ],
        'comment' =>
            [ CanEditComments::class ],
        'option' =>
            [ CanManageOptions::class ],
        'term' =>
            [ CanManageCategories::class ],
        'search' =>
            [ AuthAdmin::class ],
        'rest' =>
            [ AuthAdmin::class ],
        // 'MiddlewareSample' => 
        //     [ MiddlewareSample::class ],
    ];
}
