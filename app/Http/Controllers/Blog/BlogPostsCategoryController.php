<?php

namespace App\Http\Controllers\Blog;

use App\BlogPostsCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogPostsCategory;
use App\Http\Requests\Blog\UpdateBlogPostsCategory;
use Illuminate\Http\Request;

class BlogPostsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['postCategories'] = BlogPostsCategory::all();
        return view('blog.categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPostsCategory $request)
    {
        $category = BlogPostsCategory::storeCategory($request->all());
        return redirect()->action('Blog\BlogPostsCategoryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPostsCategory  $BlogPostsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPostsCategory $BlogPostsCategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogPostsCategory  $BlogPostsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPostsCategory $BlogPostsCategory)
    {
        return view('blog.categories.edit', $BlogPostsCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPostsCategory  $BlogPostsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogPostsCategory $request, BlogPostsCategory $BlogPostsCategory)
    {
        
        $BlogPostsCategory->updateCategory($request->all(), $BlogPostsCategory);

        return redirect()->action('Blog\BlogPostsCategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPostsCategory  $BlogPostsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPostsCategory $BlogPostsCategory)
    {   
        
        $BlogPostsCategory->delete();
        return redirect()->action('Blog\BlogPostsCategoryController@index');
    }
}
