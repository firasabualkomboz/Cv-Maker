{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.main')
@section('content')

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header Mobile-->
                <div id="kt_header_mobile" class="header-mobile">
                    <!--begin::Logo-->
                    <a href="index.html">
                        <img alt="Logo" src="assets/media/logos/logo-default.png"
                             class="max-h-30px"/>
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                        <button class="btn p-0 burger-icon burger-icon-left ml-4"
                                id="kt_header_mobile_toggle">
                            <span></span>
                        </button>
                        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
									<svg xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                         height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24"/>
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                  fill="#000000" fill-rule="nonzero" opacity="0.3"/>
											<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                  fill="#000000" fill-rule="nonzero"/>
										</g>
									</svg>
                                    <!--end::Svg Icon-->
								</span>
                        </button>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header Mobile-->
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <!--begin::Logo-->
                            <a href="index.html" class="mr-20">
                                <img alt="Logo"
                                     src="{{asset('theme_assets')}}/assets/media/logos/logo-default.png"
                                     class="logo-default max-h-35px"/>
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Left-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <!--begin::Container-->
                <div class="d-flex flex-row flex-column-fluid container">
                    <!--begin::Content Wrapper-->
                    <div class="main d-flex flex-column flex-row-fluid">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 py-lg-4" id="kt_subheader">
                            <div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Page Heading-->
                                    <div class="d-flex align-items-baseline mr-5">
                                        <!--begin::Page Title-->
                                        <h5 class="text-dark font-weight-bold my-2 mr-5">
                                            Register</h5>
                                        <!--end::Page Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">Lets Start to tell me about your self </a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">Wizard 4</a>
                                            </li>
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>
                                    <!--end::Page Heading-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Daterange-->
                                    <a href="#"
                                       class="btn btn-light-primary btn-sm font-weight-bold mr-2"
                                       id="kt_dashboard_daterangepicker" data-toggle="tooltip"
                                     data-placement="left">
                                        <span class="opacity-60 font-weight-bold mr-2"
                                              id="kt_dashboard_daterangepicker_title">Download Cv </span>
                                        <span class="font-weight-bold"
                                              id="kt_dashboard_daterangepicker_date">Aug 16</span>
                                    </a>
                                    <!--end::Daterange-->

                                </div>
                                <!--end::Toolbar-->
                            </div>
                        </div>
                        <!--end::Subheader-->
                        <div class="content flex-column-fluid" id="kt_content">
                            <div class="card card-custom card-transparent">
                                <div class="card-body p-0">
                                    <!--begin: Wizard-->
                                    <div class="wizard wizard-4" id="kt_wizard_v4"
                                         data-wizard-state="step-first"
                                         data-wizard-clickable="true">
                                        <!--begin: Wizard Nav-->
                                        <div class="wizard-nav">
                                            <div class="wizard-steps">
                                                <!--begin::Wizard Step 1 Nav-->
                                                <div class="wizard-step" data-wizard-type="step"
                                                     data-wizard-state="current">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-number">1</div>
                                                        <div class="wizard-label">
                                                            <div class="wizard-title">Add Personal Info
                                                            </div>
                                                            <div class="wizard-desc">Lets
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 1 Nav-->
                                                <!--begin::Wizard Step 2 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-number">2</div>
                                                        <div class="wizard-label">
                                                            <div class="wizard-title">Your Address
                                                            </div>
                                                            <div class="wizard-desc">Setup Your
                                                                Address
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 2 Nav-->

                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-number">3</div>
                                                        <div class="wizard-label">
                                                            <div class="wizard-title">Completed
                                                            </div>
                                                            <div class="wizard-desc">Review and
                                                                Submit
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->

                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-number">4</div>
                                                        <div class="wizard-label">
                                                            <div class="wizard-title">Completed
                                                            </div>
                                                            <div class="wizard-desc">Review and
                                                                Submit
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Nav-->
                                        <!--begin: Wizard Body-->
                                        <div class="card card-custom card-shadowless rounded-top-0">
                                            <div class="card-body p-0">
                                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                                    <div class="col-xl-12 col-xxl-7">
                                                        <!--begin: Wizard Form-->
                                                        <form class="form mt-0 mt-lg-10"
                                                              id="kt_form">
                                                            <!--begin: Wizard Step 1-->
                                                            <div class="pb-5"
                                                                 data-wizard-type="step-content"
                                                                 data-wizard-state="current">
                                                                <div class="mb-10 font-weight-bold text-dark">
                                                                    Enter your Account Details
                                                                </div>
                                                                <!--begin::Input-->
                                                                <div class="form-group">
                                                                    <label>Full Name  <span class="text-danger">*</span></label>
                                                                    <input type="text"
                                                                           class="form-control form-control-solid form-control-lg"
                                                                           name="name"
                                                                           placeholder="First Name"
                                                                           value="Test"/>
                                                                    <span class="form-text text-muted">Please enter your first name.</span>
                                                                </div>
                                                                <!--end::Input-->
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>Phone  <span class="text-danger">*</span></label>
                                                                            <input type="tel"
                                                                                   class="form-control form-control-solid form-control-lg"
                                                                                   name="phone"
                                                                                   placeholder="phone"
                                                                                   value="+999999999999"/>
                                                                            <span class="form-text text-muted">Please enter your phone number.</span>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>Email <span class="text-danger">*</span> </label>
                                                                            <input type="email"
                                                                                   class="form-control form-control-solid form-control-lg"
                                                                                   name="email"
                                                                                   placeholder="Email"
                                                                                   value="user@gmail.com"/>
                                                                            <span class="form-text text-muted">Please enter your email address.</span>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>Job Description</label>
                                                                            <textarea type="text"
                                                                                   class="form-control form-control-solid form-control-lg"
                                                                                   name="job_description"
                                                                                   placeholder="I am a Developer .. I work in .. "></textarea>

                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>    <div class="col-xl-12">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>Website</label>
                                                                            <input type="email"
                                                                                   class="form-control form-control-solid form-control-lg"
                                                                                   name="website"
                                                                                   placeholder="Website"/>
                                                                            <span class="form-text text-muted">Please enter your Website.</span>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end: Wizard Step 1-->
                                                            <!--begin: Wizard Step 2-->
                                                            <div class="pb-5"
                                                                 data-wizard-type="step-content">
                                                                <div class="mb-10 font-weight-bold text-dark">
                                                                    Setup Your Address
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-xl-4">
                                                                        <!--begin::Select-->
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <select name="country"
                                                                                    class="form-control form-control-solid form-control-lg">
                                                                                <option value="">
                                                                                    Select
                                                                                </option>
                                                                                <option value="AF">
                                                                                    palestine
                                                                                </option>
                                                                                <option value="AX">
                                                                                    Åland Islands
                                                                                </option>
                                                                                <option value="AL">
                                                                                    Albania
                                                                                </option>


                                                                            </select>
                                                                        </div>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <!--begin::Select-->
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <select name="country"
                                                                                    class="form-control form-control-solid form-control-lg">
                                                                                <option value="">
                                                                                    Gaza
                                                                                </option>
                                                                                <option value="AF">
                                                                                    Afghanistan
                                                                                </option>
                                                                                <option value="AX">
                                                                                    Åland Islands
                                                                                </option>
                                                                                <option value="AL">
                                                                                    Albania
                                                                                </option>


                                                                            </select>
                                                                        </div>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>street</label>
                                                                            <input type="text"
                                                                                   class="form-control form-control-solid form-control-lg"
                                                                                   name="street"
                                                                                   placeholder="street"
                                                                                   value=""/>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <!--end: Wizard Step 2-->


                                                            <!--begin: Wizard Step 3-->
                                                            <div class="pb-5"
                                                                 data-wizard-type="step-content">
                                                                <!--begin::Section-->
                                                                <h4 class="mb-10 font-weight-bold text-dark">
                                                                    Review your Details and
                                                                    Submit</h4>
                                                                <div class="form-group">
                                                                    <label>Password <span class="text-danger">*</span></label>
                                                                    <input type="password"
                                                                           class="form-control form-control-solid form-control-lg"
                                                                           name="password"
                                                                           placeholder=""
                                                                           />
                                                                    <span class="form-text text-muted">Please enter your password.</span>
                                                                </div>

                                                                <!--end::Section-->


                                                            </div>
                                                            <!--end: Wizard Step 4-->
                                                            <!--begin: Wizard Step 4-->
                                                            <div class="pb-5"
                                                                 data-wizard-type="step-content">
                                                                <!--begin::Section-->
                                                                <h4 class="mb-10 font-weight-bold text-dark">
                                                                    Review your Details and
                                                                    Submit</h4>
                                                            <div class="text-center">
                                                                <img width="50%" src="{{asset('theme_assets')}}/assets/media/svg/success.svg" alt="">
                                                            </div>



                                                            </div>
                                                            <!--end: Wizard Step 4-->
                                                            <!--begin: Wizard Actions-->
                                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                                <div class="mr-2">
                                                                    <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4"
                                                                            data-wizard-type="action-prev">
                                                                        Previous
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                                                            data-wizard-type="action-submit">
                                                                        Submit
                                                                    </button>
                                                                    <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                                            data-wizard-type="action-next">
                                                                        Next Step
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--end: Wizard Actions-->
                                                        </form>
                                                        <!--end: Wizard Form-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Bpdy-->
                                    </div>
                                    <!--end: Wizard-->
                                </div>
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--begin::Content Wrapper-->
                </div>
                <!--end::Container-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2022©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                               class="text-white text-hover-primary">Cv Maker</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="http://keenthemes.com/metronic" target="_blank"
                               class="nav-link pr-3 pl-0 text-muted text-hover-primary">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                               class="nav-link px-3 text-muted text-hover-primary">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                               class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contact</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10"
                role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Audit
                        Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab"
                       href="#kt_quick_panel_settings">Settings</a>
                </li>
            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary"
                   id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->

    </div>
    <!--end::Quick Panel-->


    <!--begin::Demo Panel-->


{{--    $table->string('password');--}}
{{--    $table->text('roles_name');--}}
{{--    $table->string('job_description');--}}


@endsection
