@extends('layouts.editor')
@section('content') 
@section('title','Admin | Blank')
<div class="container">
<div id="editor" class="mt-3"></div>
<div class="mt-3">
<div class="d-flex" style="flex-direction: row-reverse">
<button class="btn btn-success float-right" id="saveButton">Save</button>
<a class="btn btn-warning  float-right mr-3" href="/admin">Cancel</a>
</div>

<div class="mt-3" id="view"></div>
</div></div>

@endsection