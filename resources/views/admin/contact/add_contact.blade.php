
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Contact</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store/contact') }}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    @error('email')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Add Email</label>
                    <input type="text" class="form-control" name="email" id="title" placeholder="Enter  Email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    @error('phone')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Add Phone</label>
                    <input type="text" class="form-control" name="phone" id="designation" placeholder="Enter  Phone" value="{{old('phone')}}">
                </div>
               
                <div class="form-group">
                    <label for="location">Add Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Enter  Location" value="{{old('location')}}">
                </div>
                <div class="form-group">
                    <label for="heading">Add Map Iframe</label>
                    <textarea class="form-control" name="contact_map_iframe" id="contact_map_iframe" cols="10" rows="5" >{{old('contact_map_iframe')}}</textarea>
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


