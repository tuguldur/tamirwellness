@extends('layouts.admin')
@section('content') 
@section('title','Admin | Comment')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Comment</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Comment
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($comment as $comments)
                      <tr>
                          <td>
                            {{$comments->name}}
                          </td>
                          <td class="comment">
                              {{$comments->comment}}
                          </td>
                          <td class="text-right">
                           <a href="#" class="comment-modal" data-key={{$comments->id}}>View</a>
                           <a href="#" data-key={{$comments->id}}>Edit</a>
                          </td>
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
      {{-- MODAL --}}
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true" id="comment-modal">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

              ..
            
          </div>
          </div>
        </div>
    @endsection