<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{

    public function index():Response
    {
        $post = Post::find(1);
        dd($post->category->title);
        /*segunda forma
        $post = Post::find(2)->delete();
        dd($post);
        */
        /*primera forma de eliminar
        $post = Post::find(6);
        $post->delete();
        */
        /*Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );*/
    
      return 'Index';

      /*Para actualizar columnas   
        $post = Post :: find(1); //1 es el
        dd($post); para que no se repita mas
        $post -> update(
            [
                'title' => 'test title new',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );*/  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
