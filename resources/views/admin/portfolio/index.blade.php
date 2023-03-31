@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

            
            <h4 class="pr-3">Portfolio</h4><br><br>
                <a href="{{ route('add/portfolio') }}"> <button class="btn btn-primary">Add Portfolio</button> </a>
            
                
                <div class="col-md-12">
                    @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>  
                @endif
                <div class="card-group">

                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col" width="5%">SL No</th>
                              
                              
                              <th scope="col" width="10%">Category Name</th>
                              <th scope="col" width="10%">Portfolio Name</th>
                              <th scope="col" width="10%"> Client Name </th>
                              <th scope="col" width="10%"> Project Date </th>
                              <th scope="col" width="10%"> Project Url </th>
                              <th scope="col" width="10%"> Description </th>
                              <th scope="col" width="10%">Image</th>
                              <th scope="col" width="15%">Action</th>
                            </tr>
                          </thead>
                        @foreach ($portfolioes as $portfolio)
                        <tr>
                            <td>
                                {{ $portfolioes->firstItem()+$loop->index }}
                            </td>
                            
                            <td>
                                {{ $portfolio['portfolio_cat']['category_name'] }} 
                            </td>
                            <td>
                                {{ $portfolio->portfolio_name }}
                            </td>
                            <td>
                                {{ $portfolio->client_name }}
                            </td>
                            <td>
                                {{ $portfolio->project_date }}
                            </td>
                            <td>
                                {{ Str::limit($portfolio->project_url,15) }}
                            </td>
                            <td>
                                {{ Str::limit($portfolio->description,30) }}
                            </td>
                            <td > 
                                <img src="{{ asset($portfolio->image) }}" alt="" width="100">
                            </td>
                            <td width="40%">
                                <a href="{{ url('portfolio/edite/'.$portfolio->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ url('portfolio/delete/'.$portfolio->id) }}" class="btn btn-danger" id="delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $portfolioes->links() !!}

                </div>
          </div>
    </div>
</div>
@endsection




