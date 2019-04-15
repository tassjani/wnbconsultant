<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\user\project;
use App\Model\user\client;
use App\Model\user\service;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = project::all();
         return view('admin/dashboard/project/showProject',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = client::all();
        $services = service::all();

        return view('admin/dashboard/project/project',compact('clients','services'));
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

        $project = new project;

        $project->title = $request->title;

        $project->body = $request->body;

        $project->status = $request->status;

        $project->save();

        $project->clients()->sync($request->clients);

        $project->services()->sync($request->services);




       return redirect(route('project.index'));
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
        $project = project::with('clients','services')->find($id);
        $clients = client::all();
        $services = service::all();
       
        return view('admin/dashboard/project/editProject',compact('clients','services','project'));
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
       
       //return $request->all();
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);

        $project = project::find($id);

        $project->title = $request->title;

        $project->body = $request->body;

        $project->status = $request->status;

        $project->clients()->sync($request->clients);

        $project->services()->sync($request->services);

        $project->save();

        return redirect(route('project.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::where('id',$id)->delete();

        return redirect()->back();
    }
}
