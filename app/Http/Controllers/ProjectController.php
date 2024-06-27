<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Project;
 
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		/* get project data */
        //$projects = Project::get();
        $projects = Project::get();
        return response()->json($projects);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		/* store project data */
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
 
        return response()->json($project);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		/* show project data */
        $project = Project::find($id);
        return response()->json($project);
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
		/* update project data */
        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
 
        return response()->json($project);
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		/* remove project data */
        Project::destroy($id);
 
        return response()->json(['message' => 'Deleted']);
    }
}