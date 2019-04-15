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
                        <li>news detail</li>
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
            <div class=" blog-page-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                 <!-- single-blog start -->
                 <article class="blog-post-wrapper">
                    <div class="blog-banner">
                        
                            <img src="{{('user/img/blog/news1.jpg')}}" alt="">
                        
                        <div class="blog-content">
                            
                            <h4>{{ $news->title }}</h4>
                            <div class="blog-meta">
                                <span class="date-type">
                                    {{  $news->created_at->diffForHumans()  }}
                                </span>

                            </div>
                            <p>
                                {!! htmlspecialchars_decode($news->body)  !!}
                            </p>
                           </div>  
                       </div>
                       <div>
                        <i class="fa fa-fw fa-user"> </i>
                           Posted by:
                       </div>
                   </article>
                   <div class="clear"></div>
               </div>
               <!-- End main column -->
               
               <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="left-head-blog">
                    <div class="left-blog-page">
                        <!-- search option start -->
                        <form action="#">
                            <div class="blog-search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- search option end -->
                    </div>

                @include('user/news/sidebar-news')
                   
                    <div class="left-blog-page">
                        <div class="left-tags blog-tags">
                            <div class="popular-tag left-side-tags left-blog">
                                <h4>popular tags</h4>
                                <ul>
                                    @foreach ($news->tags as $tag)
                                    <li>
                                    <a href="#">{{  $tag->name  }}</a>
                                    </li>    
                                    @endforeach     
                                    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End left sidebar -->
    </div>
</div>
<!-- End row -->
</div>
</div>
<!--End of Blog Area-->
@endsection       