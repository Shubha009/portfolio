
@extends('admin/admin-master')
@section('main-content')


<div class="col-lg-12 ">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Add Footer Info</h2>
        </div>
        <div class="card-body ">
            <form action="{{ route('footer/store') }}" method="post" >
                @csrf

                <div class="form-group">
                    @error('category')
                    <span  class="alert alert-danger">{{ $message }}</span>
                @enderror
                </div>

                    <div class="form-group">
                        <label for="amount">Company Name </label>
                        <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter Company Name">
                    </div>

                    <div class="form-group">
                        <label for="amount">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Phone </label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Copy Write Fist</label>
                        <input type="text" class="form-control" name="copywrite_first" id="copywrite_first" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Copy Write Last</label>
                        <input type="text" class="form-control" name="copywrite_last" id="copywrite_last" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Copy Wtrite Name</label>
                        <input type="text" class="form-control" name="copywrite_name" id="copywrite_name" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Developer Name</label>
                        <input type="text" class="form-control" name="developer_name" id="developer_name" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Developer URL</label>
                        <input type="text" class="form-control" name="developer_url" id="developer_url" placeholder="Enter Amount">
                    </div>
                
                    <div class="form-group">
                            <label for="amount">Twitter Icon</label>
                            <input type="text" class="form-control" name="twitter_icon" id="twitter_icon" placeholder="Enter Amount">
                        </div>
                    <div class="form-group">
                            <label for="amount">Twitter URL</label>
                            <input type="text" class="form-control" name="twitter_url" id="twitter_icon" placeholder="Enter Amount">
                        </div>

                    <div class="form-group">
                        <label for="amount">Facebook Icon</label>
                        <input type="text" class="form-control" name="facebook_icon" id="facebook_icon" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Facebook URL</label>
                        <input type="text" class="form-control" name="facebook_url" id="facebook_icon" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Instragram Icon</label>
                        <input type="text" class="form-control" name="instragram_icon" id="instragram_icon" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Instragram URL</label>
                        <input type="text" class="form-control" name="instragram_url" id="instragram_icon" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Skype Icon</label>
                        <input type="text" class="form-control" name="skype_icon" id="skype_icon" placeholder="Enter Amount">
                    </div>

                    <div class="form-group">
                        <label for="amount">Skype URL</label>
                        <input type="text" class="form-control" name="skype_url" id="skype_icon" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Linkedin Icon</label>
                        <input type="text" class="form-control" name="linkedin_icon" id="linkedin_icon" placeholder="Enter Amount">
                    </div>
                    <div class="form-group">
                        <label for="amount">Linkedin URL</label>
                        <input type="text" class="form-control" name="linkedin_url" id="linkedin_icon" placeholder="Enter Amount">
                    </div>
                    
                

                
                <div class="col-md-12">
                    <div class="form-footer pt-4 pt-5 mt-4 border-top ">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>





@endsection


