<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function userprofile()
    {
        $data_userprofile = \App\UserProfile::all();
        return view ('profile.userprofile')->with('data_userprofile' , $data_userprofile);
    }
    public function create(Request $request)
    {
        
        //insert table  user
        $user = new \App\User;
        $user->role ='userprofile';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt ('qwerty');
        $user->save();
        
        //insert table userprofile
        
        $request->request->add(['user_id' => $user->id ]);
        $userprofile = \App\UserProfile::create($request->all());
        return redirect('/userprofile')->with('success','Data Berhasil Di Simpan !');
    }
    public function edit($id)
    {
        $userprofile = \App\UserProfile::find($id);
        return view('profile/edit')->with('userprofile', $userprofile);
    }
    public function update(Request $request, $id)
    {
        $userprofile = \App\UserProfile::find($id);
        $userprofile->update($request->all());
        return redirect('/userprofile')->with('success', 'Data Berhasil Di Update !');
    }
    public function delete($id)
    {
        $userprofile = \App\UserProfile::find($id);
        $userprofile->delete($userprofile->all());
        return redirect('/userprofile')->with('success', 'Data Berhasil Di Hapus !');
    }
}
