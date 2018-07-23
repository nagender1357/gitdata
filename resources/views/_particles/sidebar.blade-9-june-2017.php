
@if (Route::getCurrentRoute()->getActionName() == 'App\Http\Controllers\SubCategoriesController@subsubcate')
	<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
@elseif(Route::getCurrentRoute()->getActionName() == 'App\Http\Controllers\ListingsUserController@search_filter_listings')
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
@elseif(Route::getCurrentRoute()->getActionName() == 'App\Http\Controllers\ListingsUserController@search_listings')
<script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>
@endif
<script type="text/javascript">
        $(document).ready(function() {
                $("#cate_search").change(function(){//alert("d**sf");
               var cat=$("#cate_search").val();
			  // alert("cat--"+cat);
			    if(cat!='')
			   {
            $.ajax({
            type: "GET",
             url: "{{ URL::to('ajax_subcatedata') }}/"+cat,
             //data: "cat=" + cat,
             success: function(result){
				// alert("result--"+result);
                 $("#sub_cate_search").html(result);
				}
				});
			   }
			   else
			   {
				 $("#sub_cate_search").html('<option value="">-Select One-</option>');
			   }
            });
            });
        
		
</script> 
<script type="text/javascript">
        $(document).ready(function() {
                $("#sub_cate_search").change(function(){//alert("d**sf");
               var cat=$("#sub_cate_search").val();
			    if(cat!='')
			   {
            $.ajax({
            type: "GET",
             url: "{{ URL::to('ajax_sub_subcatedata') }}/"+cat,
             //data: "cat=" + cat,
             success: function(result){
                 $("#sub_sub_cate_search").html(result);
				}
				});
			   }
			   else
			   {
				 $("#sub_sub_cate_search").html('<option value="">-Select One-</option>');
			   }
            });
            });
        
		
</script> 
 
<div class="col-md-3 col-sm-4">
        <div class="filter-sidebar">
          <div class="col-md-12 form-title">
            <h2>Refine Your Search</h2>
          </div>
          {!! Form::open(array('url' => 'listings/search/filter','class'=>'','id'=>'search','role'=>'form')) !!}
            <div class="col-md-12 form-group">
              <label class="control-label" for="cate_search">Categories</label>
              <select id="cate_search" name="cate_search" class="form-control">
                <option value="">Select One</option>
                @foreach(\App\Categories::where(array('status'=>'1','parent_id'=>0))->orderBy('category_name')->get() as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
                 
              </select>
			  <select id="sub_cate_search" name="sub_cate_search" class="form-control">
                <option value="">Select One</option>
              </select>
			  <select id="sub_sub_cate_search" name="sub_sub_cate_search" class="form-control">
                <option value="">Select One</option>
                 
              </select>
            </div>
			
            <div class="col-md-12 form-group rating">
              <label class="control-label">Select Rating </label><br>
                  <div class="radio radio-success radio-inline">
                    <input type="radio" name="rating" id="radio1" value="1" >
                    <label for="radio1" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i></span> </label>
                  </div><br>
                  <div class="radio radio-success radio-inline">
                    <input type="radio" name="rating" id="radio2" value="2">
                    <label for="radio2" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                  </div><br>
                  <div class="radio radio-success radio-inline">
                    <input type="radio" name="rating" id="radio3" value="3">
                    <label for="radio3" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                  </div><br>
                  <div class="radio radio-success radio-inline">
                    <input type="radio" name="rating" id="radio4" value="4">
                    <label for="radio4" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                  </div><br>
                  <div class="radio radio-success radio-inline">
                    <input type="radio" name="rating" id="radio5" value="5">
                    <label for="radio5" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                  </div>
            </div>
            
            <div class="col-md-12 form-group">
              <button type="submit" class="btn tp-btn-primary tp-btn-lg btn-block">Refine Your Search</button>
              <a href="{{ URL::to('listings') }}" class="btn btn-reset"><i class="fa fa-repeat"></i>Reset</a>
            </div>
          {!! Form::close() !!} 
        </div>
      </div>