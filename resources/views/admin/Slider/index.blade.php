
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Home Slider</h4><br><br>
                <a href="{{ route('add/slider') }}"> <button class="btn btn-primary">Add Slider</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Slider
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
                            <th scope="col" width="20%">Slider Title</th>
                            <th scope="col" width="30%">Description</th>
                            <th scope="col" width="15%">Image</th>
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($sliders as $slider)
                          <tr>
                            <th scope="row">{{ $sliders->firstItem()+$loop->index }}</th>
                            <td>{{ $slider->title }}</td>
                            <td>{!! Str::limit($slider->description,80) !!}</td>
                            <td> <img src="{{ asset($slider->image) }}" alt="Brand Image" style="width: 100px;height:80px;"></td>
                           
                            <td> 
                              <a href="{{ url('slider/edite/'.$slider->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{ $sliders->links() }}
            </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


