
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Slider Edite</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('slider/update/'.$sliders->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_slide" value="{{ $sliders->image }}">
                <div class="form-group">
                    <label for="title">Slider Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $sliders->title }}">
                </div>
                
                <div class="form-group">
                    <label for="description">Slider Description </label>
                    <textarea class="form-control" name="description" id="elm1" id="description" rows="3" >{!! $sliders->description !!}</textarea>
                </div>
                
                    <div class="form-group">
                        <label for="image">Slider Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" >
                    </div>
                    <div class="form-group"><img src="{{ asset($sliders->image) }}" alt="Slider Image" style="width: 150px;height:100px;"></div>
                
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection


