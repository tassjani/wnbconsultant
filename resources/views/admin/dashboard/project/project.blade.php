@extends('admin/app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Project management</h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Project</h3>
          </div>
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }} </p>
          @endforeach

          @endif



          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('project.store') }}" method="post">

            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="title" name="title"  placeholder="Enter title">
              </div>

              <div class="form-group">
                <label for="image">File input</label>
                <input type="file" id="image" name="image">
              </div>

              
              <div class="form-group">
                <label>Select Client</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a client" style="width: 100%;" tabindex="-1" aria-hidden="true" name="clients[]">
                  @foreach ($clients as $client): 
                  
                  <option value="{{ $client->id  }}">{{ $client->name }}</option> 

                  @endforeach 

                </select>
              </div>

              <div class="form-group">
                <label>Select service</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a service"
                style="width: 100%;" name="services[]">
                @foreach ($services as $service ):
                
                <option value="{{ $service->id  }}">{{ $service->title  }}</option>  
                
                @endforeach
                
              </select>
            </div> 

            <!-- /.box-body -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Content</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
               <textarea class="textarea" placeholder="Place some text here" name="body" 
               style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
             </div>
           </div>
           <div class="checkbox">
            <label><input type="checkbox" name="status" value="1">
              publish
            </label>
          </div>


          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href='{{ route('project.index') }}' class="btn btn-warning">Back</a>
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