
<!doctype html>
<html lang="en">

@include('layouts.partials._head')

<body  style="font-family:'A Araz';  font-size: 20px">

@include('layouts.partials._navigation')



<div class="container-fluid">
    <div class="row">

        @include('layouts.partials._sidebar')

        @yield('content')

    </div>
</div>

@include('layouts.partials._scripts')


</body>
</html>
