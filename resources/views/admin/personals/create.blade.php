<x-admin-layout title="Add New Personal" category="Personals">
<div class="card card-custom">
<div class="card-header">
<h3 class="card-title">
Add Personal Information
</h3>
<div class="card-toolbar">
<div class="example-tools justify-content-center">
<span class="example-toggle btn btn-outline-success" data-toggle="tooltip" title="Quick preview"> <i class="fa fa-eye"></i> Quick preview</span>
</div>
</div>
</div>
<!--begin::Form-->
<form method="post" action="{{route('admin.personals.store')}}" enctype="multipart/form-data">
@csrf
<div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $message )
<li>{{$message}}</li>
@endforeach
</ul>
</div>
@endif

<div class="form-group">
    <div class="row">
        <div class="col-lg-4">
            <label>Personal avatar</label>
<div class="custom-file">
<input type="file" class="custom-file-input" name="avatar" id="customFile"/>
<label class="custom-file-label" for="customFile">Choose Photo</label>
</div>
        </div>
        <div class="col-lg-4">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}"placeholder="{{old('name')}}"/>
        </div>
        <div class="col-lg-4">
            <input type="hidden"  class="form-control" name="user_id"/>
        </div>



    </div>

</div>

        <div class="form-group">
        <label for="exampleTextarea">Over view <span class="text-danger">*</span></label>
        <textarea class="form-control"  name="overview" rows="3"></textarea>
        </div>


        <div class="form-group">
        <div class="row">

                <div class="col-lg-4">
                <label>Street</label>
                <input type="text" class="form-control" name="street" placeholder="Enter Street"/>
                </div>

                <div class="col-lg-4">
                <label>City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter City"/>
                </div>

                <div class="col-lg-4">
                <label>From</label>
                <input type="text" class="form-control" name="from" placeholder="Enter From"/>
                </div>

        </div>
        </div>


        <div class="form-group">

        <div class="row">
        <div class="col-lg-4">
        <label>email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email"/>
        </div>
        <div class="col-lg-4">
        <label>mobile</label>
        <input type="number" class="form-control" name="mobile" placeholder="Enter mobile"/>
        </div>
        <div class="col-lg-4">

        <label>telephone</label>
        <input type="number" class="form-control" name="telephone" placeholder="Enter telephone"/>
        </div>

        </div>

        </div>


</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button type="reset" class="btn btn-secondary">Cancel</button>
</div>
</form>
<!--end::Form-->
</div>


<div class="card card-custom">
    <div class="card-body p-0">
        <!--begin::Wizard-->
        <div class="wizard wizard-1" id="kt_wizard_v1" data-wizard-state="between" data-wizard-clickable="false">
            <!--begin::Wizard Nav-->
            <div class="wizard-nav border-bottom">
                <div class="wizard-steps p-8 p-lg-10">
                    <!--begin::Wizard Step 1 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="done">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-bus-stop"></i>
                            <h3 class="wizard-title">1. Setup Location</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Wizard Step 1 Nav-->
                    <!--begin::Wizard Step 2 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="done">
                        <div class="wizard-label">
                            <i class="wizard-icon flaticon-list"></i>
                            <h3 class="wizard-title">2. Enter Details</h3>
                        </div>
                        <span class="svg-icon svg-icon-xl wizard-arrow">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Wizard Step 2 Nav-->

                </div>
            </div>
            <!--end::Wizard Nav-->
            <!--begin::Wizard Body-->
            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-7">
                    <!--begin::Wizard Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                        <!--begin::Wizard Step 1-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <h3 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h3>



                            <!--begin::Input-->
                            <div class="form-group fv-plugins-icon-container has-success">
                                <label>Name</label>
                                <input type="text" class="form-control form-control-solid form-control-lg is-valid" name="name" placeholder="Name">
                                <span class="form-text text-muted">Please enter your Name.</span>
                            <div class="fv-plugins-message-container"></div></div>
                            <!--end::Input-->

                            <!--begin::Input-->
                            <div class="form-group">
                                <label>Over View</label>
                                <input type="text" class="form-control form-control-solid form-control-lg" name="overview" placeholder="">
                                <span class="form-text text-muted">Please enter your Over View.</span>
                            </div>

                        </div>
                        <!--end::Wizard Step 1-->
                        <!--begin::Wizard Step 2-->
                        <div class="pb-5" data-wizard-type="step-content">
                            <h4 class="mb-10 font-weight-bold text-dark">Enter the Details of your Delivery</h4>
                            <!--begin::Input-->
                            <div class="form-group fv-plugins-icon-container has-success">
                                <label>Email</label>
                                <input type="email" class="form-control form-control-solid form-control-lg is-valid" name="email" placeholder="example@gmail.com">
                                <span class="form-text text-muted">Please enter your Email.</span>
                            <div class="fv-plugins-message-container"></div></div>
                            <!--end::Input-->


                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container">
                                        <label>telephone</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" name="locpostcode" placeholder="telephone">
                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                    <div class="fv-plugins-message-container"></div></div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg" name="loccity" placeholder="City">
                                        <span class="form-text text-muted">Please enter your City.</span>
                                    <div class="fv-plugins-message-container"></div></div>
                                    <!--end::Input-->
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>Country</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg is-valid" name="Country" placeholder="Country">
                                        <span class="form-text text-muted">Please enter your Country.</span>
                                    <div class="fv-plugins-message-container"></div></div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>City</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg is-valid" name="City" placeholder="City">
                                        <span class="form-text text-muted">Please enter your City.</span>
                                    <div class="fv-plugins-message-container"></div></div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>Street</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg is-valid" name="Street" placeholder="Street">
                                        <span class="form-text text-muted">Please enter your Street.</span>
                                    <div class="fv-plugins-message-container"></div></div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        <!--end::Wizard Step 2-->

                        <!--begin::Wizard Actions-->
                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                            <div class="mr-2">
                                <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                            </div>
                            <div>
                                <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                            </div>
                        </div>
                        <!--end::Wizard Actions-->
                    <div></div><div></div><div></div><div></div></form>
                    <!--end::Wizard Form-->
                </div>
            </div>
            <!--end::Wizard Body-->
        </div>
    </div>
    <!--end::Wizard-->
</div>


</x-admin-layout>
