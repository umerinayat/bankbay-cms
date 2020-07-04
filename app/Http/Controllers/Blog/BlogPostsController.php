<?php

namespace App\Http\Controllers\Blog;

use App\BlogPost;
use App\BlogPostsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

    
        $blogPosts = BlogPost::get();
        $updatedPosts = [];

        foreach($blogPosts as $blogPost)
        {
            $blogPost->category = BlogPostsCategory::where('id', $blogPost->post_category_id)->get()->first();
            array_push($updatedPosts, $blogPost);
        }
        $data['posts'] =  $updatedPosts;

        
        return view('blog.posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];

        $data['postCategories'] = BlogPostsCategory::all();

        return view('blog.posts.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'post_content' => 'required',
            'status' => 'required',
            'post_category_id' => 'required'
        ]);

        $newPost = BlogPost::create([
            'type' => $request['type'],
            'title' => $request['title'],
            'short_description' => $request['short_description'],
            'post_content' => $request['post_content'],
            'status' => $request['status'],
            'featured_image' => NULL,
            'slug' => $request['slug'],
            'meta_title' => $request['title'],
            'meta_description' => $request['short_description'],
            'post_category_id' => $request['post_category_id']
        ]);

        return redirect()->action('Blog\BlogPostsController@show', ['BlogPost' => $newPost]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $BlogPost)
    {   
        $BlogPost->category = BlogPostsCategory::where('id', $BlogPost->post_category_id)->get()->first();
        return view('blog.posts.show', ['post' => $BlogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $BlogPost)
    {
        return view('blog.posts.edit', $BlogPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $BlogPost)
    {

        $this->validate($request, [

        ]);
    
        $BlogPost->update($request->all());

        return redirect()->action('Blog\BlogPostsController@show', ['BlogPost' => $BlogPost]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $BlogPost)
    {
        $BlogPost->delete();

        return redirect()->action('Blog\BlogPostsController@index');
    }
}
