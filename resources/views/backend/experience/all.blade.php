<!doctype html>
<!-- <?
    if(isset($profile)){
        $image  = url('/').'images/profile/'.$profile->image;
    }
?> -->
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Experiences | Admin Panel</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/components.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
    <!-- end fo global styles-->
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"/>

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css"/>

    <!-- <link type="text/css" rel="stylesheet" media="screen" href="{{ URL::asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/form_elements.css') }}"/> -->


    <!--end of page level css-->
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{ URL::asset('img/loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    @include('backend.include.top')
    <div class="wrapper">
    @include('backend.include.left')
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <h4 class="nav_top_align skin_txt">
                                <i class="fa fa-user"></i>
                                My Experiences
                            </h4>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="{{ URL::route('admin') }}">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">My Experiences</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">

                        <div class="card-header bg-white">
                            All Experiences
                            <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('add-experience') }}"">Add New</a>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive m-t-35">
                                @if(count($exps)!=0)
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company</th>
                                                <th>Designation</th>
                                                <th>Description</th>
                                                <th>Start</th>
                                                <th>End</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;

                                            ?>
                                            @foreach($exps as $exp)

                                            <?php
                                                $end    = FALSE;
                                                if($exp->end){
                                                    $end = TRUE;
                                                }
                                            ?>
                                            
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $exp->company }}</td>
                                                    <td>{{ $exp->designation }}</td>
                                                    <td>{{ $exp->description }}</td>
                                                    <td>{{ date("d-M-Y", strtotime($exp->start)) }}</td>
                                                    <td>@if($end){{ date("d-M-Y", strtotime($exp->end)) }}@else{{ 'Still Working' }}@endif</td>
                                                    <td>
                                                    <a href="{{ url('/') }}/admin/experience/edit/{{ $exp->id }}" class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ url('/') }}/admin/experience/delete/{{ $exp->id }}" class="btn btn-sm btn-danger">Delete</a>
                                                    
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    {{ "Sorry! Nothing to show. " }}
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <!-- /.inner -->
            </div>
            <!-- Modal -->
            
            <!-- /.outer -->
            <!-- # right side -->
        </div>
        <!-- /#content -->
    </div>
    <!--wrapper-->
    @include('backend.include.settings')
    <!-- /#content -->
@include('backend.include.right')
</div>
<!-- /#wrap -->

<!-- /#footer -->

<!-- global scripts-->
<script type="text/javascript" src="{{ URL::asset('js/components.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<!-- end of global scripts-->
<!-- plugin scripts-->

<script type="text/javascript" src="{{ URL::asset('js/pluginjs/jasny-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/holderjs/js/holder.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/validation.js') }}"></script>


</body>
</html>