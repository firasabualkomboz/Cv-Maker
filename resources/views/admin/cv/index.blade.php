<x-admin-layout title="Personal Information" category="Peronals">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session()->get('success')}}
    </div>
    @endif

    <!--end::Notice-->
    <!--begin::Card-->
    <div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
    <h3 class="card-label">Demo Cv
    </div>
    <div class="card-toolbar">
    <!--begin::Dropdown-->

    <!--end::Dropdown-->
    <!--begin::Button-->
    <a href="{{route('admin.cv.create')}}" class="btn btn-primary font-weight-bolder">Change Template </a>
    <!--end::Button-->
    </div>
    </div>
    <div class="card-body">

        <div class="cv">
            <div class="row mt-5 mb-5">

                <div class="col-lg-6 mt-5 mb-5">
                    <div class="personals-information">
                        <h1>Your name </h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis provident atque incidunt quae optio minima saepe corrupti quo harum, ratione, voluptatum modi esse ipsum nesciunt! Ratione placeat facere ab obcaecati.</p>
                    </div>

                </div>
                <div class="col-lg-6 mt-5 mb-5">

                </div>
            </div>

            <div class="row mt-5 mb-3">
                <div class="col-lg-6 mt-5 mb-5">
                    <h4 class="mt-5 mb-5">EXPERIENCE</h4>

                    <div class="experiences-information">
                    <h2> <strong>Company Name </strong> ,  <span>Location</span> - <span>developer</span>  </h2>
                    <p><span>2021 Aug - 2021 Juni</span></p>
                    <p>Company NameWork as a trainee at New Line. I do a full time job and get given some web
                    development assignments and get them done and train on big projects.</p>
                    </div>

                </div>
                <div class="col-lg-6 mt-5 mb-5">

                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 mt-5 mb-5">
                    <h4 class="mt-5 mb-5">EDUCATION</h4>

                    <div class="experiences-information">
                    <h2> <strong>shool name  </strong> ,  <span>Location</span> - <span>degree</span>  </h2>
                    <p><span>2021 Aug - 2021 Juni</span></p>
                    <p>Company NameWork as a trainee at New Line. I do a full time job and get given some web
                    development assignments and get them done and train on big projects.</p>
                    </div>

                </div>
                <div class="col-lg-6 mt-5 mb-5">

                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 mt-5 mb-5">
                    <h4 class="mt-5 mb-5">PROJECTS</h4>

                    <div class="experiences-information">
                    <h2> <strong>Design website </strong> -  <span>Detailes</span>  </h2>
                    <p>Company NameWork as a trainee at New Line. I do a full time job and get given some web
                    development assignments and get them done and train on big projects.</p>
                    </div>

                </div>
                <div class="col-lg-6 mt-5 mb-5">

                </div>
            </div>



        </div>

    </div>
    </div>
    <!--end::Card-->
    </x-admin-layout>