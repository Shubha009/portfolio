
@extends('admin/admin-master')
@section('main-content')
<div class="row mt-5 justify-content-center" data-aos="fade-up">
    
    <div class="col-lg-10">
        
        <a href="{{ route('contact/message') }}"> <button class="btn btn-primary mb-5">Back</button> </a>

        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text"  class="form-control"  value="{{ $contact_message_items->name }}"  />
            
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" value="{{ $contact_message_items->email }}" />
            
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  rows="10">{{ $contact_message_items->subject }}</textarea>
          
        </div>
        <div class="form-group">
          <textarea class="form-control"  rows="10"   >{{ $contact_message_items->message }}</textarea>
          
        </div>
        
    </div>

  </div>
@endsection