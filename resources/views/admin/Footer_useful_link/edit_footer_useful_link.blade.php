@extends('admin/admin-master')
@section('main-content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Footer Info</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('footer/useful/link/update/'.$edit_useful_link->id) }}" method="post" >
                @csrf

                
                <div class="form-group">
                    <label for="amount"> Name </label>
                    <input type="text" class="form-control" name="link_name" id="link_name" value="{{$edit_useful_link->link_name}}">
                </div>

                <div class="form-group">
                    <label for="amount">URL</label>
                    <input type="text" class="form-control" name="link_url" id="link_url" value="{{$edit_useful_link->link_url}}">
                </div>
                

                

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>




    
@endsection


