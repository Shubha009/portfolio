
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3"> Blog Post</h4><br><br>
                <a href="{{ route('blog/post/add') }}"> <button class="btn btn-primary">Add Blog Post</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Blog Post
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
                            <th scope="col" width="15%">Title</th>
                            <th scope="col" width="10%">User Name</th>
                            <th scope="col" width="12%">Blog category</th>
                            <th scope="col" width="10%" >Description</th>
                            <th scope="col" width="10%" >Tags</th>
                            <th scope="col" width="10%" >Image</th>
                            <th scope="col" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($blog_post_items as $blog_post_item)
                          <tr>
                            <th scope="row">{{ $blog_post_items->firstItem()+$loop->index }}</th>
                            <td>{{ $blog_post_item->blog_post_title }}</td>
                            <td>{{ $blog_post_item->user->name }}</td>
                            <td>{{ $blog_post_item['category']['blog_category_title'] }}</td>
                            
                            <td> <textarea name="" id="" cols="25" rows="5">{!! $blog_post_item->blog_description !!}</textarea> </td>
                            <td>{{ $blog_post_item->tags }}</td>
                            <td>
                              <img src="{{ asset($blog_post_item->blog_image) }}" alt="Team Image" style="width: 100px;height:80px;">
                            </td>
                            
                            
                           
                            <td> 
                              <a href="{{ url('blog/post/edit/'.$blog_post_item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('blog/post/delete/'.$blog_post_item->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a> 
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      
                      <div class="d-flex font-size-5">
                        {{ $blog_post_items->links() }}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


