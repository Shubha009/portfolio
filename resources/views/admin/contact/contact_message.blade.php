
@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">Contact Message</h4>
                <div class="col-md-12">
                <div class="card">
                  
                    <div class="card-header">
                        All Contact Message
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
                            <th scope="col" width="10%">Name</th>
                            <th scope="col" width="10%">Email</th>
                            <th scope="col" width="15%" >Subject</th>
                            <th scope="col" width="15%" >Message</th>
                            <th scope="col" width="15%" >Time</th>
                            <th scope="col" width="20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($contact_message_items as $items)
                          <tr>
                            <th >{{ $contact_message_items->firstItem()+$loop->index }}</th>
                            <td >{{ $items->name }}</td>
                            <td >{{ $items->email }}</td>
                            <td> <textarea name="" id="" cols="30" rows="4">{{ $items->subject }}</textarea> </td>
                            <td ><textarea name="" id="" cols="30" rows="4">{{ $items->message }}</textarea></td>
                            <td >{{ $items->created_at }}</td>
                            
                            
                            
                            <td > 
                              <a href="{{ url('contact/message/view/'.$items->id) }}" class="btn btn-info">View</a>
                              <a href="{{ url('contact/message/delete/'.$items->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach 
                           
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {!! $contact_message_items->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


