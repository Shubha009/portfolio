
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Service Category</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('service/category/update/'.$edit_servicecategory->id) }}" method="post" >
                @csrf
                
                    
                <div class="form-group">
                    @error('blog_category_title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="blog_category_title">Service Category Title</label>
                    <input type="text" class="form-control" name="service_category_name" id="blog_category_title" value="{{ $edit_servicecategory->service_category_name }}">
                </div>
                
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


