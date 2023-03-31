@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">
                

        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">
                    Edite Brand
                </div>
                <div class="card-body">
                <form action="{{ url('brand/update/'.$brands->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
                    <div class="form-group">
                      <label for="brandname">Brand Name</label>
                      <input type="text" class="form-control" name="brand_name" value="{{ $brands->brand_name }}">
                    </div>
                    <div class="form-group">
                        @error('brand_name')
                    <strong  class="alert alert-danger">{{ $message }}</strong>
                    @enderror
                    </div>
                    
                    <div class="form-group">
                      <label for="brandimage">Brand Image</label>
                      <input type="file" class="form-control" name="brand_image" >
                    </div>
                    <div class="form-group"><img src="{{ asset($brands->brand_image) }}" alt="Brand Image" style="width: 300px;height:200px;"></div>
                    <div class="form-group">
                        @error('brand_image')
                    <strong  class="alert alert-danger">{{ $message }}</strong>
                    @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Update Brand</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>
  
</div>
@endsection




