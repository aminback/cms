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

                    <form method="POST"  action="{{ route('categories.update' , $category->id) }}" style="padding-bottom: 20px">
                        {{csrf_field()}}
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" >
                        </div>

                        <button type="submit" class="btn btn-primary col-6">Update Category</button>
                    </form>

                    <form method="POST"  action="{{ route('categories.destroy' , $category->id) }}" style="padding-bottom: 20px">
                        {{csrf_field()}}
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger col-6">Delete Category</button>
                    </form>

                </div>


                <div class="col-6">



                </div>
            </div>
        </div>


    </main>

@stop