
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Feture</h4><br><br>
                <a href="{{ route('add/feture') }}"> <button class="btn btn-primary">Add Feture</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Service Feture
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
                            <th scope="col" width="20%">Title</th>
                            <th scope="col" width="30%">Short Description</th>
                            <th scope="col" width="30%">Icon Name</th>
                            
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($all_fetures as $feture)
                          <tr>
                            <th scope="row">{{ $all_fetures->firstItem()+$loop->index }}</th>
                            <td>{{ $feture->title }}</td>
                            <td>{!! $feture->description !!}</td>
                            <td>{{$feture->icon }} </td>
                            
                            <td> 
                              <a href="{{ url('feture/edite/'.$feture->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('feture/delete/'.$feture->id) }}" id="delete" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      
                      <div class="d-flex font-size-5">
                        {{ $all_fetures->links() }}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


