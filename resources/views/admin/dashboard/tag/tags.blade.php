@extends('admin/app')
@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>Tags management</h1>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Please enter Tag</h3>
            </div>
            
           

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="post">

              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Tag</label>
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Tag">
                  <label>Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug"  placeholder="Enter slug">
                
                  </div>
                
                
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href='{{ route('tag.index') }}' class="btn btn-warning">Back</a>
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