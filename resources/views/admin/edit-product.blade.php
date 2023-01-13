@extends('layouts.app')

@section('content')
<div class="modal-mask" v-if="showModal" @close="showModal = false">
  <div class="modal-wrapper">
      <div class="modal-container">
          <div class="modal-header">
            <h3 class="m-0 font-weight-bold text-primary">Edit Product</h3>
          </div>
          <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data"">
                  <div class="mt-5 row">
                      <label for="" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-3">
                          <input type="text" value="{{$nani->title}}" class="form-control">
                      </div>
                  </div>
                  <div class="mt-5 row">
                      <label for="" class="col-sm-2 col-form-label">Price</label>
                      <div class="col-sm-3">
                          <input type="text" value="{{$nani->price}}"  class="form-control">
                      </div>
                  </div>
                  <div class="mt-5 row">
                      <label for="" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-3">
                          <input type="text" value="{{$nani->description}}"  class="form-control">
                      </div>
                  </div>
                  <div class="mt-5 row">
                      <label for="" class="col-sm-2 col-form-label">Category</label>
                      <div class="col-sm-3">
                        <input type="text" value="{{$nani->category}}"  class="form-control">
                      </div>
                  </div>
              <div class="modal-footer">
                  <a href="{{ URL::previous() }}" class="btn btn-primary">Go Back</a>
                  <button class="modal-default-button btn btn-primary mx-2" type="submit">Save</button>
              </div>
          </form>
      </div>
      </div>
  </div>
</div>
@endsection