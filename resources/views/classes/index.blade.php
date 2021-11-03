@extends('layouts.app')
@section('title')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Classes <small>View</small></h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <a class="btn btn-success" href=""> Create New Product</a>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="row">
                <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                   <table class="table table-bordered">
                           <tr>
                               <th>S.No</th>
                               <th>Title</th>
                               <th>Status</th>
                               <th width="280px">Action</th>
                           </tr>
                           @foreach ($classes as $class)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ $class->title }}</td>
                               <td>{{ $class->status }}</td>
                               <td>
                               </td>
                           </tr>
                           @endforeach
                       </table>
                     
                       {!! $classes->links() !!}


                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
        @stop