<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request){

        return view('blog.index', compact('posts'));
    }

    public function create(){

        return view("user.posts.create");
    }

    public function store(){
        return 'ok';
    }

    public function show($post){
                $post =(object) [
            'id' => 2,
            'title'=>'Lorem ipsum',
            'text'=>'<strong>Lorem</strong> ipsum dolor sit, amet consectetur adipisicing elit. <i>Consequatur</i> repudiandae vero velit nesciunt quas debitis eos deleniti repellendus explicabo voluptate.',
        ];
        return view("user.posts.show", compact('post'));
    }

    public function edit(){
        $post =(object) [
            'id' => 2,
            'title'=>'Lorem ipsum',
            'text'=>'<strong>Lorem</strong> ipsum dolor sit, amet consectetur adipisicing elit. <i>Consequatur</i> repudiandae vero velit nesciunt quas debitis eos deleniti repellendus explicabo voluptate.',
        ];
        return view("user.posts.edit", compact('post'));
    }

    public function update(Request $request){
        dd($request->all());
        return 'ok';
    }

    public function delete(){

    }
}
