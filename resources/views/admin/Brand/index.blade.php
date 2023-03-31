
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        All Brand
                    </div>
                    @error('brands')
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
                            <th scope="col">S/N</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Brand Image</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($brands as $brand)
                          <tr>
                            <th scope="row">{{ $brands->firstItem()+$loop->index }}</th>
                            <td>{{ $brand->brand_name }}</td>
                            <td> <img src="{{ asset($brand->brand_image) }}" alt="Brand Image" style="width: 70px;height:40px;"></td>
                            <td>
                              @if ($brand->created_at == Null)
                              <span>No Date Set</span>
                              
                              @else
                              {{ $brand->created_at->diffForHumans() }}
                              @endif
                            </td>
                            <td> 
                              <a href="{{ url('brand/edite/'.$brand->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('brand/delete/'.$brand->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{ $brands->links() }}
            </div>
        </div>
{{-- column 4 --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Brand
                </div>
                <div class="card-body">
                <form action="{{ route('brand/store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="brandname">Brand Name</label>
                      <input type="text" class="form-control" name="brand_name" placeholder="Enter Brand Name">
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
                    <div class="form-group">
                        @error('brand_image')
                    <strong  class="alert alert-danger">{{ $message }}</strong>
                    @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Add Brand</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- trashed Area --}}
    {{-- /*
    <div class="container">
      <div class="row">
          <div class="col-md-8">
          <div class="card">
              <div class="card-header">
                  Trashed Brand List
              </div>
             
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">S/N</th>
                      <th scope="col">Brand Name</th>
                      <th scope="col">User Name</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @php ($i = 1) --}}
                    {{-- @foreach ($trashBrand as $brand)
                    <tr>
                      <th scope="row">{{ $trashBrand->firstItem()+$loop->index }}</th>
                      <td>{{ $brand->category_name }}</td>
                      <td> {{ $brand->user->name }}</td>
                      <td>
                        @if ($brand->created_at == Null)
                        <span>No Date Set</span>
                        
                        @else
                        {{ $brand->created_at->diffForHumans() }}
                        @endif
                      </td>
                      <td> 
                        <a href="{{ url('brand/restore/'.$brand->id) }}" class="btn btn-info">Restore</a>
                        <a href="{{ url('brand/pdelete/'.$brand->id) }}" class="btn btn-danger">Force Delete</a>
                      </td>
                    </tr>
                    @endforeach 
                    
                  </tbody>
                </table>
                {{ $trashBrand->links() }}
            </div>
        </div>
    <div class="col-md-4">
</div>
</div>
</div>  --}}

</div>

@endsection


