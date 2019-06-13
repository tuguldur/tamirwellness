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
                  <form>
                      <div class="form-group">
                        <label for="contact_phone_number">Phone Number</label>
                        <input type="number" class="form-control" id="contact_phone_number" placeholder="Phone Number">
                        <small id="emailHelp" class="form-text text-muted">Helper text</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Location</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Location">
                        </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
   @endsection