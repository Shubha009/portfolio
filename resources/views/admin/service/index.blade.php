
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Service</h4><br><br>
                <a href="{{ route('add/service') }}"> <button class="btn btn-primary">Add Service</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Service
                    </div>
                     @error('title')
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
                            <th scope="col" width="10%">Service Category</th>
                            <th scope="col" width="30%">Title</th>
                            <th scope="col" width="30%">Short Description</th>
                            
                            
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($all_services as $service)
                          <tr>
                            <th scope="row">{{ $all_services->firstItem()+$loop->index }}</th>
                            <td>{{ $service['service_cat']['service_category_name'] }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{!! $service->description !!}</td>
                            
                            
                            
                           
                            <td> 
                              <a href="{{ url('service/edite/'.$service->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('service/delete/'.$service->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                     
                      <div class="d-flex font-size-5">
                        {!! $all_services->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


