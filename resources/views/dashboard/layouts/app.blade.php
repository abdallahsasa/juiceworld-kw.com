<!DOCTYPE html>
<html lang="en">
@extends('dashboard.layouts.head')
<body>

<div class="wrapper">
    <div id="pre-loader">
        <img src="dashboard/images/pre-loader/loader-01.svg" alt="">
    </div>

    @extends('dashboard.layouts.header')

    <div class="container-fluid">

        @extends('dashboard.layouts.left-sidebar')

        <div class="content-wrapper">

            @yield('content')
            @extends('dashboard.layouts.footer')

        </div>

    </div>
</div>
@extends('dashboard.layouts.footer-scripts')
</body>
</html>
