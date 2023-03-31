@extends('admin/admin-master')
@section('main-content')

    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="pr-3">Team Membar</h4><br><br>
                <a href="{{ route('team/membar/add') }}"> <button class="btn btn-primary">Add Team Membar</button> </a>

                <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Team Membar
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
                            <th scope="col" >Image</th>
                            {{-- <th scope="col" >Icon1</th>
                            <th scope="col" >URL1</th>
                            <th scope="col" >Icon2</th>
                            <th scope="col" >URL2</th>
                            <th scope="col" >Icon3</th>
                            <th scope="col" >URL3</th>
                            <th scope="col" >Icon4</th>
                            <th scope="col" >URL4</th>
                            <th scope="col" >Icon5</th>
                            <th scope="col" >URL5</th> --}}
                            <th scope="col" width="15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- @php ($i = 1) --}}
                          @foreach ($team_membars as $team_membar)
                          <tr>
                            <th scope="row">{{ $team_membars->firstItem()+$loop->index }}</th>
                            <td>{{ $team_membar->title }}</td>
                            <td>{{ $team_membar->designation }}</td>
                            <td>
                              <img src="{{ asset($team_membar->image) }}" alt="Team Image" style="width: 100px;height:80px;">
                            </td>
                            {{-- <td>{{ $team_membar->icon1 }}</td>
                            <td>{{ $team_membar->url1 }}</td>
                            <td>{{ $team_membar->icon2 }}</td>
                            <td>{{ $team_membar->url2 }}</td>
                            <td>{{ $team_membar->icon3 }}</td>
                            <td>{{ $team_membar->url3 }}</td>
                            <td>{{ $team_membar->icon4 }}</td>
                            <td>{{ $team_membar->url4 }}</td>
                            <td>{{ $team_membar->icon5 }}</td>
                            <td>{{ $team_membar->url5 }}</td> --}}
                            <td> 
                              <a href="{{ url('team/membar/edit/'.$team_membar->id) }}" class="btn btn-info">Edit</a>
                              <a href="{{ url('team/membar/delete/'.$team_membar->id) }}" onclick="return confirm('Are you sure want to Delet?')" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                      {{-- {{ $abouts->links() }} --}}
                      <div class="d-flex font-size-5">
                        {!! $team_membars->links() !!}
                    </div>
        </div>

    </div>
    </div>

    

</div>

@endsection


