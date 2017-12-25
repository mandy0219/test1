<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostsController extends Controller
{
    public function index()
    {
        $posts = Post::$fillable->get();
        $data = ['posts' => $posts];

        return view('searchend', $data);
    }

}
