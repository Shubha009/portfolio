@extends('admin/admin-master')
@section('main-content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Footer Info</h2>
        </div>
        <div class="card-body">
            <form action="{{ url('footer/info/update/'.$edit_footer->id) }}" method="post" >
                @csrf

                
                <div class="form-group">
                    <label for="amount">Company Name </label>
                    <input type="text" class="form-control" name="company_name" id="company_name" value="{{$edit_footer->company_name}}">
                </div>

                <div class="form-group">
                    <label for="amount">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{$edit_footer->address}}">
                </div>
                

                
                <div class="form-group">
                    <label for="amount">Phone </label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="{{$edit_footer->phone}}">
                </div>

                <div class="form-group">
                    <label for="amount">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$edit_footer->email}}">
                </div>
                

                
                <div class="form-group">
                    <label for="amount">Copy Write Fist</label>
                    <input type="text" class="form-control" name="copywrite_first" id="copywrite_first" value="{{$edit_footer->copywrite_first}}">
                </div>

                <div class="form-group">
                    <label for="amount">Copy Write Last</label>
                    <input type="text" class="form-control" name="copywrite_last" id="copywrite_last" value="{{$edit_footer->copywrite_last}}">
                </div>

                <div class="form-group">
                    <label for="amount">Copy Wtrite Name</label>
                    <input type="text" class="form-control" name="copywrite_name" id="copywrite_name" value="{{$edit_footer->copywrite_name}}">
                </div>

                <div class="form-group">
                    <label for="amount">Developer Name</label>
                    <input type="text" class="form-control" name="developer_name" id="developer_name" value="{{$edit_footer->developer_name}}">
                </div>
                
                <div class="form-group">
                    <label for="amount">Developer URL</label>
                    <input type="text" class="form-control" name="developer_url" id="developer_url" value="{{$edit_footer->developer_url}}">
                </div>

                <div class="form-group">
                    <label for="amount">Twitter Icon</label>
                    <input type="text" class="form-control" name="twitter_icon" id="twitter_icon" value="{{$edit_footer->twitter_icon}}">
                </div>
                <div class="form-group">
                    <label for="amount">Twitter URL</label>
                    <input type="text" class="form-control" name="twitter_url" id="twitter_icon" value="{{$edit_footer->twitter_url}}">
                </div>
                
                <div class="form-group">
                    <label for="amount">Facebook Icon</label>
                    <input type="text" class="form-control" name="facebook_icon" id="facebook_icon" value="{{$edit_footer->facebook_icon}}">
                </div>
                <div class="form-group">
                    <label for="amount">Facebook URL</label>
                    <input type="text" class="form-control" name="facebook_url" id="facebook_icon" value="{{$edit_footer->facebook_url}}">
                </div>
                
                
                <div class="form-group">
                    <label for="amount">Instragram Icon</label>
                    <input type="text" class="form-control" name="instragram_icon" id="instragram_icon" value="{{$edit_footer->instragram_icon}}">
                </div>

                <div class="form-group">
                    <label for="amount">Instragram URL</label>
                    <input type="text" class="form-control" name="instragram_url" id="instragram_icon" value="{{$edit_footer->instragram_url}}">
                </div>
                
                <div class="form-group">
                    <label for="amount">Skype Icon</label>
                    <input type="text" class="form-control" name="skype_icon" id="skype_icon" value="{{$edit_footer->skype_icon}}">
                </div>
                <div class="form-group">
                    <label for="amount">Skype URL</label>
                    <input type="text" class="form-control" name="skype_url" id="skype_icon" value="{{$edit_footer->skype_url}}">
                </div>
                
                <div class="form-group">
                    <label for="amount">Linkedin Icon</label>
                    <input type="text" class="form-control" name="linkedin_icon" id="linkedin_icon" value="{{$edit_footer->linkedin_icon}}">
                </div>
                <div class="form-group">
                    <label for="amount">Linkedin URL</label>
                    <input type="text" class="form-control" name="linkedin_url" id="linkedin_icon" value="{{$edit_footer->linkedin_url}}">
                </div>
                

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>




    
@endsection


