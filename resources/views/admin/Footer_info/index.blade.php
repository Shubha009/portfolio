@extends('admin/admin-master')
@section('main-content')
    <div class="py-12">
        <div class="container">
            <div class="row">

                <h4 class="p-3">Footer Info</h4><br><br>
                    <div class="p-3"><a href="{{ route('footer/add') }}"> <button class="btn btn-primary p-3">Add Footer Item</button> </a></div>
                
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Footer
                            </div>
                        
                        <div class="card-body ">
                                @foreach($footer_infos as $infos)
                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Company Name </label>
                                    <span class="form-control">{{$infos->company_name}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Address</label>
                                    <span class="form-control">{{$infos->address}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Phone </label>
                                    <span class="form-control">{{$infos->phone}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Email</label>
                                    <span class="form-control">{{$infos->email}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Copy Write Fist</label>
                                    <span class="form-control">{{$infos->copywrite_first}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Copy Write Last</label>
                                    <span class="form-control">{{$infos->copywrite_last}}</span>
                                </div>
                                </div>
                                

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Copy Wtrite Name</label>
                                    <span class="form-control">{{$infos->copywrite_name}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Developer Name</label>
                                    <span class="form-control">{{$infos->developer_name}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Developer URL</label>
                                    <span class="form-control">{{$infos->developer_url}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Twitter</label>
                                    <span class="form-control">{{$infos->twitter_icon}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Facebook</label>
                                    <span class="form-control">{{$infos->facebook_icon}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Instragram</label>
                                    <span class="form-control">{{$infos->instragram_icon}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Skype</label>
                                    <span class="form-control">{{$infos->skype_icon}}</span>
                                </div>
                                </div>

                                <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <label for="amount">Linkedin</label>
                                    <span class="form-control">{{$infos->linkedin_icon}}</span>
                                </div>
                                </div>

                            <div class=" form-group p-3">
                              <a href="{{ url('footer/info/edit/'.$infos->id) }}"> <button class="btn btn-info p-3"> Edit </button> </a>
                              <a href="{{ url('footer/info/delete/'.$infos->id) }}"> <button class="btn btn-danger p-3"> Delete</button> </a>
                            </div>
                            @endforeach
              </div>
        </div>
    </div>
    </div>
</div>

@endsection


