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
                  <form class="form-horizontal form-label-left" action="{{ route('teachers.store') }}" method="POST">
                     @csrf
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input required name="name" type="text" class="form-control" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input required name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone No</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input required name="phone_no" name="text" type="text" class="form-control" placeholder="Phone No">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Password</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input required name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group row">
                                 <label class="control-label col-md-3 col-sm-3 ">Class</label>
                                 <div class="col-md-9 col-sm-9 ">
                                    <select required class="form-control" name="class_id">
                                       <option>Select Your Class</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </div>
                              </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                           <button type="button" class="btn btn-primary">Cancel</button>
                           <button type="reset" class="btn btn-primary">Reset</button>
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop