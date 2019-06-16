@extends('layouts.admin')
@section('content') 
@section('title','Admin | Profile')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Profile</h4>
              </div>
              <div class="card-body">
                  <form action='/admin/profile' method="POST" id="profile-form">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="{{Auth::user()->name}}" required>
                        <small id="help_username" class="form-text text-danger"></small>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{Auth::user()->email}}" required>
                        <small id="help_email" class="form-text text-danger"></small>
                      </div>
                      <div class="form-group">
                          <label for="old_password">Old Password</label>
                          <input type="password" class="form-control" id="old_password" placeholder="Old Password" name="old_password" required>
                          <small id="help_old_password" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                          <label for="new_password">New Password</label>
                          <input type="password" class="form-control" id="new_password" placeholder="New Password" name="new_password" required>
                          <small id="help_new_password" class="form-text text-muted">New password must be at least eight characters long</small>
                        </div>
                        <div class="form-group">
                          <label for="password">Confirm Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="password" required>
                          <small id="help_password" class="form-text text-danger"></small>
                        </div>
                      <button type="submit" class="btn btn-primary" id="profile_save">Save</button>
                      @csrf
                    </form>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated {{Auth::user()->updated_at->diffForHumans()}}
                </div>
              </div>
          </div>
        </div>
      </div>
   @endsection