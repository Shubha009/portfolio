@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">Questions</h4><br><br>
                <a href="{{ route('add/questions') }}"> <button class="btn btn-primary">Add Questions</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      Questions
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
                            <th scope="col" >Questions</th>
                            <th scope="col" >Description</th>
                            
                           
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @php ($i = 1) --}}
                          @foreach ($question_items as $question_item)
                          <tr>
                            <th scope="row">{{ $question_items->firstItem()+$loop->index }}</th>
                            <td>{{ $question_item->question }}</td>
                            <td>{{ $question_item->description }}</td>
                            
                            
                            <td> 
                              <a href="{{ url('questions/edit/'.$question_item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('questions/delete/'.$question_item->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {{-- {!! $price_items->links() !!} --}}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


