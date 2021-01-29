<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Auth;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['home', 'index']]);
    }

    public function index()
    {
        
        $blog = \App\Models\Blog::latest()->get();

        return view('pages.content', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('pages.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'user_id' => 'reqired',
            'hours' => 'required',
            'category' => 'required',
            'minutes' => 'required',
            'recipe' => 'required',
            'post' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
    
           ]);

           $imageName = date('YmdHis') .'.'. $request->image->getClientOriginalExtension();
           $request->image->move(public_path('image'), $imageName);
           $validateData['image'] = $imageName;
    
        //    $imageName = time().'.'.$request->image->hashName();
        //    $request->image->move(public_path('storage/images'), $imageName);
    
           $validateData['user_id'] = Auth::user()->id;
           
           Blog::create($validateData);
           
           
    
           return redirect('blogs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        return view('pages.show', ['blogs' => Blog::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
