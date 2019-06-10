@extends('layouts.admin')
@section('content') 
@section('title','Admin | Book')
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Inbox</h4>
                  <p class="category">See your booking request</p>
                </div>
                <div class="card-content">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li>
                          <a
                            href="#new"
                            data-toggle="tab"
                            aria-expanded="true"
                            class="active show"
                            >New</a
                          >
                        </li>
                        <li>
                          <a
                            href="#unread"
                            data-toggle="tab"
                            aria-expanded="false"
                            >Old</a
                          >
                        </li>
                        <li>
                          <a
                            href="#archived"
                            data-toggle="tab"
                            aria-expanded="false"
                            >Archived</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="my-tab-content" class="tab-content text-center">
                    <div class="tab-pane active" id="new">
                        <div class="text-center table-loading">Loading....</div>
                      <div class="table-responsive d-none">
                        <table class="table table-hover inbox-table">
                          <thead class="text-primary">
                            <tr>
                              <th>
                                Name
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                Phone number
                              </th>
                              <th>
                                Message
                              </th>
                              <th>
                                Date
                              </th>
                            </tr>
                          </thead>
                          <tbody id="table-new"></tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="unread">
                        <div class="text-center table-loading">Loading....</div>
                        <div class="table-responsive d-none">
                        <table class="table table-hover inbox-table">
                          <thead class="text-primary">
                            <tr>
                              <th>
                                Name
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                Phone number
                              </th>
                              <th>
                                Message
                              </th>
                              <th>
                                Date
                              </th>
                            </tr>
                          </thead>
                          <tbody id="table-read"></tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="archived">
                      <div class="text-center table-loading">Loading....</div>
                      <p class="text-center">Messages that have been in the Archive for more than 14 days will be deleted automatically.</p>
                      <div class="table-responsive d-none">
                        <table class="table table-hover inbox-table">
                          <thead class="text-primary">
                            <tr>
                              <th>
                                Name
                              </th>
                              <th>
                                Email
                              </th>
                              <th>
                                Phone number
                              </th>
                              <th>
                                Message
                              </th>
                              <th>
                                Date
                              </th>
                            </tr>
                          </thead>
                          <tbody id="table-archived"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- MODAL --}}
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id="inbox-modal">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="inbox-load text-center">Loading...</div>
              <div class="inbox-ready d-none">
              {{-- MESSAGE HEADER --}}
              <div id=inbox-header> 
                <div id="address-info">
                  <span id="inbox-name">
                    
                    <span id="inbox-email"></span>
                  </span>
                </div>
              <div id="inbox-arde-date">
                <span class="inbox-date"></span>
              </div>
              <div id="inbox-date">
                <span></span>
              </div>
              </div>
              {{-- MESSAGE  BODY--}}
              <div id="inbox-message">
                <div> 
                  <span></span>
                </div>
              </div>
              <div id="inbox-toolbar">
              <div class="spacer"></div>
                  <div class="toolbar">
                      <a href="#" class="text-danger inbox-archive" data-toggle="tooltip" data-placement="top" title="Message will moved to Archive." data-dismiss="modal">Archive</a>
                     </div>
              <div class="spacer"></div>
              </div>
  
            </div>
          </div>
          </div>
        </div>
        @endsection