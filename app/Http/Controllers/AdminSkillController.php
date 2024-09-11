<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSkillController extends Controller
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
            'title' => 'Skill Management',
            'skill' => Skill::get(),
            'content' => 'admin/skill/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $data = [
        'title' => 'Create skill',
        'content' => 'admin/skill/add' // Assuming you have a view for adding skills
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
            'icon' => 'required',
            'desc' => 'required',
            
        ]);

         Skill::create($data);

        Alert::success('Success', 'skill created successfully.');

        return redirect('/admin/skill');
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
        //
         $data = [
            'title' => 'Edit Skill',
            'skill' => Skill::find($id),
            'content' => 'admin/skill/add'
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
    $skill = Skill::find($id);

    // Validate request data
    $data = $request->validate([
        'title' => 'required',
            'icon' => 'required',
            'desc' => 'required',
    ]);


    if ($skill) {
    $skill->update($data);
       Alert::success('Success', 'Data updated successfully.');
    } else {
        // If the skill doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    return redirect('/admin/skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    // Find the skill by ID
    $skill = Skill::find($id);

    // Check if the skill exists
    if ($skill) {
        // If the skill exists, delete it
        $skill->delete();
        Alert::success('Success', 'Data deleted successfully.');
    } else {
        // If the skill doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    // Redirect back to the skill management page
    return redirect('/admin/skill');
}   
}
