<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $roles = ['Admin', 'Editor', 'Developer'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::orderBy('id', 'desc')->get();
        return view('adminpanel.pages.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roles;
        return view('adminpanel.pages.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email'],
            'phone' => ['nullable'],
            'role' => ['required'],
            'profile_image' => ['image', 'mimes:jpeg,jpg,png,svg', 'max:2048', 'nullable'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $admin = new Admin();

        //storing new avatar image
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $image_original_name = $image->getClientOriginalName();
            $image_changed_name = str_replace(' ', '-', $image_original_name);
            $image_original_ext = $image->getClientOriginalExtension();
            $image_destination_name = time() . '_' . $image_changed_name;
            $image_destination_folder = "/storage/images/admins/";
            $image_destination_path = $image->move(public_path($image_destination_folder), $image_destination_name);
            $admin->profile_image = $image_destination_name;
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->is_active = true;
        $admin->password = Hash::make( $request->password);
        $admin->role = $request->role;
        $admin->save();

        return redirect()->route('admin.admin-user.index')->with('success', 'Created Successfuly !');
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
        $admin = Admin::findOrFail($id);
        $roles = $this->roles;

        return view('adminpanel.pages.admin.edit', compact('admin', 'roles'));
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
        $admin = Admin::findOrFail($id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email,'.$id],
            'phone' => ['nullable'],
            'role' => ['required'],
            'profile_image' => ['image', 'mimes:jpeg,jpg,png,svg', 'max:2048', 'nullable'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'is_active' => ['nullable', 'in:1,0'],
        ]);

        //storing new avatar image
        if ($request->hasFile('profile_image')) {
            unlink(public_path("/storage/images/admins/".$admin->profile_image));
            $image = $request->file('profile_image');
            $image_original_name = $image->getClientOriginalName();
            $image_changed_name = str_replace(' ', '-', $image_original_name);
            $image_original_ext = $image->getClientOriginalExtension();
            $image_destination_name = time() . '_' . $image_changed_name;
            $image_destination_folder = "/storage/images/admins/";
            $image_destination_path = $image->move(public_path($image_destination_folder), $image_destination_name);
            $admin->profile_image = $image_destination_name;
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->is_active = $request->is_active;
        if($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }
        $admin->role = $request->role;
        $admin->save();

        return redirect()->back()->with('success', 'Updated Successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrfail($id);
        if($admin){
            if($admin->role != 'Super Admin'){
                $admin->delete();
                return response()->json(['success'=>'Deleted successfully !']);
            }
            else{
                return response()->json(['error'=>'Cant delete Super Admin !']);
            }
        }
        return response()->json(['error'=>'Admin not found !']);
    }
}
