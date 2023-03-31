
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Team Membar Edit</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('team/membar/update/'.$team_membars->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="old_team_image" value="{{ $team_membars->image }}">
                <!-- <div class="form-group">
                    @error('heading')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div> -->

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $team_membars->title }}">
                </div>
                <div class="form-group">
                    <label for="heading">Designation</label>
                    <input type="text" class="form-control" name="designation" id="designation" value="{{ $team_membars->title }}">
                </div>
                <div class="form-group">
                    <label for="heading">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>
                <div class="form-group"><img src="{{ asset($team_membars->image) }}" alt="Slider Image" style="width: 150px;height:100px;"></div>
                <div class="form-group">
                    <label for="heading">Icon1</label>
                    <input type="text" class="form-control" name="icon1" id="icon1" value="{{ $team_membars->icon1 }}">
                </div>
                <div class="form-group">
                    <label for="heading">URL1</label>
                    <input type="text" class="form-control" name="url1" id="url1" value="{{ $team_membars->url1 }}">
                </div>
                <div class="form-group">
                    <label for="heading">Icon2</label>
                    <input type="text" class="form-control" name="icon2" id="icon2" value="{{ $team_membars->icon2 }}">
                </div>
                <div class="form-group">
                    <label for="heading">URL2</label>
                    <input type="text" class="form-control" name="url2" id="url2" value="{{ $team_membars->url2 }}">
                </div>
                <div class="form-group">
                    <label for="heading">Icon3</label>
                    <input type="text" class="form-control" name="icon3" id="icon3" value="{{ $team_membars->icon3 }}">
                </div>
                <div class="form-group">
                    <label for="heading">URL3</label>
                    <input type="text" class="form-control" name="url3" id="url3" value="{{ $team_membars->url3 }}">
                </div>
                <div class="form-group">
                    <label for="heading">Icon4</label>
                    <input type="text" class="form-control" name="icon4" id="icon4" value="{{ $team_membars->icon4 }}">
                </div>
                <div class="form-group">
                    <label for="heading">URL4</label>
                    <input type="text" class="form-control" name="url4" id="url4" value="{{ $team_membars->url4 }}">
                </div>
                <div class="form-group">
                    <label for="heading">Icon5</label>
                    <input type="text" class="form-control" name="icon5" id="icon5" value="{{ $team_membars->icon5 }}">
                </div>
                <div class="form-group">
                    <label for="heading">URL5</label>
                    <input type="text" class="form-control" name="url5" id="url5" value="{{ $team_membars->url5 }}">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


