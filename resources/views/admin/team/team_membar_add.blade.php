
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Team Membar</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('team/membar/store') }}" method="post" enctype="multipart/form-data" >
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
                    <label for="heading">Add Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter  Heading">
                </div>
                <div class="form-group">
                    <label for="heading">Add Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                <div class="form-group">
                    <label for="heading">Add Icon1</label>
                    <input type="text" class="form-control" name="icon1" id="icon1" placeholder="Enter  Icon1">
                </div>
                <div class="form-group">
                    <label for="heading">Add URL1</label>
                    <input type="text" class="form-control" name="url1" id="url1" placeholder="Enter  URL1">
                </div>
                <div class="form-group">
                    <label for="heading">Add Icon2</label>
                    <input type="text" class="form-control" name="icon2" id="icon2" placeholder="Enter  Icon2">
                </div>
                <div class="form-group">
                    <label for="heading">Add URL2</label>
                    <input type="text" class="form-control" name="url2" id="url2" placeholder="Enter  URL2">
                </div>
                <div class="form-group">
                    <label for="heading">Add Icon3</label>
                    <input type="text" class="form-control" name="icon3" id="icon3" placeholder="Enter  Icon3">
                </div>
                <div class="form-group">
                    <label for="heading">Add URL3</label>
                    <input type="text" class="form-control" name="url3" id="url3" placeholder="Enter  URL3">
                </div>
                <div class="form-group">
                    <label for="heading">Add Icon4</label>
                    <input type="text" class="form-control" name="icon4" id="icon4" placeholder="Enter  Icon4">
                </div>
                <div class="form-group">
                    <label for="heading">Add URL4</label>
                    <input type="text" class="form-control" name="url4" id="url4" placeholder="Enter  URL4">
                </div>
                {{-- <div class="form-group">
                    <label for="heading">Add Icon5</label>
                    <input type="text" class="form-control" name="icon5" id="icon5" placeholder="Enter  Icon5">
                </div>
                <div class="form-group">
                    <label for="heading">Add URL5</label>
                    <input type="text" class="form-control" name="url5" id="url5" placeholder="Enter  URL5">
                </div> --}}
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


