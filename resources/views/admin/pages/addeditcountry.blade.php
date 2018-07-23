@extends("admin.admin_app")

@section("content")

  <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                               {{ isset($country->id) ? 'Edit Country ' : 'Add Country' }}
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li><a href="{{ URL::to('admin/country') }}">Country</a></li>
                                <li><a class="link-effect" href="">{{ isset($country->id) ? 'Edit Country ' : 'Add Country' }}</a></li>
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
                                {!! Form::open(array('url' => array('admin/country/addcountry'),'class'=>'form-horizontal padding-15','name'=>'location_form','id'=>'country_form','role'=>'form','enctype' => 'multipart/form-data')) !!} 
                                    <input type="hidden" name="id" value="{{ isset($country->id) ? $country->id : null }}">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Country Name</label>
                                          <div class="col-sm-9">
                                            <input type="text" name="country_name" value="{{ isset($country->country_name) ? $country->country_name : null }}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Country Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="country_slug" value="{{ isset($country->country_slug) ? $country->country_slug : null }}" class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group">
									   <label for="" class="col-sm-3 control-label">Status</label>
										<div class="col-sm-9">
										 <select id="basic2" name="status" class="js-select2 form-control">
                                            <option value="">Select Status</option>
										   <option value="1" @if(isset($country->status) && $country->status==1) selected @endif>Active</option>
										   <option value="0" @if(isset($country->status) && $country->status==0) selected @endif>Inactive</option>
                                                 				            
									</select>
										</div>
									</div>
                                    <hr>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-sm-9 ">
                                            <button type="submit" class="btn btn-primary">{{ isset($country->id) ? 'Edit Country ' : 'Add Country' }}</button>
                                             
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