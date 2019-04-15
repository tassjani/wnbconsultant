@extends('admin/app')
@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Clients management</h1>
    </section>
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Client</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if(count($errors) > 0)
              @foreach($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }} </p>
              @endforeach

            @endif


            <form role="form" action="{{ route('client.update',$client->id) }}" method="post">

              {{  csrf_field()  }}
              {{  method_field('PUT')  }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Clients Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Client's Name" value="{{ $client->name }}">
                </div>

                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href='{{ route('client.index') }}' class="btn btn-warning">Back</a>
                </div>

            </div>
          </form>
          <!-- /.box -->
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  

@endsection  