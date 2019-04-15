<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\about;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = about::all();
        return view('admin/dashboard/about/showAbout',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/dashboard/about/about');
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
            'image' => 'required'
        ]);
       if ($request->hasFile('image')) {


             $imageName = $request->image->store('public/about');
        }


       $about = new about;

       $about->title = $request->title;

       $about->body = $request->body;

       $about->image = $imageName;

       $about->save();

       return redirect(route('about.index'));

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
        $about = about::find($id);
        return view('admin/dashboard/about/editAbout',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {


             $imageName = $request->image->store('public/about');
        }

       $about = about::find($id);

       $about->image = $imageName;

       $about->title = $request->title;

       $about->body = $request->body;

       $about->save();

       return redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        about::where('id',$id)->delete();

        return redirect()->back();
    }
}
