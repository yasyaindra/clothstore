@extends('dashboard.layout')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-6">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>                  
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                    <div class="alert alert-danger" role="alert">
                        {{ $err }}
                    </div>
                    @endforeach
                @endif
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <a
                  type="button"
                  class="btn btn-primary"
                  href="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/category/create"
                >
                  Tambah
                </a>
                <div class="card-tools">
                  <div
                    class="input-group input-group-sm"
                    style="width: 150px"
                  >
                    <input
                      type="text"
                      name="table_search"
                      class="form-control float-right"
                      placeholder="Search"
                    />

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Nama Kategori</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td>
                        <img
                          src="{{asset("/assets/img/".$category->category_image)}}"
                          alt=""
                          class="img-fluid"
                          width="50"
                          height="50"
                        />
                      </td>
                      <td>{{$category->name}}</td>
                      <td>
                        {{$category->description}}
                      </td>
                      <td>
                        <a href="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/category/{{$category->id}}/edit" class="btn btn-warning">
                          Edit
                        </a>

                        <form action="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/category/{{$category->id}}" method="POST" class="d-inline">
                          @method("DELETE")
                          @csrf
                          <button type="submit" class="btn btn-danger">
                            Delete
                          </button>
                        </form>
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
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection