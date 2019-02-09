@include('admin.layouts.header')
@include('admin.layouts.menu')
@include('admin.layouts.sidebar')

    <!--Page Content-->
    <div class="content-wrapper">
        <section class="content-header">
            @yield('content-header')
        </section>
        <!--Main Content-->
        <section class="content">
        @yield('content')
        </section>
    </div>

@include('admin.layouts.footer')