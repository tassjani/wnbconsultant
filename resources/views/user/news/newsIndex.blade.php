@extends('user/app')

@section('title','WNB in News | WNB Consultant')


@section('main-content')
<!-- Start Bottom Header -->
<div class="page-area">
	<div class="breadcumb-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="breadcrumb text-center">
					<div class="section-headline white-headline text-center">
						<h3>WNB in news</h3>
					</div>
					<ul>
						<li class="home-bread">Home</li>
						<li>news</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Header -->

				 <!--Blog Area Start-->
        <div class="blog-page-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            
                            <h3>WNB in News</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        @foreach($newss as $news)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                            	
                                <div class="blog-image">
                                    <img src="{{asset('user/img/1.jpg')}}" alt="">
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                {{$news->created_at->diffForHumans()}}
                                            </span>
                                            
                                        </div>
                                        <a href="{{route('news.shownews',$news->id)}}">
                                            <h4>{{$news->title}}</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p> {!! str_limit($news->body,200)  !!} </p>
                                        <a class="blog-btn" href="{{route('news.shownews',$news->id )}}">Read more</a>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                        @endforeach
                        <!-- End single blog -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="blog-pagination">
							   {{$newss->links()}}
							</div>
					   </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->

			
@endsection       