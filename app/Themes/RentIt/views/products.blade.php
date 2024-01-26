@extends('theme:rentit::layouts.blog')
@section('breadcrumbs')
    {!! $breadcrumbs ?? '' !!}

@endsection


@section('sidebar')
    {!! $sidebar ?? '' !!}

@endsection




@section('content')
    {!! isset($content) ? $content : '' !!}

@endsection
@section('content-area')
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-md-9 content car-listing" id="content">
                    @yield('content')
                </div>
                <!-- /SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-3 sidebar"  id="sidebar">
                    @yield('sidebar')
                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>


@endsection


@section('footer')
    {!! $footer ?? '' !!}
@endsection