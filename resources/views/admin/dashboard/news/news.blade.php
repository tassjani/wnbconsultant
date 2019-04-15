@extends('admin/app')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>News management</h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">News</h3>
          </div>
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
          <p class="alert alert-danger">{{ $error }} </p>
          @endforeach

          @endif



          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">

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
                <label>Select Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select Tags"
                style="width: 100%;" name="tags[]">
                @foreach ($tags as $tag): 
                  
                  <option value="{{ $tag->id  }}">{{ $tag->name }}</option>  
                  
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
            <label>
              <input type="checkbox" name="status" value="1">Active
            </label>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href='{{ route('news.index') }}' class="btn btn-warning">Back</a>
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