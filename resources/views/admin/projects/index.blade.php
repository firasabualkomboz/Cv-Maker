<x-admin-layout title="All Projects" category="Projects">

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
<h3 class="card-label">Projects
</div>
<div class="card-toolbar">

<a href="{{route('admin.projects.create')}}" class="btn btn-success btn-sm font-weight-bolder"> <i class="fa fa-plus-circle"></i> Add New Project</a>
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
<th>Project Name</th>
<th>Project Details</th>
<th>Description</th>
<th>Start At</th>
<th>End At</th>
<th>ACTIONS</th>
</tr>
</thead>
<tbody>

@foreach($projects as $project)
<tr>
<td>{{$project->name}}</td>
<td>{{$project->details}}</td>
<td>{{$project->description}}</td>
<td> <button class="btn btn-sm btn-outline-success">{{$project->start_at}}</button> </td>
<td> <button class="btn btn-sm btn-outline-danger">{{$project->end_at}}</button> </td>

<td>

<a class="btn btn-sm btn-warning" href="{{route('admin.projects.edit',[$project->id])}}">Edit</a>


<form action="{{route('admin.projects.destroy',[$project->id])}}" method="post" style="display: inline-block">
@csrf
@method('delete')
@method('delete')
<button type="submit" class="btn btn-sm btn-danger">
Delete</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
{{-- {{$projects->links()}} --}}
</div>
</div>
<!--end::Card-->
</x-admin-layout>
