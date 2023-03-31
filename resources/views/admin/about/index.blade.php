
@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">About </h4><br><br>
                <a href="{{ route('add/about') }}"> <button class="btn btn-primary">Add About</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All About
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
                            <th scope="col" width="15%">Short Description</th>
                            <th scope="col" width="30%" >Long Description</th>
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($abouts as $about)
                          <tr>
                            <th scope="row">{{ $abouts->firstItem()+$loop->index }}</th>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->short_dis }}</td>
                            <td>{!! Str::limit($about->long_dis,100) !!}</td>
                            
                           
                            <td> 
                              <a href="{{ url('about/edite/'.$about->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {!! $abouts->links() !!}
                    </div>
        </div>
    </div>
    </div>

</div>

@endsection


