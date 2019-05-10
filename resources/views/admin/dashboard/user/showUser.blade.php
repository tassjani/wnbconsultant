@extends('admin/app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Users list </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
              <h3 class="box-title">news</h3>
              <a class="col-lg-offset-5 btn btn-success" href="{{ 'user/create' }}">Create new news user</a>
            </div>
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>level</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                     @foreach ($users as $user)

                  <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{$user->role}} </td>

                  <td><a href="{{  route('user.edit',$user->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
                    &nbsp;
                    <form id="delete-form-{{  $user->id }}" method="post" action="{{  route('user.destroy',$user->id) }}" style="display: none;">

                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                    </form>

                    <a href="" onclick="
                    if(confirm('Are you want to delete this?'))
                    {
                      event.preventDefault();document.getElementById('delete-form-{{ $user->id }}').submit();
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