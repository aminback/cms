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


        <h2>Categories</h2>

        <div class="container">
            <div class="row">

                <div class="col-6">

                    <form method="POST"  action="{{ route('categories.store') }}" style="padding-bottom: 20px">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" >
                        </div>

                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </form>

                </div>


                <div class="col-6">



                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($categories)
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td><a href="{{route('categories.edit' , $category->id)}}">{{$category->name}}</a></td>
                                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </main>

@stop