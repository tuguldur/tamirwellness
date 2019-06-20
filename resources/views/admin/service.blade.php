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
                <div class="card-body">
                  <form action="/admin/service" method="POST">
                        <div class="form-group">
                          <label for="image_description">Description</label>
                          <input type="text" class="form-control" id="image_description" placeholder="Image Description" name="desc" required>
                        </div>
                        <div class="custom-file">
                              <input type="file" class="custom-file-input" id="input-file" name="file">
                              <label class="custom-file-label" for="input-file">Choose Image</label>
                            </div>
                        <button type="submit" class="btn btn-primary" disabled="" id="contact_submit">Save</button>
                        <input type="hidden" name="_token" value="kOIKpVfmWR8KL1geQg0oD3AVuOrLeIMBtchcKd0S">                    
                  </form>
               
              </div>
            </div>
          </div>
</div>
@endsection