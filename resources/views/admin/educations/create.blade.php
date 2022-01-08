<x-admin-layout title="Add New Experience" category="Educations">
<div class="card card-custom">
<div class="card-header">
<h3 class="card-title">
Add Education Information
</h3>
<div class="card-toolbar">
<div class="example-tools justify-content-center">
<span class="example-toggle btn btn-outline-success" data-toggle="tooltip" title="Quick preview"> <i class="fa fa-eye"></i> Quick preview</span>
</div>
</div>
</div>
<!--begin::Form-->
<form method="post" action="{{route('admin.educations.store')}}" enctype="multipart/form-data">
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
<label>Collage Name</label>
<input type="text" class="form-control" name="collage" placeholder="Google !"/>
</div>
<div class="col-lg-4">
<label>Location Company</label>
<input type="text" class="form-control" name="location" placeholder="Saudia"/>
</div>

<div class="col-lg-4">
<label>Degree</label>
<input type="name" class="form-control" name="degree" placeholder="bachelor"/>
</div>



<div class="col-lg-4">
<input type="hidden"  class="form-control" name="user_id"/>
</div>



</div>

</div>




<div class="form-group">

<div class="row">

<div class="col-lg-4">
<label>Start At</label>
<input type="date" class="form-control" name="start_at" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">

<label>End At</label>
<input type="date" class="form-control" name="end_at" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">

</div>
</div>

</div>

<div class="form-group">
<label for="exampleTextarea">Description <span class="text-danger">*</span></label>
<textarea class="form-control"  name="description" id="exampleTextarea" rows="3"></textarea>
</div>





</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button type="reset" class="btn btn-secondary">Cancel</button>
</div>
</form>
<!--end::Form-->
</div>
</x-admin-layout>
