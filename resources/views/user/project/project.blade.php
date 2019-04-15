@extends('user/app')

@section('title','Project | WNB Consultant')

@section('header')
<link rel="stylesheet" href="{{ asset('user/css/project.css') }}">

@stop


@section('main-content')

<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="breadcrumb text-center">
              <div class="section-headline white-headline text-center">
                <h3>Projects</h3>
            </div>
            <ul>
                <li class="home-bread">Home</li>
                <li>Projects</li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<!-- END Header -->
<div class="project-area area-padding">
  <div class="container">
     <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">

            <h3>Project Highlight</h3>

          </div>
        </div>
    </div>

    
    <div class="carousel_wrap">
     <div id="carousel">
      
      
      <img src="{{asset('user/img/project/1-6.png')}}" id="item-7" />
      
      
      
      <img src="{{asset('user/img/project/1-7.png')}}" id="item-8" />
      
      
      
      <img src="{{asset('user/img/project/1-8.png')}}" id="item-9" />
      
      
      
      <img src="{{asset('user/img/project/1-9.png')}}" id="item-10" />
      
      
      
      <img src="{{asset('user/img/project/1-10.png')}}" id="item-11" />
    
    </div>
    
  </div>   
    
        


  </div>
</div>
<!-- Start project Area -->
<div class="project-single area-padding">
  <div class="container">
      <div class="table">
        <table class="table table-hover">
          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Projects</h3>

            </div>
            <!-- /.box-header -->
              <div class="box-body">
                <div class="pull-right">
                  <label>
                    Search : <input class="form-control" id="myInput" type="text" >      
                  </label>
                  
                </div>
              
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr style="background-color: #4CAF50; color: white;">
                    <th>NO</th>
                    <th>Ruas Tol</th>
                    <th>Layanan</th>
                    <th>BUJT</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($projects as $project)
                    
                    

                    <td style="color: black;">{{$project->id }}</td>
                    <td style="color: black;">{{$project->title}}</td>
                    <td style="color: black;">{{$project->services[0]['title']}}</td>
                    <td style="color: black;">{{$project->clients[0]['name'] }}</td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </tfoot>
            </table>
            <div class="pull-right">
              {{$projects->links()}}
            </div>
            
            Showing {{ ($projects->currentPage()-1) * $projects->perPage() +1 }}  to
            {{ ($projects->currentPage()-1) * $projects->perPage() + $projects->perPage() }} of
            {{  $projects->total() }} Projects


              
            
          </div>
            
        </div>
          <!-- /.box-body -->
    </table>   
      </div>
    </div>
</div>
</div>


        <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
        <script type="text/javascript" src="{{asset('user/js/index.js')}} "></script>
        
        <script>
          $(document).ready(function(){
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#example1 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script> 
        
             
        
     
@endsection


