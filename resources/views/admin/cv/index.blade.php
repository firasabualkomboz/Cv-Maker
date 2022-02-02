<x-admin-layout title="Personal Information" category="Peronals">

<div class="border-0 pb-0 mb-5">
<h4 class="mb-3">Your cv</h4>
<div class="card-toolbar">
<button class="btn btn-outline-warning btn-sm mr-2 font-weight-bolder"> <a href="{{ url('admin/cv') }}/downloadPDF}}">Downkoad Cv PDF </a>    <i class="fa fa-file"></i>  </button>
<a href="{{route('admin.cv.create')}}" class="btn btn-sm btn-outline-danger font-weight-bolder">Change Template </a>
</div>
</div>


    <div class="card card-custom">

    <div class="card-body">

        <div class="cv">
            <div class="row mt-5 mb-5">

                <div class="col-lg-8 mt-5 mb-5">
                    <div class="personals-information">
                        @foreach ($personals as $personal)

                        <h1 style="font-size: 36px"> {{ $personal->name }} </h1>
                        <p class="pl-2">{{ $personal->overview }}</p>
                        @endforeach

                    </div>

                </div>
                <div class="col-lg-4 mt-5 mb-5">

                    <ol class="list-unstyled">
                        @foreach ($personals as $personal)
                        <li class="mt-3 mb-3">{{ $personal->street }}</li>
                        <li class="mt-3 mb-3">{{ $personal->city }} - {{ $personal->from }} </li>
                        <li class="mt-3 mb-3">{{ $personal->mobile }}</li>
                        <li class="mt-3 mb-3">{{ $personal->email }}</li>
                        @endforeach
                    </ol>

                </div>
            </div>

            <div class="row mt-5 mb-3">


                <div class="col-lg-8 mt-5 mb-5">
                <h2 class="">EXPERIENCE</h2>
                @foreach ($experiences as $experience)

                <div class="experiences-information mt-10 mb-10" style="text-transform:capitalize">
                <h3> <strong>{{ $experience->company }} </strong> , <span>{{ $experience->location }}</span> - <span class="" style="font-size: 16px;">{{ $experience->job_title }}</span>  </h2>
                <p><span>{{ $experience->start_at }} - {{ $experience->end_at }}</span></p>
                <p>{{ $experience->description }}</p>
                </div>

                @endforeach

                </div>

                <div class="col-lg-4 mt-5 mb-5">
                <div class="our-skills">
                <h2>Skills</h2>
                <ol class="list-unstyled mt-5 mb-5">
                @foreach ($skills as $skill)
                <li class="mb-4">{{ $skill->tag}}</li>
                @endforeach
                </ol>
                </div>
                </div>


            </div>

        <div class="row mt-5 mb-5">

        <div class="col-lg-8 mt-5 mb-5">
        <h2 class="">EDUCATION</h2>
        @foreach ($educations as $education)

<div class="experiences-information mt-10 mb-10" style="text-transform:capitalize">
<h3> <strong>  {{ $education->company }} </strong> ,  <span>{{ $education->location }}</span> - <span class="" style="font-size: 16px;">{{ $education->job_title }}</span>  </h2>
<p><span>{{ $education->start_at }} - {{ $education->end_at }}</span></p>
<p>{{ $education->description }}</p>
</div>

        @endforeach

        </div>


        <div class="col-lg-4 mt-5 mb-5 text-start">

        <div class="our-skills">
        <h2>Skills</h2>
        <ol class="list-unstyled mt-5 mb-5">
        <li class="mb-4">Html</li>
        <li class="mb-4">Html</li>
        <li class="mb-4">Html</li>
        <li class="mb-4">Html</li>
        <li class="mb-4">Html</li>
        </ol>
        </div>

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
