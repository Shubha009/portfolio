
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Price Feture List</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('price/feture_list/update/'.$lists_item->id) }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('category')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="feture_list">Feture List</label>
                    <input type="text" class="form-control" name="feture_list" id="feture_list" value="{{ $lists_item->feture_list }}">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


