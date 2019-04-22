<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\user\news;
use App\Model\user\tag;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // public function news()
    // {
    	
    // 	return view('user/news/newsdetail');
    // }

     public function Index()
    {
    	$newss = news::where('status',1)
        ->latest()
        ->paginate(6);
    	return view('user/news/newsIndex',compact('newss'));
    }

    
    public function newshome()
    {
        $news = news::where('status',1)
        ->latest()
        ->paginate(3);

        return view('user/home',compact('news'));
    }

   
    public function shownews($id)
    {
        $news = news::with('tags')->find($id);
        $tag = tag::all();
        $lastUpdate = $news->updated_at->format('d, M Y H:i');

        return view('user/news/newsdetail',compact('tag','news'))->with('news',$news);
        
    }

  

}
