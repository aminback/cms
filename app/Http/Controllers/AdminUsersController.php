<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();
//        return $users;

        return view('admin.users.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
//        $roles = DB::table('roles')->pluck('name', 'id');
//        return $roles;
        return view('admin.users.create' , compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(UserRequest $request)
    {
        //
//
        if (trim($request->password) == '') {

            $input = $request->except('password');

        }else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);


        }

//
//

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images' , $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }



        User::create($input);

        return redirect('/admin/users');



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

        return view('admin.users.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Role[]|\Illuminate\Database\Eloquent\Collection
     */
    public function edit($id)
    {
        //

        $user = User::findOrFail($id);

        $roles = Role::all();
//        $role = $roles[0]->id;
//        return $role;

        return view('admin.users.edit' , compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return array|\Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {


        $user = User::findOrFail($id);

        if (trim($request->password) == '') {

            $input = $request->except('password');
        }else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);


        }


        if($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id , Request $request)
    {
      $user =    User::findOrFail($id);

      unlink(public_path() . $user->photo->file);  // for delete image of user from the images file on public directory

        $user->delete();

//         Session::flash(' deleted_user ', 'this user has been deleted');
        $request->session()->flash('deleted_user', 'this user has been deleted');

        return redirect('/admin/users');
    }
}
