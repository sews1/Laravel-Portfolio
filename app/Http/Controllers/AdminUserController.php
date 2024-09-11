<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
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
            'title' => 'User Management',
            'user' => User::get(),
            'content' => 'admin/user/index'
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
        'title' => 'Create User',
        'content' => 'admin/user/add' // Assuming you have a view for adding users
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:3',
            're_password' => 'required|same:password',
        ]);

        $data['password'] = Hash::make($data['password']);
        User::create($data);

        Alert::success('Success', 'User created successfully.');

        return redirect('/admin/user');
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
            'title' => 'Edit User',
            'user' => User::find($id),
            'content' => 'admin/user/add'
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
    $user = User::find($id);

    // Validate request data
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users,email,' . $user->id,
        're_password' => 'required_with:password|same:password',
    ]);

    // Check if the password field is present and filled
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    } else {
        // Keep the old password if no new password is provided
        $data['password'] = $user->password;
    }

    if ($user) {
    $user->update($data);
       Alert::success('Success', 'Data updated successfully.');
    } else {
        // If the user doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    // Find the user by ID
    $user = User::find($id);

    // Check if the user exists
    if ($user) {
        // If the user exists, delete it
        $user->delete();
        Alert::success('Success', 'Data deleted successfully.');
    } else {
        // If the user doesn't exist, return an error message
        Alert::error('Error', 'Data not found.');
    }

    // Redirect back to the user management page
    return redirect('/admin/user');
}   

}
