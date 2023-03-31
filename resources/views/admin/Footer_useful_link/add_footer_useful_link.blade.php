
@extends('admin/admin-master')
@section('main-content')


<div class="col-lg-12 ">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Useful Link  </h2>
        </div>
        <div class="card-body ">
            <form action="{{ route('footer/useful/link/store') }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('category')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>

                    <div class="form-group">
                        <label for="amount"> Name </label>
                        <input type="text" class="form-control" name="link_name" id="link_name" placeholder="Enter  Name">
                    </div>

                    <div class="form-group">
                        <label for="amount">URL</label>
                        <input type="text" class="form-control" name="link_url" id="link_url" placeholder="Enter URL">
                    </div>

                    
                

                
                <div class="col-md-12">
                    <div class="form-footer pt-4 pt-5 mt-4 border-top ">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>





@endsection


