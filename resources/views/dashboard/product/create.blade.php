@extends('dashboard.layout')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md">
            <!-- general form elements -->
            @if (session('success'))
            <div class="alert alert-success w-50" role="alert">
                {{ session('success') }}
            </div>                  
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                <div class="alert alert-danger w-50" role="alert">
                    {{ $err }}
                </div>
                @endforeach
            @endif
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Tambah Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route("product.store")}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg">
                      <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input
                          type="text" name="name"
                          class="form-control"
                          id="name"
                          placeholder="Nama produk"
                        />
                      </div>
                      <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea
                          type="text"
                          class="form-control"
                          id="desc" name="description"
                          placeholder="Deskripsi"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" name="category_id">
                          <option value="1">Pakaian</option>
                          <option value="2">Aksesoris</option>
                          <option value="3">Vinyl</option>
                          <option value="4">Shoes</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg">
                      <div class="form-group">
                        <label for="price">Harga</label>
                        <input
                          type="number" name="price"
                          class="form-control"
                          id="price"
                          placeholder="Harga"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Gambar Produk</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input
                              type="file"
                              class="custom-file-input"
                              id="exampleInputFile"
                            />
                            <label
                              class="custom-file-label"
                              for="exampleInputFile"
                              >Choose file</label
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">
                    Submit
                  </button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection