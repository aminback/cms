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


        <h2>Create User</h2>
        <form method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}" style="padding-bottom: 20px">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="name">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="role_id">Role</label>
                <select class="form-control" id="role_id" name="role_id" >
                    <option selected>Choose Option</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="is_active">Status</label>
                <select class="form-control" id="is_active" name="is_active">
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>


                </select>
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" class="form-control" name="file" id="file" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="photo_id">Photo</label>
                <input type="text" class="form-control" name="photo_id" id="file" aria-describedby="photo_id">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="enter Password">
            </div>

            <button type="submit" class="btn btn-primary">Create User</button>
        </form>

        @include('includes.form_error')

    </main>


@stop