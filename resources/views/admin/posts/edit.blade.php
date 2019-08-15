@extends('layouts.admin')



@section('content')


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    {{--<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>--}}
                    {{--<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>--}}
                </div>
                {{--<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">--}}
                {{--<span data-feather="calendar"></span>--}}
                {{--This week--}}
                {{--</button>--}}
                @if(session()->has('deleted_user'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{session('deleted_user')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>


        <h2>Edit Posts</h2>
        <div class="container">
            <div class="row">
                <div class=" col-sm-3 ">

                    <img src="{{$posts->photo ? $posts->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-fluid rounded">


                </div>

                <div class=" col-sm-9 ">
                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.update' , $posts->id) }}" style="padding-bottom: 20px">
                    {{csrf_field()}}
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$posts->title}}">
                    </div>


                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" id="category_id" name="category_id" >
                            <option selected>Choose Option</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="photo_id">Photo</label>
                        <input type="file" class="form-control" name="photo_id" id="photo_id" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="body">Description</label>
                        <textarea class="form-control" id="body" name="body" rows="3" >{{$posts->body}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary col-sm-5">Edit Post</button>
                </form>

                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.destroy' , $posts->id) }}" style="padding-bottom: 20px">
                    {{csrf_field()}}
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger col-sm-5">Delete Post</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col">

            @include('includes.form_error')


        </div>
    </main>

@stop