@extends('layouts.user')
@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Error-->
        <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30"
             style="background-image: url({{asset('dashboard_files/assets/media/error/bg1.jpg')}});">
            <!--begin::Content-->
            <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem">403</h1>
            <p class="font-size-h3 text-muted font-weight-normal">OOPS! USER DOES NOT HAVE THE RIGHT PERMISSIONS.</p>
            <!--end::Content-->
        </div>
        <!--end::Error-->
    </div>

    @endsection