@extends('admin.layout.app')

@section('main')
<div class="content">
    <nav class="mb-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
      </ol>
    </nav>
    <form class="mb-9">
      <div class="row g-3 flex-between-end mb-5">
        <div class="col-auto">
          <h2 class="mb-2">Add a product</h2>
          <h5 class="text-body-tertiary fw-semibold">Orders placed across your store</h5>
        </div>
        <div class="col-auto"><button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button">Discard</button><button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button">Save draft</button><button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button></div>
      </div>
      <div class="row g-5">
        <div class="col-12 col-xl-8">
          <h4 class="mb-3">Product Title</h4><input class="form-control mb-5" type="text" placeholder="Write title here..." />
          <div class="mb-6">
            <h4 class="mb-3"> Product Description</h4><textarea class="form-control" name="content"></textarea>
          </div>
        </div>
      </div>
    </form>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
        </div>
      </div>
    </footer>
  </div>
@endsection
