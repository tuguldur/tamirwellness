@extends('layouts.admin')
@section('content') 
@section('title','Admin | Service')
<div class="content">
      <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Service</h4>
                </div>
          
                  <div class="card-content">
                      <div class="card-overlay"></div>
                      <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                              <li>
                                <a href="#english" data-toggle="tab" aria-expanded="true" class="active show">English</a>
                              </li>
                              <li>
                                <a href="#mongolia" data-toggle="tab" aria-expanded="false">Mongolia</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="english">
                                <form action="/admin/service/english" method="POST" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                                  </div>
                                  <div class="form-group" >
                                    <label for="image_description">Description</label>
                                    <textarea class="form-control" id="image_description" rows="3" placeholder="Image Description" required name="service_desc"></textarea>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="service-file" name="file">
                                    <label class="custom-file-label" for="service-file" style="font-size:14px">Choose file</label>
                                  </div>
                                      @csrf
                                  <input type="hidden" name="id" value="0" id="id">
                                  <div class="mt-2">
                                  <textarea id="editor" name="data"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary" disabled="" id="service-submit">Save</button>
                                  <button type="reset" class="btn btn-danger" id="service-reset">Reset</button>
                            </form>
                            <div class="mt-5">
                              <div class="english-table-loading text-center">Loading....</div>
                                    <div class="table-responsive" style="display:none" id="table-en">
                                        <table class="table table-hover comment-table">
                                          <thead class="text-primary">
                                              <tr>
                                                  <th>Title</th>
                                                  <th>Description</th>
                                                  <th>Updated</th>
                                                  <th>Action</th>
                                               </tr>
                                              </thead>
                                          <tbody id="english-table"></tbody>
                                        </table>
                                      </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="mongolia">
                                <form action="/admin/service/mongolia" method="POST" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                                  </div>
                                  <div class="form-group" >
                                    <label for="image_description_mn">Description</label>
                                    <textarea class="form-control" id="image_description_mn" rows="3" placeholder="Image Description" required name="service_desc"></textarea>
                                  </div>
                               
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="service-file-mn" name="file">
                                    <label class="custom-file-label" for="service-file-mn" style="font-size:14px">Choose file</label>
                                  </div>
                                      @csrf
                                  <input type="hidden" name="id" value="0" id="id">
                                  <div class="mt-2">
                                  <textarea id="editor" name="data"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary" disabled="" id="service-submit-mn">Save</button>
                                  <button type="reset" class="btn btn-danger" id="service-reset-mn">Reset</button>
                                </form>
                                <div class="mt-5">
                                    <div class="mongolian-table-loading text-center">Loading....</div>
                                    <div class="table-responsive" style="display:none" id="table-mn">
                                        <table class="table table-hover comment-table">
                                          <thead class="text-primary">
                                           <tr>
                                              <th>Title</th>
                                              <th>Description</th>
                                              <th>Updated</th>
                                              <th>Action</th>
                                           </tr> 
                                        </thead>
                                          <tbody id="mongolia-table"></tbody>
                                        </table>
                                      </div>
                                </div>
                            </div>
                          </div>
              </div>
            </div>
          </div>
</div>
@endsection