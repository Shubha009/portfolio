
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Feture</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('store/feture') }}" method="post" >
                @csrf
                
                <div class="form-group">
                    @error('title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="title">Feture Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Feture Title">
                </div>
                <div class="form-group p-2">@error('description')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Feture Description </label>
                    <textarea class="form-control" name="description" id="elm1" id="description" rows="3"> </textarea>
                </div>
                <div class="form-group">
                    <label for="description">Feture Icon </label>
                    <input class="form-control" name="icon"  id="description" placeholder="Enter Feture Icon" >  
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


