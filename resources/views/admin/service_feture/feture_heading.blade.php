@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Feture Heading</h4><br><br>
                <a href="{{ route('add/feture/heading') }}"> <button class="btn btn-primary">Add Heading</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    All Feture Heading
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
                          
                           @foreach ($feture_headings as $heading)
                          <tr>
                            <th scope="row">{{ $feture_headings->firstItem()+$loop->index }}</th>
                            <td>{{ $heading->heading }}</td>
                             <td> 
                              <a href="{{ url('feture/heading/edit/'.$heading->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('feture/heading/delete/'.$heading->id) }}" id="delete" class="btn btn-danger">Delete</a>
                            </td> 
                          </tr>
                          @endforeach 
                          
                        </tbody>
                      </table>
                      {{ $feture_headings->links()}}
                      <div class="d-flex font-size-5">
                       
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


