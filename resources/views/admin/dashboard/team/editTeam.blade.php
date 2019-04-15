@extends('admin/app')
@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>Team experts management</h1>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Team Experts</h3>
            </div>
            @if(count($errors) > 0)
              @foreach($errors->all() as $error)
              <p class="alert alert-danger">{{ $error }} </p>
              @endforeach

            @endif

           

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('team.update',$team->id) }}" method="post">

              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title" value="{{  $team->title}}">
                </div>
                
                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" id="image" name="image">
                </div>
              <!-- /.box-body -->
                <div class="box">
                  <div class="box-header">
                  <h3 class="box-title">Role</h3>
                  </div>
                   <!-- /.box-header -->
                    <div class="box-body pad">
                     <textarea class="textarea" placeholder="Place some text here" name="body" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $team->body }}</textarea>
                    </div>
                </div>
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href='{{ route('team.index') }}' class="btn btn-warning">Back</a>
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