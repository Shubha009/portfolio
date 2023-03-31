
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Update Contact</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('contact/update/'.$edit->id) }}" method="post"  >
                @csrf

                <div class="form-group">
                    @error('heading')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="email">Edit Email</label>
                    <input type="text" class="form-control" name="email" id="title" value="{{ $edit->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Edit Phone</label>
                    <input type="text" class="form-control" name="phone" id="designation" value="{{ $edit->phone }}">
                </div>
               
                <div class="form-group">
                    <label for="location">Edit Location</label>
                    <input type="text" class="form-control" name="location" id="location" value="{{ $edit->location }}">
                </div>
                <div class="form-group">
                    <label for="heading">Edit Map Iframe</label>
                    <textarea class="form-control" name="contact_map_iframe" id="contact_map_iframe" cols="10" rows="5">{{ $edit->contact_map_iframe }}</textarea>
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


