
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Blog Category</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('blog/category/store') }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('blog_category_title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category">Blog Category Title</label>
                    <input type="text" class="form-control" name="blog_category_title" id="blog_category_title" placeholder="Enter Blog Category Name">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


