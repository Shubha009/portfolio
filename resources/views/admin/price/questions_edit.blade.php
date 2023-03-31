
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Price Items</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('questions/update/'.$editquestion->id) }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('category')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category">Edit Question</label>
                    <input type="text" class="form-control" name="question" id="question" value="{{ $editquestion->question }}">
                </div>
                <div class="form-group">
                    @error('title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="amount">Add Description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $editquestion->description }}">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


