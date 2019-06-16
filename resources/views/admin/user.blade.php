@extends('layouts.admin')
@section('content') 
@section('title','Admin | Users')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Users Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary table-hover">
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
                    <tbody id="users"></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection