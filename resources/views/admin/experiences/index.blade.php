<x-admin-layout title="All Experiences" category="Experiences">

<!--begin::Card-->
<div class="card card-custom">
<div class="card-header flex-wrap border-0 pt-6 pb-0">
<div class="card-title">
<h3 class="card-label">Experiences
</div>
<div class="card-toolbar">
<!--begin::Dropdown-->

<!--end::Dropdown-->
<!--begin::Button-->
<a href="{{route('admin.experiences.create')}}" class="btn btn-success btn-sm font-weight-bolder"> <i class="fa fa-plus-circle"></i> Add New Experience</a>
<!--end::Button-->
</div>
</div>
<div class="card-body">
<!--begin: Search Form-->
<!--begin::Search Form-->

<!--end::Search Form-->
<!--end: Search Form-->
<!--begin: Datatable-->
<table class="table">
<thead>
<tr>
<th>Company Name</th>
<th>Location</th>
<th>Job Title</th>
<th>Start At</th>
<th>End At</th>
<th>Description</th>
<th>ACTIONS</th>
</tr>
</thead>
<tbody>

@foreach($experiences as $experience)
<tr>
<td>{{$experience->company}}</td>
<td>{{$experience->location}}</td>
<td>{{$experience->job_title}}</td>
<td>{{$experience->start_at}}</td>
<td>{{$experience->end_at}}</td>
<td>{{$experience->description}}</td>

<td>
<a class="btn btn-sm btn-warning" href="{{route('admin.experiences.edit',[$experience->id])}}">Edit</a>


<form class="mt-2" action="{{route('admin.experiences.destroy',[$experience->id])}}" method="post" style="display: inline-block">
@csrf
@method('delete')
<button type="submit" class="btn btn-sm btn-danger">
Delete</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
{{-- {{$experiences->links()}} --}}
</div>
</div>
<!--end::Card-->
</x-admin-layout>
