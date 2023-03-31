
@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3"> Blog Category</h4><br><br>
                <a href="{{ route('add/blog/category') }}"> <button class="btn btn-primary">Add Blog Category</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Blog Category
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
                            <th scope="col" width="20%">Blog Category</th>
                            <th scope="col" width="20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($blog_category_items as $blog_category_item) 
                          <tr>
                            <th scope="row">{{ $blog_category_items->firstItem()+$loop->index }}</th> 
                            <td>{{ $blog_category_item->blog_category_title }}</td>
                            <td> 
                              <a href="{{ url('blog/category/edit/'.$blog_category_item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('blog/category/delete/'.$blog_category_item->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a> 
                            </td>
                          </tr>
                          @endforeach 
                          
                        </tbody>
                      </table>
                      
                      <div class="d-flex font-size-5">
                        {!! $blog_category_items->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


