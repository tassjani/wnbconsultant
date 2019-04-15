@extends('user/app')

@section('main-content')

<div class="page-area">
  <div class="breadcumb-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="breadcrumb text-center">
          <div class="section-headline white-headline text-center">
            <h3>Project List</h3>
          </div>
          <ul>
            <li class="home-bread">Home</li>
            <li>Project list</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END Header -->
<!-- Start project Area -->
<div class="project-single area-padding">
  <div class="container">
    <div class="table-responsive">
      <div class="table">
        <table class="table table-hover">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Ruas Tol</th>
                    <th>Layanan</th>
                    <th>BUJT</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($projects as $project)
                    
                    

                    <td>{{$project->id }}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->services[0]['title']}}</td>
                    <td>{{$project->clients[0]['name'] }}</td>
                  </tr>
                  @endforeach
                  

                  
                </tbody>
              </tfoot>
            </table>
            {{$projects->links()}}
            
          </div>

          <!-- /.box-body -->
        </div>
      </div>
      



    </div>
    <!-- End main content -->
  </div>
  <!-- End portfolio Area -->
  @endsection