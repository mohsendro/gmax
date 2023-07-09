<?php
namespace App\Controllers;

use App\Models\Newsletter;
use TypeRocket\Controllers\Controller;
use TypeRocket\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {

        // $newsletter = new App\Models\Newsletter();
        // $newsletter = $newsletter->findAll()->orderBy('ID', 'DESC')->get()->toArray();
        if( isset($_GET['s']) ) {

            $where_search = [
                [
                    'column'   => 'email',
                    'operator' => 'like',
                    'value'    =>  '%'.$_GET['s'].'%'
                ]
            ];
            $newsletter = Newsletter::new()->findAll()->where($where_search)->orderBy('ID', 'DESC')->get()->toArray();

        } else {

            $newsletter = Newsletter::new()->findAll()->orderBy('ID', 'DESC')->get()->toArray();

        }

        return $newsletter;
        
    }

    public function export() {

        $newsletter = Newsletter::new()->findAll()->orderBy('ID', 'DESC')->get()->toArray();
        return $newsletter; 

    }
}
