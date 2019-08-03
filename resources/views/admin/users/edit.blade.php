@extends('layouts.admin')



@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>


        <h2>Edit User</h2>

        <div class="container">
            <div class="row">
                <div class=" col-sm-3 ">

                    <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-fluid rounded">


                </div>

                <div class=" col-sm-9 ">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('users.update' , $user->id) }}" style="padding-bottom: 20px">
                        {{csrf_field()}}
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$user->email}}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <select class="form-control" id="role_id" name="role_id" >
                                {{--@foreach($roles as $role)--}}
                                    {{--<option value="{{$role->id}}">{{$role->name}}</option>--}}
                                    <option value="1" {{$user->role->id == 1 ? "selected" : " "}}>administrator</option>
                                    <option value="2" {{$user->role->id == 2 ? "selected" : " "}}> author</option>
                                    <option value="3" {{$user->role->id == 3 ? "selected" : " "}}>subscriber</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select class="form-control" id="is_active" name="is_active" >
                                <option value="1" {{$user->is_active == 1 ? "selected" : " "}}>Active</option>
                                <option value="0" {{$user->is_active == 0 ? "selected" : " "}}>Not Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="photo_id">Photo</label>
                            <input type="file" class="form-control" name="photo_id" id="photo_id" aria-describedby="emailHelp">
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label for="photo_id">Photo</label>--}}
                        {{--<input type="text" class="form-control" name="photo_id" id="file" aria-describedby="photo_id">--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}">
                        </div>

                        <button type="submit" class="btn btn-primary col-sm-5">Edit User</button>
                    </form>
                    {{--<div class="col-sm-9">--}}
                        <form method="POST" enctype="multipart/form-data" action="{{ route('users.destroy' , $user->id) }}" style="padding-bottom: 20px">
                            {{csrf_field()}}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger col-sm-5">Delete User</button>
                        </form>
                    {{--</div>--}}
                </div>




                <div class="col">

                    @include('includes.form_error')


                </div>
            </div>
        </div>



    </main>


@stop