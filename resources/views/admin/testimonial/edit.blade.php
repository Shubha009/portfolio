
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Testimonial Edit</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('testimonial/update/'.$edit_testimonials->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="old_testimonials_image" value="{{ $edit_testimonials->image }}">
                <!-- <div class="form-group">
                    @error('heading')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div> -->

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $edit_testimonials->title }}">
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ $edit_testimonials->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $edit_testimonials->title }}">
                </div>
                <div class="form-group">
                    <label for="heading">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                <div class="form-group"><img src="{{ asset($edit_testimonials->image) }}" alt="Slider Image" style="width: 150px;height:100px;"></div>

                
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


