<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminProjectController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'headline' => 'Project Management',
            'project' => Project::get(),
            'content' => 'admin/project/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function create(Request $request)
{
    $data = [
        'title' => 'Create Project',
        'content' => 'admin/project/add' // Assuming you have a view for adding users
    ];
    return view('admin.layouts.wrapper', $data);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
    $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'cover' => 'required|image',  // Validate that cover is an image file
    ]);

    if ($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $file_name = time() . '-' . $cover->getClientOriginalName();

        $storage = 'uploads/projects/';
        $cover->move(public_path($storage), $file_name);
        $data['cover'] = $storage . $file_name;
    }

    // No need to refer to $project, just create the new project
    Project::create($data);

    Alert::success('Success', 'Project created successfully.');

    return redirect('/admin/posts/project');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = [
        'headline' => 'Show Project',
        'project' => Project::find($id),
        'content' => 'admin/project/show'  // Make sure this view exists
    ];
    return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $data = [
        'headline' => 'Edit Project',
        'project' => Project::find($id),
        'content' => 'admin/project/add'  // Make sure this view exists
    ];
    return view('admin.layouts.wrapper', $data);
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

    $project = Project::find($id);
         $data = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Validate that cover is an image file
    ]);

    if ($request->hasFile('cover')) {
        
        if ($project->cover != null) {
            unlink($project->cover);
        }

        $cover = $request->file ('cover');
        $file_name = time() . '-' . $cover->getClientOriginalName();

        $storage = 'uploads/projects/';
        $cover->move(public_path($storage), $file_name);
        $data['cover'] = $storage . $file_name;
    } else {
        $data['cover'] = $project->cover;
    }

    if ($project) {
    $project->update($data);
       Alert::success('Success', 'Data updated successfully.');
    } else {
        // If the banner doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    return redirect('/admin/posts/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    // Find the banner by ID
    $project = Project::find($id);

    // Check if the banner exists
    if ($project) {
        // If the banner exists, delete it
        $project->delete();
        Alert::success('Success', 'Data deleted successfully.');
    } else {
        // If the banner doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    // Redirect back to the banner management page
    return redirect('/admin/posts/project');
    }   

}
