
@extends('admin/admin-master')
@section('main-content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Blog Post</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('blog/post/update/'.$edit_blogpost->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_blogpost_image" value="{{ $edit_blogpost->blog_image }}">

                <div class="form-group">
                    @error('blog_category_id')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category">Blog Category</label>
                    
                    <select id="category" name="blog_category_id" class="form-control">
                        <option value="Selected">Select One</option>
                       @foreach($categories as $cat)
                        <option value="{{$cat->id}}" {{$cat->id == $edit_blogpost->blog_category_id ? 'Selected' : '' }} > {{$cat->blog_category_title}} </option>
                        @endforeach
                      </select>
                </div>

                <div class="form-group">
                    @error('blog_post_title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category">Blog Post Title</label>
                    <input type="text" class="form-control" name="blog_post_title" id="title" value="{{ $edit_blogpost->blog_post_title }}">
                </div>
                <div class="form-group p-2">
                    @error('blog_description')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="blog_description" id="elm1" id="blog_description" cols="30" rows="5" >{!! $edit_blogpost->blog_description !!}</textarea>
                </div>

                <div class="form-group">
                    <label for="description">Tags</label>
                    <input type="text" class="form-control" name="tags" id="tags" cols="10" rows="5" data-role="tagsinput"  value="{{ $edit_blogpost->tags }}" >
                </div>

                <div class="form-group p-2">
                    @error('image')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="image">Add Image </label>
                    <input type="file" class="form-control-file" name="blog_image" id="blog_image" > 
                    
                </div>

                <div class="form-group">
                 <label for="example-text-input" >  </label>
                <img id="showImage" class="rounded avatar-lg" src="{{ asset($edit_blogpost->blog_image) }}" alt="Card image cap" style="width: 150px;height:100px;">
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
    
    $(document).ready(function(){
        $('#blog_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection


