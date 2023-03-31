
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Service</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('service/store') }}" method="post" >
                @csrf
                
                <div class="form-group">
                    @error('title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="category">Service Category</label>
                    
                    <select id="category" name="service_category_id" class="form-control">
                        <option value="Selected">Select One</option>
                       @foreach($categories as $cat)
                        <option value="{{$cat->id}}"> {{$cat->service_category_name}} </option>
                        @endforeach
                      </select>
                </div>

                <div class="form-group">
                    <label for="title">Service Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Service Title">
                </div>
                <div class="form-group p-2">@error('description')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Service Description </label>
                    <textarea class="form-control" name="description" id="elm1" id="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="title"> Icon</label>
                    <input type="text" class="form-control" name="icon" id="icon" placeholder="Enter Service Icon">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


