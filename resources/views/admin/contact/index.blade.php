
@extends('admin/admin-master')
@section('main-content')




    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Service</h4><br><br>
                <a href="{{ route('add/contact') }}"> <button class="btn btn-primary">Add Contact</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Service
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
                            <th scope="col" width="20%">Email</th>
                            <th scope="col" width="30%">Phone</th>
                            <th scope="col" width="20%" >Location</th>
                            {{-- <th scope="col" width="5%" >Map (Iframe_code)</th> --}}
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @php ($i = 1) --}}
                          @foreach ($contact_items as $items)
                          <tr>
                            <th width="5%">{{ $contact_items->firstItem()+$loop->index }}</th>
                            <td width="20%">{{ $items->email }}</td>
                            <td width="30%">{{ $items->phone }}</td>
                            <td width="20%">{{ $items->location }}</td>
                            {{-- <td width="5%">{{ $items->contact_map_iframe }}</td> --}}
                            
                            <td > 
                              <a href="{{ url('contact/edit/'.$items->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('contact/delete/'.$items->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach 
                           
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {{-- {!! $all_services->links() !!} --}}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


