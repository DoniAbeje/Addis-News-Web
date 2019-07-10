<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(9);
        $category = 'Recent';
        return view('index')->with(['news' => $news, 'category' => $category]);
    }

    public function category($category_name)
    {
        $category = Category::where('name', $category_name)->first();
        $news = News::where('category_id', $category->id)->paginate(9);
        return view('index')->with(['news' => $news, 'category' => $category->name]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required'
//            ,'content' => 'required'
//            , 'source_website' => 'required'
//            , 'source_url' => 'required'
//            , 'published_date' => 'required'
//            , 'image_url' => 'required'
//            , 'category_id' => 'required'
//        ]);
        $news = News::insert($request->all());
        return response()->json([
            'message' => 'Great success! New News created',
            'news' => $news
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
