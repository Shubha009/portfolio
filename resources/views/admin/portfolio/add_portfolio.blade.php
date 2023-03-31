
@extends('admin/admin-master')
@section('main-content')

<div class="col-lg-8">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Portfolio</h2>
        </div>

        <div class="card-body">
        <form action="{{ route('store/portfolio') }}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                        <label for="Portfolio_name"> Portfolio Category</label>
                      <select class="form-control" name="category_id" id="category_id">
                        <option value=""> -- Seletect One -- </option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                        
                      </select>
                    </div> 

                    <div class="form-group">
                      <label for="portfolio_name"> Portfolio Name</label>
                      <input type="text" class="form-control" name="portfolio_name">
                    </div>

                    <div class="form-group">
                      <label for="client_name"> Client Name</label>
                      <input type="text" class="form-control" name="client_name">
                    </div>

                    <div class="form-group">
                      <label for="project_date"> Project Date</label>
                      <input type="date" class="form-control" name="project_date">
                    </div>

                    <div class="form-group">
                      <label for="project_url"> Project Url </label>
                      <input type="text" class="form-control" name="project_url">
                    </div>

                    <div class="form-group">
                      <label for="description"> Description </label>
                      <input type="text" class="form-control" name="description">
                    </div>

                    <div class="form-group">
                      <label for="Portfolio_image"> Portfolio Image</label>
                      <input type="file" class="form-control" name="image" multiple="">
                    </div>

                    <div class="form-group">
                        @error('image')
                    <strong  class="alert alert-danger">{{ $message }}</strong>
                    @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Add Portfolio</button>
                  </form>
        </div>
    </div>

    
@endsection


