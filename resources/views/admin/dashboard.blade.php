@extends('layouts.admin')
@section('content') 
@section('title','Admin | Dashboard')
<div class="content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-bell-55 text-warning"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">New Booking Request</p>
                        <p class="card-title">{{$book}}</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr />
                  <div class="stats">
                    <a href="/admin/book">Open Inbox</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-image text-success"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Home Items</p>
                        <p class="card-title">{{$home}}</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr />
                  <div class="stats">
                    <a href="/admin/home">Open Home</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-paper text-danger"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Comments</p>
                        <p class="card-title">{{$total_comment}}</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr />
                  <div class="stats">
                    <a href="/admin/comment">Open Comment</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-book-bookmark text-primary"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Contact</p>
                        <p class="card-title"></p>
                        <p style="font-size: 16px;">Updated {{$contact->updated_at ? $contact->updated_at->diffForHumans() : '-'}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr />
                  <div class="stats">
                    <a href="/admin/contact"><i class="fa fa-refresh"></i> Update now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-app text-dark"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Blank</p>
                          <p class="card-title"></p>
                          <p style="font-size: 16px;">Updated {{$blank->updated_at ? $blank->updated_at->diffForHumans() : '-'}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr />
                    <div class="stats">
                      <a href="/admin/contact"><i class="fa fa-refresh"></i> Update now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-settings-gear-65 text-success"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Service Post(s)</p>
                          <p class="card-title">{{$service}}</p>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr />
                    <div class="stats">
                      <a href="/admin/contact">Open Service</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                          <i class="nc-icon nc-user-run text-danger"></i>
                        </div>
                      </div>
                      <div class="col-7 col-md-8">
                        <div class="numbers">
                          <p class="card-category">Users</p>
                          <p class="card-title">{{$user}}</p>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr />
                    <div class="stats">
                      <a href="/admin/user">Open User</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
@endsection