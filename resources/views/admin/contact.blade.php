@extends('layouts.admin')
@section('content') 
@section('title','Admin | Contact')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Contact</h4>
              </div>
              <div class="card-body">
                  <form action='/admin/contact' method="POST">
                      <div class="form-group">
                        <label for="contact_phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="contact_phone_number" placeholder="Phone Number" name="phone_number" value="{{$contact->phone_number}}" required>
                        <small id="emailHelp" class="form-text text-muted">+976 XXXX XXXX</small>
                      </div>
                      <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="email" class="form-control" id="contact_email" placeholder="Email" name="email" value="{{$contact->email}}" required>
                      </div>
                      <div class="form-group">
                          <label for="contact_phone_location">Location</label>
                          <input type="text" class="form-control" id="contact_phone_location" placeholder="Location" name="location" value="{{$contact->location}}" required>
                        </div>
                        <div class="form-group">
                          <label for="contact_location_mn">Location Монголоор</label>
                          <input type="text" class="form-control" id="contact_location_mn" placeholder="Location" name="location_mn" value="{{$contact->location_mn}}" required>
                        </div>
                      <button type="submit" class="btn btn-primary" disabled id="contact_submit">Save</button>
                      @csrf
                    </form>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated {{$contact->updated_at ? $contact->updated_at->diffForHumans() : '-'}}
                </div>
              </div>
          </div>
        </div>
      </div>
   @endsection