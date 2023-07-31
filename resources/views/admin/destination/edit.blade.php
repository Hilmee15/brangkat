@extends('layouts.master');

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Destination {{ $destination->name }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="{{ route('destination.update', $destination->id) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{ $destination->name }}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama Destinasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Masukkan Gambar Destinasi</label>


                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">


                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" value="{{ $destination->description }}" name="description" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi Destinasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <select name="city_id" class="form-control">
                        @foreach ($city as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update Destination</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection