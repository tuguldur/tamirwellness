@extends('layouts.admin')
@section('content') 
@section('title','Admin | Users')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="comment-header">
                  <h4 class="card-title">Users Table</h4>
                  <div class="spacer"></div>
                  <a href="#" id="add_user">Add User</a>
               </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Roles
                      </th>
                      <th>
                       Created
                      </th>
                    </thead>
                    <tbody id="user-table">
                      @foreach ($users as $user)
                          <tr data-key={{$user->id}} class="user-data">
                           <td>{{$user->name}} <span class="badge badge-secondary">{{(Auth::user()->id==$user->id) ? 'you' :'' }}</span></td>
                           <td>
                             <span class="badge badge-secondary">{{$user->hasRole('admin') ? 'Admin' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('home') ? 'Home' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('comment') ? 'Comment' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('contact') ? 'Contact' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('inbox') ? 'Inbox' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('service') ? 'Service' : ''}}</span>
                             <span class="badge badge-secondary">{{$user->hasRole('blank') ? 'Blank' : ''}}</span>
                            </td>
                           <td>{{$user->created_at->diffForHumans()}}</td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="users">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <form action="/admin/user/add" method="POST" id="user_">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                <small id="add_username" class="form-text text-danger"></small>
              </div>
              <div class="form-group">
                <label for="username">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                <small id="add_email" class="form-text text-danger"></small>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <small id="add_password" class="form-text text-danger"></small>
              </div>
              <div class="form-group">
                <label for="password_next">Confirm Password</label>
                <input type="password" class="form-control" id="password_next" placeholder="Confirm Password" name="password_next" required>
                <small id="add_password_next" class="form-text text-danger"></small>
              </div>
              <span>Choose Premissions</span><br/>
              <small id="roles_check" class="form-text text-danger mt-1"></small>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_inbox" name="edit_inbox">
                <label class="form-check-label" for="edit_inbox">Edit Inbox</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_home" name="edit_home">
                <label class="form-check-label" for="edit_home">Edit Home</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_comment" name="edit_comment">
                <label class="form-check-label" for="edit_comment">Edit Comment</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_contact" name="edit_contact">
                <label class="form-check-label" for="edit_contact">Edit Contact</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_users" name="edit_users">
                <label class="form-check-label" for="edit_users">Edit Users</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input roles" type="checkbox" id="edit_service" name="edit_service">
                <label class="form-check-label" for="edit_service">Edit Service</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input roles" type="checkbox" id="edit_blank" name="edit_blank">
                  <label class="form-check-label" for="edit_blank">Edit Blank</label>
                </div>
              @csrf
              <input type="hidden" value="0" name="id" id="user_id"/>
              <div class="d-flex mt-3">
              <button type="submit" class="btn btn-primary" id="save-user">Save</button>
                <div class="spacer"></div>
              <a class="btn btn-alert" id="delete-user" style="color:white;" user-key="{{Auth::user()->id}}">Delete</a>
            </div>
            </form>
         </div>
       </div>
      </div>
@endsection