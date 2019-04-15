<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\news;
use App\Model\user\tag;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newss = news::all();
        
         return view('admin/dashboard/news/showNews',compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();
        return view('admin/dashboard/news/news',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            
        ]);

        if ($request->hasFile('image')) {

            $imageName = $request->image->store('public/news');
        }

       $news = new news;

       $news->title = $request->title;

       $news->body = $request->body;

       $news->status = $request->status;

       //$news->image = $imageName;

       $news->save();

       $news->tags()->sync($request->tags);

       return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $news = news::with('tags')->find($id);
        $tags = tag::all();
        return view('admin/dashboard/news/editNews',compact('news','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         
         $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            
        ]);
         if ($request->hasFile('image')) {

            $imageName = $request->image->store('public/news');
        }

       $news = news::find($id);


       //$news->image = $imageName;

       $news->title = $request->title;

       $news->body = $request->body;

       $news->status = $request->status;

       $news->tags()->sync($request->tags);

       $news->save();

       return redirect(route('news.index'));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = news::where('id',$id)->delete();

        return redirect()->back();
    }
}
