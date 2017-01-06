@extends('admin.master')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-plus"></i> Create Product</h3>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>Add Product</strong>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-8">
                                    @include('partials.flash_notification')
                                    {!! Form::open(['route' => 'product.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"
                                           <!-- Name Field -->
                                           <div class="form-group">
                                               {!! Form::label('name', 'Brand', ['class' => 'col-sm-3 control-label']) !!}
                                               <div class="col-sm-6">
                                                   {!! Form::select("brand_id", $brands, null, ['class' => 'form-control']) !!}
                                               </div>
                                               <div class="col-xs-2">
                                                   <a href="" id="add-brand-btn" class="btn btn-sm btn-info">Add Brand</a>
                                               </div>
                                    </div>
                                           <!--new brand add form-->
                                           <div class="form-group" id="add-new-brand">
                                               <div class="col-md-offset-3 col-md-6">
                                                   <div class="input-group ">
                                                       <input type="text" name="name" id="new_brand" class="form-control">
                                                       <span class="input-group-btn">
                                                        <a href="" id="save-brand-btn" class="btn btn-success">
                                                        <i class="glyphicon glyphicon-ok"></i>
                                                      </a>
                                                    </span>
                                                  </div>
                                                </div>
                                            </div>
                                            <!--/.end brand add form-->

                                            <div class="form-group">
                                               {!! Form::label('suplier_name', 'Suplier', ['class' => 'col-sm-3 control-label']) !!}
                                                 <div class="col-sm-6">
                                                    {!! Form::select("suplier_id", $supliers, null, ['class' => 'form-control']) !!}

                                                </div>
                                                <div class="col-xs-2">
                                                 <a href="" id="add-suplier-btn" class="btn btn-sm btn-info">Add Suplier</a>   

                                              </div>
                                           </div>
                                            <div class="form-group" id="add-new-suplier">
                                               <div class="col-md-offset-3 col-md-6">
                                                  <div class="input-group ">
                                                      <input type="text" name="name" id="new_suplier" class="form-control">
                                                        <span class="input-group-btn">
                                                           <a href="" id="save-suplier-btn" class="btn btn-success">
                                                             <i class="glyphicon glyphicon-ok"></i>
                                                            </a>
                                                        </span>
                                                  </div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                            <label for="product_name" class="control-label col-md-3">Product Name</label>
                                                            <div class="col-sm-6">
                                                              {!! Form::text("product_name", null, ['class' => 'form-control']) !!}
                                                            </div>
                                                          </div>
                                                <div class="form-group">
                                                            <label for="category_name" class="control-label col-md-3">Product Type</label>
                                                            <div class="col-sm-6">
                                                              {!! Form::text("product_type", null, ['class' => 'form-control']) !!}
                                                            </div>
                                                          </div>


     
                </div>
                
              </div>
            </div>
          </div>
          <div class="panel-footer panel-primary">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-offset-3 col-md-6">
                
                   {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                   
                
                </div>
              </div>
            </div>
          </div>
            
          </div>
        </div>

         

        </div>   
                
            </div>
{!! Form::close() !!}
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


 @include('partials.ajaxwork')
@endsection