<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except(['guestIndex' , 'show']);
    }

    public function index(){
        $projects = Project::orderBy('created_at' , 'desc')->paginate(10);
        return view('project.admin.index' , ['projects' => $projects]);
    }

    public function guestIndex(){
        $projects = Project::orderBy('created_at' , 'desc')->paginate(10);
        return view('project.index' , ['projects' => $projects]);
    }

    public function create(){
        return view('project.admin.create');
    }

    public function edit($id){
        $project = Project::findOrfail($id);
        return view('project.admin.edit' , ['project' => $project]);
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return view('project.show' , ['project' => $project]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_image' => 'required|file|image|max:1024',
            'title' => 'required|string|min:3|max:255',
            'client' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:5',
        ]);

        $project_image_path = $request->file('project_image')->store('project_images' , 'deum_uploads');
        $project = Project::create([
            'image_path' => $project_image_path,
            'title' => $request->title,
            'client' => $request->client,
            'content' => $request->content
        ]);

        return redirect()->back()->with('status' , 'Project Created');
    }

    public function update(Request $request , $id){

        $project = Project::findOrFail($id);

        $request->validate([
            'project_image' => 'sometimes|file|image|max:1024',
            'title' => 'required|string|min:3|max:255',
            'client' => 'required|string|min:3|max:255',
            'content' => 'required|string|min:3',
        ]);

        $prevProjectImagePath = $project->image_path;

        if($request->hasFile('project_image')){
            $project->image_path = $request->file('project_image')->store('project_images' , 'deum_uploads');
        }

        $project->title = $request->title;
        $project->client = $request->client;
        $project->content = $request->content;
        $project->save();


        if($project->wasChanged('image_path')){
            Storage::disk('deum_uploads')->delete($prevProjectImagePath);
        }
        
        if(!$project->wasChanged()){
            return redirect()->back()->with('status' , 'you changed nothing');
        }

        return redirect()->back()->with('status' , 'Project updated');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        Storage::disk('deum_uploads')->delete($project->image_path);
        $project->delete();
        return back()->with('status' , 'project deleted');
    }

}
