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
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Edit Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/8607101e-3b82-11ee-be56-0242ac120002/dashboard/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg">
                      <div class="form-group">
                        <label for="name">Nama Produk</label>
                        <input
                          type="text" name="name"
                          class="form-control @error('name') is-invalid @enderror"
                          id="name" value="{{$product->name}}"
                          placeholder="Nama produk"
                        />
                      </div>
                      <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea
                          type="text"
                          class="form-control @error('description') is-invalid @enderror" 
                          id="desc" name="description"
                          placeholder="Deskripsi" value="{{$product->description}}"
                        >{{$product->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label>Kategori</label>
                        <select class="custom-select" name="category_id">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg">
                      <div class="form-group">
                        <label for="price">Harga</label>
                        <input
                          type="number" name="price"
                          class="form-control @error('price') is-invalid @enderror"
                          id="price" value="{{$product->price}}"
                          placeholder="Harga"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Gambar Produk</label>
                        <div class="input-group">
                          <input type="hidden" name="oldImage" value={{$product->product_image}}>
                          <div class="custom-file">
                            <input
                              type="file"
                              class="custom-file-input @error('product_image') is-invalid @enderror"
                              id="image" name="product_image" onchange="previewImage()"
                            />
                            <label
                              class="custom-file-label"
                              for="file"
                              >Choose file</label
                            >
                          </div>
                          @error('product_image')
                              <p>{{$message}}</p>
                          @enderror
                        </div>
                        <div class="mt-3">
                          @if ($product->product_image !== "product.png")
                          <img src="{{asset("storage/".$product->product_image)}}" class="img-preview img-thumbnail" width="200px">
                          @else
                          <img src="{{asset('assets/img/product.png')}}" class="img-preview img-thumbnail" width="200px">
                          @endif
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
  <script>
    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector(".img-preview")

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result
      }
    }
  </script>
@endsection