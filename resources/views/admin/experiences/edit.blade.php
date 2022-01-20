<x-admin-layout title="Edit Article" category="Articles">
<div class="card card-custom">
<div class="card-header">
<h3 class="card-title">
Edit experience
</h3>
</div>
<!--begin::Form-->
<form method="post" action="{{route('admin.experiences.update',[$experience->id])}}" enctype="multipart/form-data">
@csrf
    @method('put')

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
<label>Company</label>
<input type="text" class="form-control" name="company" value="{{old('company',$experience->company)}}" placeholder=""/>
</div>

<div class="form-group">
<label>location</label>
<input type="text" class="form-control" name="location" value="{{old('location',$experience->location)}}" placeholder=""/>
</div>

<div class="form-group">
<label>jop title</label>
<input type="text" class="form-control" name="jop_title" value="{{old('jop_title',$experience->jop_title)}}" placeholder=""/>
</div>

<div class="form-group">
<label>start at</label>
<input type="date" class="form-control" name="start_at" value="{{old('start_at',$experience->start_at)}}" placeholder=""/>
</div>

<div class="form-group">
<label>end at</label>
<input type="date" class="form-control" name="end_at"   value="{{old('end_at',$experience->end_at)}}" placeholder=""/>
</div>

<div class="form-group mb-1">
<label for="exampleTextarea">description <span class="text-danger">*</span></label>
<textarea class="form-control"  name="description" value="{{old('description',$experience->description)}}" rows="3"></textarea>
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
