<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class ApiNewsController extends Controller
{

    public function store(Request $request)
    {
        $news = News::insert($request->all());
        return response()->json([
            'message' => 'Great success! New News created',
            'news' => $news
        ]);
    }

    public function last_news_by_source($source)
    {
        $news = News::where('source_website', $source)->first();
        return response()->json($news);
    }

    public function news_by_date_and_source($date, $source)
    {
        $news = News::where(['source_website' => $source, 'published_date' => $date])->get();
        return response()->json($news);
    }
    public function all()
    {
        $news = News::all();
        return response()->json($news);
    }





}
