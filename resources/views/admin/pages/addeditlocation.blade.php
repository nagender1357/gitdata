@extends("admin.admin_app")

@section("content")
 <script type="text/javascript">
 var jq = $.noConflict();
        jq(document).ready(function(e) {
           jq("#country_id").change(function(){
               var country=$("#country_id").val();
            jq.ajax({
            type: "GET",
             url: "{{ URL::to('/admin/ajax_country') }}/"+country,
             //data: "cat=" + cat,
             success: function(result){

                 jq("#region_id").html(result);
              }
            });
            
               });
        });
</script> 
  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               {{ isset($location->id) ? 'Edit City ' : 'Add City' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/locations') }}">City</a></li>
                                <li><a class="link-effect" href="">{{ isset($location->id) ? 'Edit City ' : 'Add City' }}</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->
                <!-- Page Content -->
                <div class="content content-boxed">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="block">
                               <div class="block-content block-content-narrow"> 
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                 @if(Session::has('flash_message'))
                                                <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                                                    {{ Session::get('flash_message') }}
                                                </div>
                                @endif
                                {!! Form::open(array('url' => array('admin/locations/addlocation'),'class'=>'form-horizontal padding-15','name'=>'location_form','id'=>'location_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                    <input type="hidden" name="id" value="{{ isset($location->id) ? $location->id : null }}">
									<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Country</label>
								
                                          <div class="col-sm-9">
										 
                                            <select id="country_id" name="country_id" >
                                                <option value="">Select Country</option>
                                                 @foreach($countries as $country)
<option  value="{{$country->id}}"  @if(isset($location->parent_id) && $location->parent_id==$country->id)selected="selected"@endif>{{ $country->country_name }} 
</option>
												@endforeach
                                                
									</select>
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Region</label>
								
                                          <div class="col-sm-9">
										 
                                            <select id="region_id" name="region_id" class="js-select2 form-control">
                                                <option value="">Select Region</option>
                                                 @foreach($regions as $region)
						
												<option  value="{{$region->id}}"  @if(isset($location->region_id) && $location->region_id==$region->id) selected="selected" @endif  >
												{{ $region->region_name }} 
												</option>
												@endforeach
                                                
									</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">City Name</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="location_name" value="{{ isset($location->location_name) ? $location->location_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">City Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="location_slug" value="{{ isset($location->location_slug) ? $location->location_slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
									   <label for="" class="col-sm-3 control-label">Status</label>
										<div class="col-sm-9">
										 <select id="basic2" name="status" class="js-select2 form-control">
                                            <option value="">Select Status</option>
										   <option value="1" @if(isset($location->status) && $location->status==1) selected @endif>Active</option>
										   <option value="0" @if(isset($location->status) && $location->status==0) selected @endif>Inactive</option>
                                                 				            
									</select>
										</div>
									</div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($location->id) ? 'Edit Location ' : 'Add Location' }}</button>
                                             
                                        </div>
                                    </div>
                                    
                                    {!! Form::close() !!} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->            
@endsection