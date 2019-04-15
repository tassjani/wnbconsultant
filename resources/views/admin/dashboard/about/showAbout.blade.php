@extends('admin/app')

@section('main-content')
        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>About's post Management </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">About</h3>
              <a class="col-lg-offset-5 btn btn-success" href="{{ 'about/create' }}">Create new About post</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Created at</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

                  @foreach ($abouts as $about)

                  <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $about->title }}</td>
                  <td>{{ $about->created_at }}</td>
                  <td><a href="{{  route('about.edit',$about->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>

                  <td>
                    <form id="delete-form-{{  $about->id }}" method="post" action="{{  route('about.destroy',$about->id) }}" style="display: none;">

                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                    </form>

                    <a href="" onclick="
                    if(confirm('Are you want to delete this?'))
                    {
                      event.preventDefault();document.getElementById('delete-form-{{$about->id }}').submit();
                    }
                      else{
                        event.preventDefault();
                    }"><span class="glyphicon glyphicon-trash"></span></a>


                  </td>
                </tr>

                  @endforeach
                
              </tbody>
              </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection