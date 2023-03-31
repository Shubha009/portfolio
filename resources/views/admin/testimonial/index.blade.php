@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Testimonials</h4><br><br>
                <a href="{{ route('testimonial/add') }}"> <button class="btn btn-primary">Add Team Membar</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Testimonials
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
                            <th scope="col" >Title</th>
                            <th scope="col" >Designation</th>
                            <th scope="col" >Description</th>
                            <th scope="col" >Image</th>
                            
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @php ($i = 1) --}}
                          @foreach ($testimonials as $testimonial)
                          <tr>
                            <th scope="row">{{ $testimonials->firstItem()+$loop->index }}</th>
                            <td>{{ $testimonial->title }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>{{ $testimonial->description }}</td>
                            <td>
                              <img src="{{ asset($testimonial->image) }}" alt="Team Image" style="width: 100px;height:80px;">
                            </td>
                            
                            <td> 
                              <a href="{{ url('testimonial/edit/'.$testimonial->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('testimonial/delete/'.$testimonial->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {!! $testimonials->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


