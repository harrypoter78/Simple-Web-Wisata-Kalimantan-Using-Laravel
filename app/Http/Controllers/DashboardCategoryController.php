<?php

namespace App\Http\Controllers;

use App\Models\DestinationCategory;
use App\Models\Post;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashboard.posts.index',[
        //     'posts' => Destination::all()
        // ]);
        $data = DestinationCategory::all();

        return view('dashboard.category.index', [
            'data' => $data]);

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DestinationCategory::all();

        return view('dashboard.category.create', [
            'data' => $data
            // 'categories' => destination_category::all()
        ]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-image');

        // $validateData = $request->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:posts',
        //     'category_id' => 'required',
        //     'image' => 'image|file|max:1024',
        //     'body' => 'required'
        // ]);

        // // $validateData['user_id'] = auth()->user()->id;
        // $validateData['excerpt'] = Str::limit(strip_tags($request->body), 20, ' (...)');

        // Destination::create($validateData);

        // return redirect('/dashboard/category')->with('success', 'Berhasil menambahkan postingan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Destination $post)
    // {
    //     // Return $post;
    //     return view('dashboard.posts.show',[
    //         'post' =>$post
    //     ]);
    // }

    public function show($id)
    {
        $data = DestinationCategory::all();
        return view('dashboard.category.show', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $data=Destination::all();
        $destination_category = DestinationCategory::all();
        return view('dashboard.category.edit', [
            'data' => $data,
            'destination_category' => $destination_category,
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // $rules = [
        //     'title' => 'required|max:255',
        //     'category_id' => 'required',
        //     'body' => 'required'
        // ];

        // if($request->slug != $post->slug) {
        //     $rules['slug'] = 'required|unique:posts';
        // }

        // $validateData = $request->validate($rules);

        // $validateData['user_id'] = auth()->user();
        // $validateData['excerpt'] = Str::limit(strip_tags($request->body), 20, ' (...)');

        // Post::where('id', $post->id)
        //     ->update($validateData);

        // return redirect('/dashboard/category')->with('success', 'Berhasil update postingan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/category')->with('success', 'Berhasil menghapus postingan ini!');
    
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
