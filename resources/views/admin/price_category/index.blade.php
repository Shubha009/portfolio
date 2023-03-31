@extends('admin/admin-master')
@section('main-content')


    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        All Price Category
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
                            <th scope="col">Category Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($category_item as $item)
                          <tr>
                            <th scope="row">{{ $category_item->firstItem()+$loop->index }}</th>
                            <td>{{ $item->category_name }}</td>
                            
                            <td>
                              @if ($item->created_at == Null)
                              <span>No Date Set</span>
                              
                              @else
                              {{ $item->created_at->diffForHumans() }}
                              @endif
                            </td>
                            <td> 
                              <a href="{{ url('price/category/edit/'.$item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('price/category/softdelete/'.$item->id) }}" class="btn btn-danger" id="delete">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{ $category_item->links() }}
            </div>
            
        </div>
{{-- column 4 --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Category
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
                <form action="{{ route('price/category/store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="categoryname">Category Name</label>
                      <input type="text" class="form-control" name="category_name" placeholder="Enter category Name">
                    </div>
                    
                    <button type="submit" class="btn btn-outline-primary">Add Category</button>
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
                  Trashed Category List
              </div>
             
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">S/N</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($trashCat as $item)
                    <tr>
                      <th scope="row">{{ $trashCat->firstItem()+$loop->index }}</th>
                      <td>{{ $item->category_name }}</td>
                      
                      <td>
                        @if ($item->created_at == Null)
                        <span>No Date Set</span>
                        
                        @else
                        {{ $item->created_at->diffForHumans() }}
                        @endif
                      </td>
                      <td> 
                        <a href="{{ url('price/category/restore/'.$item->id) }}" class="btn btn-info">Restore</a>
                        <a href="{{ url('price/category/pdelete/'.$item->id) }}" class="btn btn-danger">Force Delete</a>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                {{ $trashCat->links() }}
      </div> 
      
  </div>

  <div class="col-md-4">


  </div>

</div>
</div>
</div>
    
    
@endsection




