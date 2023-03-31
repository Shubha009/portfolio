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

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        All Price Feture List
                    </div>
                     @error('category_name')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror 

                <!-- @if (session('category_name'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>  
                @endif -->

                <!-- @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>  
                @endif -->
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Feture List </th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($feture_lists as $list)
                          <tr>
                            <th scope="row">{{ $feture_lists->firstItem()+$loop->index }}</th>
                            <td>{{ $list->feture_list }}</td>
                            
                            
                            <td> 
                              <a href="{{ url('price/feture_list/edit/'.$list->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('price/feture_list/softdelete/'.$list->id) }}" class="btn btn-danger" id="delete">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{ $feture_lists->links() }}
            </div>
            
        </div>
{{-- column 4 --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Price Feture List
                </div>

                {{-- @error('category_name')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>  
                @endif --}}
                
                <div class="card-body">
                  <form action="{{ route('price/feture_list/store') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="feture">Add feture </label>
                            <!-- <input type="text" class="form-control" name="feture_list[]" id="feture_list" data-role="tagsinput" placeholder="Enter Feture"> -->
                            <input type="text" class="form-control" name="feture_list" id="feture_list"  placeholder="Enter Feture List" multiple="multiple">
                        </div>

                    <button type="submit" class="btn btn-outline-primary">Add Feture List</button>
                  </form>
                </div>

                
            </div>
        </div>
    </div>
    </div>







  <div class="container">
      <div class="row">
          <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                  Trashed Feture List
              </div>
             
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">S/N</th>
                      <th scope="col"> Feture List</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($trashfeture_lists as $feture_lists)
                    <tr>
                      <th scope="row">{{ $trashfeture_lists->firstItem()+$loop->index }}</th>
                      <td>{{ $feture_lists->feture_list }}</td>
                      
                      
                      <td> 
                        <a href="{{ url('price/feture_list/restore/'.$feture_lists->id) }}" class="btn btn-info">Restore</a>
                        <a href="{{ url('price/feture_list/pdelete/'.$feture_lists->id) }}" class="btn btn-danger">Force Delete</a>
                      </td>
                    </tr>
                    @endforeach 
                    
                  </tbody>
                </table>
                {{ $trashfeture_lists->links() }}
      </div> 
      
  </div>

  <div class="col-md-4">


  </div>

</div>
</div>
</div>
   

@endsection




