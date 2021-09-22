<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandController extends Controller
{
    public function __construct(){
        $this->middleware('admin')->except(['guestIndex' , 'show']);
    }
    
    public function index(){
        $lands = Land::paginate(10);
        return view('land.admin.index' , ['lands' => $lands]);
    }

    public function guestIndex(){
        $lands = Land::paginate(10);
        return view('land.index' , ['lands' => $lands]);
    }

    public function create(){
        return view('land.admin.create');
    }

    public function edit($id){
        $land = Land::findOrfail($id);
        return view('land.admin.edit' , ['land' => $land]);
    }

    public function show($id){
        $land = Land::findOrfail($id);
        return view('land.show' , ['land' => $land]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'land_image' => 'required|file|image|max:1024',
            'location' => 'required|string|min:3|max:255',
            'price' => 'required|string|min:3|max:255',
            'area' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3',
        ]);

        $land_image_path = $request->file('land_image')->store('land_images' , 'deum_uploads');
        $land = Land::create([
            'image_path' => $land_image_path,
            'location' => $request->location,
            'price' => $request->price,
            'area' => $request->area,
            'description' => $request->description
        ]);

        return redirect()->back()->with('status' , 'Land Created');
    }

    public function update(Request $request , $id){

        $land = Land::findOrFail($id);
        $request->validate([
            'land_image' => 'sometimes|file|image|max:1024',
            'location' => 'required|string|min:3|max:255',
            'price' => 'required|string|min:3|max:255',
            'area' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255',
        ]);

        $prevLandImagePath = $land->image_path;

        if($request->hasFile('land_image')){
            $land->image_path = $request->file('land_image')->store('land_images' , 'deum_uploads');
        }

        $land->location = $request->location;
        $land->price = $request->price;
        $land->area = $request->area;
        $land->description = $request->description;
        $land->save();


        if($land->wasChanged('image_path')){
            Storage::disk('deum_uploads')->delete($prevLandImagePath);
        }
        
        if(!$land->wasChanged()){
            return redirect()->back()->with('status' , 'you changed nothing');
        }

        return redirect()->back()->with('status' , 'Land updated');
    }

    public function destroy($id)
    {
        $land = Land::findOrFail($id);
        Storage::disk('deum_uploads')->delete($land->image_path);
        $land->delete();
        return back()->with('status' , 'Land deleted');
    }

}
