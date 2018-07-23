@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               {{ isset($region->id) ? 'Edit Region ' : 'Add Region' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/region') }}">Region</a></li>
                                <li><a class="link-effect" href="">{{ isset($region->id) ? 'Edit Region ' : 'Add Region' }}</a></li>
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
                                {!! Form::open(array('url' => array('admin/region/addregion'),'class'=>'form-horizontal padding-15','name'=>'location_form','id'=>'region_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                    <input type="hidden" name="id" value="{{ isset($region->id) ? $region->id : null }}">
									<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category</label>
								
                                          <div class="col-sm-9">
										 
                                            <select id="basic2" name="country_id" class="js-select2 form-control">
                                                <option value="">Select Country</option>
                                                 @foreach($countries as $country)
												 {{ $country->country_name }} 
												<option  value="{{$country->id}}"  @if(isset($region->country_id) && $region->country_id==$country->id) selected="selected" @endif  >
												{{ $country->country_name }} 
												</option>
												@endforeach
                                                
									</select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Region Name</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="region_name" value="{{ isset($region->region_name) ? $region->region_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Region Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="region_slug" value="{{ isset($region->region_slug) ? $region->region_slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
									   <label for="" class="col-sm-3 control-label">Status</label>
										<div class="col-sm-9">
										 <select id="basic2" name="status" class="js-select2 form-control">
                                            <option value="">Select Status</option>
										   <option value="1" @if(isset($region->status) && $region->status==1) selected @endif>Active</option>
										   <option value="0" @if(isset($region->status) && $region->status==0) selected @endif>Inactive</option>
                                                 				            
									</select>
										</div>
									</div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($region->id) ? 'Edit Region ' : 'Add Region' }}</button>
                                             
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