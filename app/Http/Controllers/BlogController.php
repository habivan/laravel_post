<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $post =(object) [
            'id' => 2,
            'title'=>'Lorem ipsum',
            'text'=>'<strong>Lorem</strong> ipsum dolor sit, amet consectetur adipisicing elit. <i>Consequatur</i> repudiandae vero velit nesciunt quas debitis eos deleniti repellendus explicabo voluptate.',
        ];
        $posts = array_fill(0,10,$post);

        return view('blog.index', compact('posts'));
    }

    public function show($post){

        $post =(object) [
            'id' => 2,
            'title'=>'Lorem ipsum',
            'text'=>'<strong>Lorem</strong> ipsum dolor sit, amet consectetur adipisicing elit. <i>Consequatur</i> repudiandae vero velit nesciunt quas debitis eos deleniti repellendus explicabo voluptate.',
        ];

        return view('blog.show', compact('post'));
    }
}
