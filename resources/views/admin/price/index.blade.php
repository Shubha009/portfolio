@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">Pricing</h4><br><br>
                <a href="{{ route('add/price') }}"> <button class="btn btn-primary">Add Price Item</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pricing
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
                            <th scope="col" >Category</th>
                            <th scope="col" >Amount</th>
                            <th scope="col" >Time</th>
                            <th scope="col" >Feture List</th>
                           
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                          @foreach ($price_items as $price_item)
                          <tr>
                            <th scope="row">{{ $price_items->firstItem()+$loop->index }}</th>
                            <td>{{ $price_item['category']['category_name'] }}</td>
                            <td>{{ $price_item->amount }}</td>
                            <td >{{ $price_item->time }}</td>
                            <td >
                              @php
                              $exployed = explode(',',$price_item->feture_list_id)
                              @endphp
                              @foreach($exployed as $feture_list_id)
                                @php
                                $lists =  App\Models\Feture_list::where('id',$feture_list_id)->get();
                                @endphp
                                @foreach($lists as $list)
                                  <li> {{$list->feture_list}} </li>
                                @endforeach
                              @endforeach
                            </td>
                            <!-- <td>{{ $price_item['feturelist']['feture_list'] }}</td>  -->
                            <td> 
                              <a href="{{ url('price/edit/'.$price_item->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('price/delete/'.$price_item->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      <div class="d-flex font-size-5">
                        {!! $price_items->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


