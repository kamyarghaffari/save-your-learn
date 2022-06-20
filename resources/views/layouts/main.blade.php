<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')

    @yield('head')
</head>

<body>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
@include('layouts.dropdown')
</ul>

<!-- Modal Tweet -->
@include('layouts.modals')

@include('layouts.navbar')


<!-- Sidenav Mobile -->


<div class="bgcontainers">
    <div class="row">
       @include('layouts.left-side')

        @yield('content')

        @include('layouts.right-side')
    </div>
</div>


@include('layouts.footer')

@yield('footer')

</body>
</html>
