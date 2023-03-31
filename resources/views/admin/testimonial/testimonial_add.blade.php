
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Testimonial</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('testimonial/store') }}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    @error('heading')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="title">Add Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter  Title">
                </div>
                <div class="form-group">
                    <label for="designation">Add Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter  Designation">
                </div>
                <div class="form-group">
                    <label for="description">Add Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter  Description">
                </div>
                <div class="form-group">
                    <label for="image">Add Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


