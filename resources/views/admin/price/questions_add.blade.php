
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Price Items</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('questions/store') }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('question')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="question">Add Question</label>
                    <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question">
                </div>
                <div class="form-group">
                    @error('description')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Add Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


