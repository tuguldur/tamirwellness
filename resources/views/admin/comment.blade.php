@extends('layouts.admin')
@section('content') 
@section('title','Admin | Comment')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <div class="comment-header">
                  <h4 class="card-title">Comment</h4>
                  <div class="spacer"></div>
                  <a href="#" id="add_comment">Add Comment</a>
               </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover comment-table">
                    <thead class="text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Comment
                      </th>
                    </thead>
                    <tbody id="comment-table"></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header">
                <div class="comment-header">
                    <h4 class="card-title">Comment Header Picture</h4>
                    <div class="spacer"></div>
                    <a href="#" id="add_comment_header">Add Header</a>
                 </div>
            </div>
            <div class="card-body">
              <div class="table-responsive ">
                <table class="table table-hover">
                  <thead class="text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      Updated
                    </th>
                  </thead>
                  <tbody id="comment-header"></tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- MODAL COMMENT --}}
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id="comment-modal">
          <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
            <h2 class="comment-title"></h2>
            <div class="comment-body">
              <span id="comment-text"></span>
              <div class="comment-form">
                <input type="text" class="form-control" placeholder="Name" id="comment-name">
                <textarea class="form-control mt-3 dev-textarea" placeholder="Comment" rows="5" id="comment-value"></textarea>
              </div>
              <div id="inbox-toolbar">
                <div class="spacer"></div>
                       <div class="toolbar comment-save">
                        <a href="#" class="text-info">Save</a>
                       </div>
                       <div class="toolbar comment-edit">
                        <a href="#" class="text-info">Edit</a>
                       </div>
                       <div class="toolbar comment-delete">
                        <a href="#" class="text-danger">Delete</a>
                       </div>
                       <div class="toolbar comment-edited d-none">
                        <a href="#" class="text-info">Save</a>
                       </div>
                <div class="spacer"></div>
                </div>
          </div>
          </div>
          </div>
        </div>
        {{-- MODAL COMMENT HEADER --}}
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id="comment-header-modal">
          <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
              <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="comment-header-title" placeholder="Header Picture Name">
                    </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="headerFile" accept="image/*">
                <label class="custom-file-label" for="headerFile">Choose file...</label>
              
              </div>   </form>
              <div id="inbox-toolbar">
                <div class="spacer"></div>
                <div class="toolbar" id="comment-header-view">
                        <a href="#" class="text-info" target="_blank">view</a>
                       </div>
                       <div class="toolbar comment-header-delete">
                        <a href="#" class="text-danger">Delete</a>
                       </div>
                       <div class="toolbar" id="comment-header-save">
                        <a href="#" class="text-info">Save</a>
                       </div>
                <div class="spacer"></div>
                </div>
           </div>
         </div>
        </div>
    @endsection