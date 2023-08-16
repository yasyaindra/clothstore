@extends('dashboard.layout')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a
                  type="button"
                  class="btn btn-primary"
                  href="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/product/create"
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
                      <th>Nama Produk</th>
                      <th>Category</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img
                          src="/assets/img/trends_1.jpg"
                          alt=""
                          class="img-fluid"
                          width="50"
                          height="50"
                        />
                      </td>
                      <td>Kaos Gombale</td>
                      <td>Kaos</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aliquam, dicta!
                      </td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          Edit
                        </button>

                        <button type="button" class="btn btn-danger">
                          Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          src="/assets/img/trends_1.jpg"
                          alt=""
                          class="img-fluid"
                          width="50"
                          height="50"
                        />
                      </td>
                      <td>Kaos Gombale</td>
                      <td>Kaos</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aliquam, dicta!
                      </td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          Edit
                        </button>

                        <button type="button" class="btn btn-danger">
                          Delete
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img
                          src="/assets/img/trends_1.jpg"
                          alt=""
                          class="img-fluid"
                          width="50"
                          height="50"
                        />
                      </td>
                      <td>Kaos Gombale</td>
                      <td>Kaos</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Aliquam, dicta!
                      </td>
                      <td>
                        <button type="button" class="btn btn-warning">
                          Edit
                        </button>

                        <button type="button" class="btn btn-danger">
                          Delete
                        </button>
                      </td>
                    </tr>
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