@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">Service Heading</h4><br><br>
                <a href="{{ route('add/service/heading') }}"> <button class="btn btn-primary">Add Heading</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Service Heading
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
                            <th scope="col" width="20%">Heading</th>
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                           @foreach ($service_headings as $heading)
                          <tr>
                            <th scope="row">{{ $service_headings->firstItem()+$loop->index }}</th>
                            <td>{{ $heading->heading }}</td>
                             <td> 
                              <a href="{{ url('service/heading/edit/'.$heading->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('service/heading/delete/'.$heading->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td> 
                          </tr>
                          @endforeach 
                          
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {!! $service_headings->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


