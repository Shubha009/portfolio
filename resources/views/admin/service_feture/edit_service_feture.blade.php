
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Service Feture Update</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('feture/update/'.$feture->id) }}" method="post" >
                @csrf

                
                <div class="form-group">
                    @error('title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="title">Service Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $feture->title }}">
                </div>
                <div class="form-group p-2">@error('description')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Short Description </label>
                    <textarea class="form-control" name="description" id="elm1" id="description" rows="3">{!! $feture->description !!}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Service Icon</label>
                    <input type="text" class="form-control" name="icon" id="title" value="{{ $feture->icon }}">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


