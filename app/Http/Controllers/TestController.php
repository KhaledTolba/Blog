<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    // public function test($id)
    // {
    //     $arr = array ('id'=>$id);
    //     return view('test',$arr);
    // }

    public function userhome()
    {
        return view('users.home');
    }

    public function adminhome()
    {
        $user = \App\User::all();
        $arr = Array('user'=>$user);
        return view('admin.home',$arr);
    }

    public function admindelete($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('admin.home');
    }

    public function adminedit(Request $request,$id)
    {
        if($request->isMethod('post'))
        {
            $newuser = \App\User::find($id);
            $newuser->username = $request->input('username');
            $newuser->password = $request->input('Password');
            $newuser->gender = $request->input('gender');
            $newuser->email = $request->input('email');
            $newuser->role = $request->input('role');
            $newuser->save();
            return redirect('admin.home');
        }
        else
        {
            $user = \App\User::find($id);
            $arr = Array('user'=>$user);
            return view('admin.edit',$arr);
        }
    }
    
    public function admininsert(Request $request)
    {
        if($request->isMethod('post'))
        {
            $newuser = new \App\User();
            $newuser->username = $request->input('username');
            $newuser->password = $request->input('Password');
            $newuser->gender = $request->input('gender');
            $newuser->email = $request->input('email');
            $newuser->role=$request->input('role');
            $newuser->save();
        }
        return view('admin.insert');
    }
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $user = \App\User::all();
            foreach ($user as $userr) 
            {
                if($userr->username == $request->input('username') && $userr->password == $request->input('password'))
                {
                    if ($userr->role==1)
                    {
                        return redirect('admin.home');
                    }
                    else
                    {
                        return redirect('users.home');
                    }
                }
            }
        }
        else
        {
            return view('login');
        }
    }

    public function insert(Request $request)
    {
        if($request->isMethod('post'))
        {
            $newuser = new \App\User();
            $newuser->username = $request->input('username');
            $newuser->password = $request->input('Password');
            $newuser->gender = $request->input('gender');
            $newuser->email = $request->input('email');
            $newuser->role=$request->input('role');
            $newuser->save();
        }
        return view('insert');
    }

    public function home()
    {
        return view('home');
    }
}



