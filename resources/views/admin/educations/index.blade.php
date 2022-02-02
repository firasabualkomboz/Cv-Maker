<x-admin-layout title="Add Educations" category="Educations">

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
<h3 class="card-label">Personal Information
</div>
<div class="card-toolbar">
<!--begin::Dropdown-->

<!--end::Dropdown-->
<!--begin::Button-->
<a href="{{route('admin.educations.create')}}" class="btn btn-success btn-sm font-weight-bolder"> <i class="fa fa-plus-circle"></i>  Add New Education</a>

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
<th>Collage Name</th>
<th>Location</th>
<th>Degree</th>
<th>Start At</th>
<th>End At</th>
<th>Description</th>
<th>ACTIONS</th>
</tr>
</thead>
<tbody>
  
@foreach($educations as $education)
<tr>
<td>{{$education->collage}}</td>
<td>{{$education->location}}</td>
<td>{{$education->degree}}</td>
<td>{{$education->start_at}}</td>
<td>{{$education->end_at}}</td>
<td>{{$education->description}}</td>

<td>

<a class="btn btn-sm btn-warning" href="{{route('admin.educations.edit',[$education->id])}}">Edit</a>


<form class="mt-2" action="{{route('admin.educations.destroy',[$education->id])}}" method="post" style="display: inline-block">
@csrf
@method('delete')
<button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
{{-- {{$educations->links()}} --}}


</div>

</div>

</x-admin-layout>
