@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">
                

        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header">
                    Edite Portfolio
                </div>
                <div class="card-body">
                <form action="{{ url('portfolio/update/'.$portfolio_up->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{ $portfolio_up->image }}">
                    
                    <div class="form-group">
                        <label for="Portfolio_name"> Portfolio Category</label>
                      <select class="form-control" name="category_id" id="category_id">
                        
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $portfolio_up->category_id ? 'Selected' : '' }} >{{ $cat->category_name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="portfolio_name"> Portfolio Name</label>
                      <input type="text" class="form-control" name="portfolio_name"  value="{{$portfolio_up->portfolio_name}}">
                    </div>

                    <div class="form-group">
                      <label for="client_name"> Client Name</label>
                      <input type="text" class="form-control" name="client_name" value="{{$portfolio_up->client_name}}">
                    </div>

                    <div class="form-group">
                      <label for="project_date"> Project Date</label>
                      <input type="date" class="form-control" name="project_date" value="{{$portfolio_up->project_date}}">
                    </div>

                    <div class="form-group">
                      <label for="project_url"> Project Url</label>
                      <input type="text" class="form-control" name="project_url" value="{{$portfolio_up->project_url}}">
                    </div>

                    <div class="form-group">
                      <label for="description"> Description </label>
                      <input type="text" class="form-control" name="description" value="{{$portfolio_up->description}}">
                    </div>



                    <div class="form-group">
                      <label for="brandimage">Portfolio Image</label>
                      <input type="file" class="form-control" name="image" >
                    </div>

                    <div class="form-group">
                        <img src="{{ asset($portfolio_up->image) }}" alt="portfolio Image" style="width: 300px;height:200px;">
                    </div>
                    
                    <div class="form-group">
                        @error('image')
                        <strong  class="alert alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-outline-primary">Update Profolio</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>
  
</div>
@endsection




