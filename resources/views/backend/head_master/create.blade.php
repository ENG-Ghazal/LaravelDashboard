@extends('backend.master')

@section('content')
<div class="right_col" role="main">
<h3> Add Head Master  </h3>
<div>
    <hr>
</div>
<form  action="{{ route('head-master.create') }}"
     method="post" enctype="multipart/form-data"   autocomplete="false">
    @csrf

    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">First Name
            <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control"  name="first_name" placeholder=""
              required="required"  type="text">
        </div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Middle Name<span
            class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" name="middle_name"
            type="text"></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">
            Last Name<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" name="last_name"
            type="text"></div>
    </div>

    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">BirthDate<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" type="date" name="birthdate" required="required"></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" name="address" type="text"></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Phone<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input class="form-control" name="phone" type="tel"></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Certificates<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input required="required" type="text" name="certificates" class="form-control"></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Notes<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <textarea required="required" name="note" class="form-control"></textarea></div>
    </div>
    <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Image<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6">
            <input name="image" type="file" class="form-control">
       @error('image')
       <p style="color: red"> {{ $message }} </p>
       @enderror
        </div>


    </div>
   <div class="clearfix">

   </div>
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>
        </div>
    </div>
</form>


</div>
@endsection
