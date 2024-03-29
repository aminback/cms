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


        <h2>posts</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>

                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><img  height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                            <td><a href="{{route('posts.edit' , $post->id)}}">{{$post->user->name}}</a></td>
                            <td>{{$post->category ? $post->category->name : 'Uncategorised'}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{Str::limit($post->body , 7)}}</td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>

    </main>

@stop