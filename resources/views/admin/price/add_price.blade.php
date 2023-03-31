
@extends('admin/admin-master')
@section('main-content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>


<div class="col-lg-12 ">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Price Items</h2>
        </div>
        <div class="card-body ">
            <form action="{{ route('price/store') }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('category')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    {{-- <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Enter Category Name"> --}}
                    <select id="category" name="category_id" class="form-control">
                        <option value="Selected">Select One</option>
                       @foreach($categories as $cat)
                        <option value="{{$cat->id}}"> {{$cat->category_name}} </option>
                        @endforeach
                      </select>
                </div>

                <div class="form-group">

                <span >
                <input type="checkbox" id="featured"  name="featured" value="Featured">
                <label for="featured"> Featured</label><br>
                </span>
                <span >
                <input type="checkbox" id="advanced" name="advanced" value="Advanced">
                <label for="advanced"> Advanced</label><br>
                </span>

                </div>

                

                <div class="form-group">
                    <label for="amount">Add Amount</label>
                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                </div>
                <div class="form-group p-2">
                    @error('time')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="time">Add Time </label>
                    
                    <select id="time" name="time" class="form-control">
                        <option value="Monthly">Monthly</option>
                        <option value="Yearly">Yearly</option>
                        
                      </select>
                </div>
                <div class="form-group p-2">
                    @error('feture')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="feture_list">Feture List</label>
                    <select id="feture_list" name="feture_list_id[]" class="form-control feture_list" multiple="multiple">
                        
                       @foreach($feture_list_items as $list_item)
                        <option value="{{$list_item->id}}"> {{$list_item->feture_list}} </option>
                        @endforeach
                      </select>
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top ">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>


    
   <script>
     $(document).ready(function() {
    $('.feture_list').select2();
});
   </script>

   
@endsection




