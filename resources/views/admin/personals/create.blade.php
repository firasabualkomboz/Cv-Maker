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
            <input type="text" class="form-control" name="name" placeholder="Enter Tag"/>
        </div>
        <div class="col-lg-4">
            <input type="hidden"  class="form-control" name="user_id"/>
        </div>



    </div>

</div>

<div class="form-group">
    <label for="exampleTextarea">Over view <span class="text-danger">*</span></label>
    <textarea class="form-control"  name="overview" id="exampleTextarea" rows="3"></textarea>
</div>


<div class="form-group">
<div class="row">

<div class="col-lg-4">
<label>Street</label>
<input type="text" class="form-control" name="street" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">
<label>City</label>
<input type="text" class="form-control" name="city" placeholder="Enter Tag"/>
</div>

<div class="col-lg-4">
<label>From</label>
<input type="text" class="form-control" name="from" placeholder="Enter Tag"/>
</div>

</div>
</div>


<div class="form-group">

<div class="row">
<div class="col-lg-4">
<label>email</label>
<input type="number" class="form-control" name="email" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">
<label>mobile</label>
<input type="number" class="form-control" name="mobile" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">

<label>telephone</label>
<input type="number" class="form-control" name="telephone" placeholder="Enter Tag"/>
</div>
<div class="col-lg-4">

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
</x-admin-layout>
