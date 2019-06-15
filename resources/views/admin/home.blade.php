@extends('layouts.admin')
@section('content') 
@section('title','Admin | Home')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="comment-header">
                  <h4 class="card-title">Home Header Picture</h4>
                  <div class="spacer"></div>
                  <a href="#" id="add_home_header">Add Header</a>
               </div>
              </div>
              <div class="card-body">
                <div class="text-center table-loading" id="home-header-loader">Loading....</div>
                <div class="table-responsive d-none" id="home-header-table">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Updated
                      </th>
                    <tbody id="home-header"></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Home Main Pictures</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Desc
                      </th>
                      <th>
                       Updated
                      </th>
                    </thead>
                    <tbody id="home-main"></tbody>
                  </table> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- HOME HEADER ADD MODAL --}}
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id="home-header-modal">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
              <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="home-header-title" placeholder="Home Picture Name">
                  </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="homeHeaderFile" accept="image/jpeg, image/png">
              <label class="custom-file-label" for="homeHeaderFile">Choose file</label>
            </div>   </form>
            <div id="inbox-toolbar">
              <div class="spacer"></div>
              <div class="toolbar" id="home-header-view">
                      <a href="#" class="text-info" target="_blank">view</a>
                     </div>
                     <div class="toolbar" id="home-header-delete">
                      <a href="#" class="text-danger">Delete</a>
                     </div>
                     <div class="toolbar" id="home-header-save">
                      <a href="#" class="text-info" >Save</a>
                     </div>
              <div class="spacer"></div>
              </div>
         </div>
       </div>
      </div>
    @endsection