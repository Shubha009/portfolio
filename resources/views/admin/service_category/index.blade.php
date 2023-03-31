
@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3"> Service Category</h4><br><br>
                <a href="{{ route('add/service/category') }}"> <button class="btn btn-primary">Add Service Category</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Service Category
                    </div>
                     @error('blog_category_title')
                    <span  class="alert alert-danger">{{ $message }}</span>
                      @enderror 

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>  
                @endif 
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col" width="5%">SL No</th>
                            <th scope="col" width="20%">Service Category</th>
                            <th scope="col" width="20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($service_category_items as $service_category_item) 
                          <tr>
                            <th scope="row">{{ $service_category_items->firstItem()+$loop->index }}</th> 
                            <td>{{ $service_category_item->service_category_name }}</td>
                            <td> 
                              <a href="{{ url('service/category/edit/'.$service_category_item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('service/category/delete/'.$service_category_item->id) }}" id="delete" class="btn btn-danger">Delete</a> 
                            </td>
                          </tr>
                          @endforeach 
                          
                        </tbody>
                      </table>
                      
                      <div class="d-flex font-size-5">
                        {!! $service_category_items->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


