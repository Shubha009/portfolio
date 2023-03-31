@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3"> Service Link</h4><br><br>
                <a href="{{ route('footer/service/link/add') }}"> <button class="btn btn-primary">Add Service Link</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    Footer Service Link
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
                            <th scope="col" width="1%">SL No</th>
                            <th scope="col" >Name</th>
                            <th scope="col" >URL</th>
                            
                           
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          @foreach ($footer_service_links as $links)
                          <tr>
                            <th scope="row">{{ $footer_service_links->firstItem()+$loop->index }}</th>
                            <td>{{ $links->link_name }}</td>
                            <td>{{ $links->link_url }}</td>
                            
                            
                            <td> 
                              <a href="{{ url('footer/service/link/edit/'.$links->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('footer/service/link/delete/'.$links->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      <div class="d-flex font-size-5">
                        {!! $footer_service_links->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


