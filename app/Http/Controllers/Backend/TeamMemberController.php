<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Exception;
use Illuminate\Http\Request;
use Image;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::latest()->get();
        return view('backend.teamMember.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('backend.teamMember.create');
    }

    public function store(Request $request)
    {
       // dd($request->all());

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:team_members',
            'phone' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'photo' => 'required',
        ]);

           //For Image Upload
           $photo = $request->file('photo');
           $image = '';
           if ($photo) {
               $i = 0;
               $fileEx = $photo->getClientOriginalExtension();
               $fileName = date('Ymdhis_').$i. '.'.$fileEx;
               Image::make($photo)
               ->resize(400,400)
               ->save(public_path('uploads/member_pic/').$fileName );
               $image = $fileName;
           }

        try{
            $teamMembers = new TeamMember();
            $teamMembers->name = $request->name;
            $teamMembers->email = $request->email;
            $teamMembers->phone = $request->phone;
            $teamMembers->designation = $request->designation;
            $teamMembers->address = $request->address;
            $teamMembers->photo = $image;

            if($teamMembers->save())
            {
                return back()->with('success', 'Team member created successfully!');
            }
        }catch(Exception $e){
            dd($e);
        }

    }

    public function edit($id){
        $teamMember = TeamMember::findOrFail($id);
        return view('backend.teamMember.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:team_members',
            'phone' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'photo' => 'required',
        ]);

           //For Image Upload
           $photo = $request->file('photo');
           $image = '';
           if ($photo) {
               $i = 0;
               $fileEx = $photo->getClientOriginalExtension();
               $fileName = date('Ymdhis_').$i. '.'.$fileEx;
               Image::make($photo)
               ->resize(400,400)
               ->save(public_path('uploads/member_pic/').$fileName );
               $image = $fileName;
           }

        try{
            $teamMembers = TeamMember::findOrFail($id);
            $teamMembers->name = $request->name;
            $teamMembers->email = $request->email;
            $teamMembers->phone = $request->phone;
            $teamMembers->designation = $request->designation;
            $teamMembers->address = $request->address;
            $teamMembers->photo = $image;

            if($teamMembers->save())
            {
                return back()->with('success', 'Team member updated successfully!');
            }
        }catch(Exception $e){
           // dd($e);
        }
    }

    public function delete($id){
        $teamMember = TeamMember::findOrFail($id);
        if($teamMember){
            if(file_exists('uploads/member_pic/'.$teamMember->photo) AND !empty($teamMember->photo)){
                unlink('uploads/member_pic/'.$teamMember->photo);
            }
            $teamMember->delete();
            return redirect()->back()->with('success','Team member successfully deleted.');
        }else{
            return redirect()->back()->with('error','Something Error Found !, Please try again.');
        }
    }
}
