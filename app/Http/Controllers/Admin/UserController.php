<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $password = $request->password;
        $repassword = $request->repassword;
        if ($password == $repassword) {
            $users = New User;
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'address' => $request->get('address'),
                'phone' => $request->get('phone'),
                'birthday' => $request->get('birthday'),
                'role' => $request->get('role'),
            ];
            
            if ($request->hasFile('avatar')) {
                
                $destinationDir = public_path('user/product');
                $fileName = uniqid('avatar').'.'.$request->avatar->extension();
                $request->avatar->move($destinationDir, $fileName);
                $attr['avatar'] = '/user/product/'.$fileName;
            }
            $users = User::create($attr);
            return redirect()->route('admin.users.index')->with('alert', trans('setting.add_user_success'));    
        }else {
            return redirect()->route('admin.users.index')->with('alert', trans('setting.check_password'));    
        }
        
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
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $users = User::findOrFail($id);
        $password = $request->password;
        $repassword = $request->repassword;
        if ($password == $repassword) {
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'address' => $request->get('address'),
                'phone' => $request->get('phone'),
                'birthday' => $request->get('birthday'),
                'role' => $request->get('role'),
            ];
            
            if ($request->hasFile('avatar')) {
                
                $destinationDir = public_path('user/product');
                $fileName = uniqid('avatar').'.'.$request->avatar->extension();
                $request->avatar->move($destinationDir, $fileName);
                $attr['avatar'] = '/user/product/'.$fileName;
            } else {
                $attr['avatar'] = $users->avatar;
            }
            $users = User::update($attr);
            return redirect()->route('admin.users.index')->with('alert', trans('setting.edit_user_success'));    
        }else {
            return redirect()->route('admin.users.index')->with('alert', trans('setting.check_password'));    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
