@extends('dashboard.layout')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
<section class="content pt-3">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
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
                <form method="POST" action="{{route("password.action")}}">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Old Password</label
                    >
                    <input
                      type="password" name="old_password"
                      class="form-control"
                      id="exampleInputPassword1"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >New Password</label
                    >
                    <input
                      type="password" name="new_password"
                      class="form-control"
                      id="exampleInputPassword1"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Confirm New Password</label
                    >
                    <input
                      type="password" name="new_password_confirmation"
                      class="form-control"
                      id="exampleInputPassword1"
                    />
                  </div>
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </form>
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