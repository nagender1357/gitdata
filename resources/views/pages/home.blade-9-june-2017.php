@extends('app')

@section('content')

@include("_particles.slider_search") 
<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/popup.css') }}">
<script src="{{ URL::asset('site_assets/fancybox/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/fancybox/jquery.fancybox.css?v=2.1.5') }}">
<script type="text/javascript">
var jq = $.noConflict();
		jq(document).ready(function() {
			jq('.fancybox').fancybox({ minWidth: '50%',
                    
                    minHeight: '300',
                    });
		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

	</style>
<div class="spacer feature-section classifieds-content">
  <div class="container">
    <div class="heading-section clearfix">
      <h1>Classifieds Categories</h1>
       
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="classifieds-category">
          @foreach(\App\Categories::where('parent_id',0)->orderBy('category_name')->get() as $cat)
          <li>
		 
		  @if(isset($cat->category_image))
			<!-- <a href="{{URL::to($cat->category_slug.'/'.$cat->id)}}"><img src="{{ URL::asset('upload/category_image/'.$cat->category_image.'-s.jpg') }}" ></a>-->
		<img src="{{ URL::asset('upload/category_image/'.$cat->category_image.'-s.jpg') }}" >
		  @endif
		 
		 <!-- <a href="{{URL::to($cat->category_slug.'/'.$cat->id)}}">{{$cat->category_name}} <span>({{ \App\Categories::countCategoryListings($cat->id) }})</span></a>-->
		 {{$cat->category_name}}
         <ul class="sub-category">
              @foreach(\App\Categories::where('parent_id',$cat->id)->orderBy('category_name')->get() as $subcat)
              <li>
			  <!-- @if(isset($cat->category_image))
			 <a href="{{URL::to($cat->category_slug.'/'.$subcat->sub_category_slug.'/'.$subcat->id)}}"><img src="{{ URL::asset('upload/sub_category_image/'.$subcat->sub_category_image.'-s.jpg') }}"  ></a>
		  @endif -->
			 <a class="fancybox fancybox.ajax" href="{{URL::to($cat->category_slug.'/'.$subcat->category_slug.'/'.$subcat->id)}}">{{$subcat->category_name}}</a></li>
              @endforeach
               
            </ul>
          </li>
          @endforeach
           
        </ul>
      </div>
       
    </div>
  </div>
</div>
<div id="featured-list" class="featured-listing">
  <div class="container">
    <div class="row clearfix">
      <h2><strong>Freatured</strong> Listing</h2>
      @foreach(\App\Listings::where(array('featured_listing'=>'1','status'=>'1'))->orderBy('id')->get() as $featured_listing)
      <div class="col-md-3 col-sm-4 col-xs-6 hi-icon-effect-8">
        <div class="single-product">
          <figure> <img alt="" src="{{ URL::asset('upload/listings/'.$featured_listing->featured_image.'-s.jpg') }}">
            <div class="rating">
              <ul class="list-inline">
                @for($x = 0; $x < 5; $x++)
                  
                @if($x < $featured_listing->review_avg)
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                @else
                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                @endif
               
                @endfor
                
              </ul>
              <p>Featured</p>
            </div>
            <figcaption>
              <div class="read-more"> <a href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}"><i class="fa fa-angle-right"></i> Read More</a> </div>
            </figcaption>
          </figure>
          <h4><a href="{{URL::to('listings/'.$featured_listing->listing_slug.'/'.$featured_listing->id)}}">{{$featured_listing->title}}</a></h4>
           <p class="location" style="min-height: 50px;">{{str_limit($featured_listing->address,50)}}</p>
        </div>
      </div>
      @endforeach
       
    </div>
  </div>
</div>

 
@endsection