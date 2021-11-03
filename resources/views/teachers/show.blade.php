@extends('layouts.app')
@section('title') hussain @stop
@section('content')
<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h2>Teachers <small>Create</small></h2>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="x_panel">
               <div class="x_title">
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <br />
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">{{ $teacher->name }}</div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">{{ $teacher->email }}</div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone No</label>
                        <div class="col-md-9 col-sm-9 ">{{ $teacher->phone_no }}</div>
                     </div>
                     <div class="form-group row">
                                 <label class="control-label col-md-3 col-sm-3 ">Class</label>
                                 <div class="col-md-9 col-sm-9 ">{{ $teacher->class_id }}</div>
                              </div>
                     <div class="ln_solid"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop