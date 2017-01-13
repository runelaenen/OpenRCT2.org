<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popular = [];
        $categories = ['tracks', 'parks', 'scenarios', 'custom scenery'];
        return view('content.index', ['popular' => $popular, 'categories' => $categories]);
    }

    public function category($category){
        
    }

}
