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


        <h2> Create aMedia</h2>

        {{--<form method="POST" enctype="multipart/form-data" action="{{ route('media.store') }}" style="padding-bottom: 20px" class="dropzone" id="dropzone">--}}
            {{--{{csrf_field()}}--}}

            {{--<input name="file" type="file" multiple />--}}
            {{--<button type="submit" class="btn btn-primary">Create Media</button>--}}
        {{--</form>--}}

        <form method="POST" enctype="multipart/form-data" action="{{ route('media.store') }}" class="dropzone">
            {{csrf_field()}}
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>



    </main>

@stop