<!doctype html>
<!-- <?
    if(isset($profile)){
        $image  = url('/').'images/profile/'.$profile->image;
    }
?> -->
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Skill | Admin Panel</title>
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
                                My Skills
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
                                <li class="breadcrumb-item active">My Skills</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">
                        <div class="card-header bg-white">
                        @if(isset($skill)){{'Edit'}}@else{{'New'}}@endif Skill
                        </div>
                        <div class="card-block">
                            <form class="form-horizontal" id="" action="@if(isset($skill)){{ URL::route('update-skill', $skill->id) }}@else{{ URL::route('post-skill') }}@endif" method="post" files="true" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Name</h5>
                                        
                                            <input type="text" class="form-control rounded_input" name="name"
                                            value="@if(isset($skill)){{ $skill->name }}@endif" required />
                                        
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Percentage</h5>
                                        
                                            <input name="percent" type="number" class="form-control rounded_input" value="@if(isset($skill)){{ $skill->percent }}@endif" required/>
                                        
                                        <!--</div>-->
                                    </div>
                                    <div class="col-lg-4 input_field_sections">
                                        <h5>Publish</h5>
                                        <div class="form-group">
                                        <select class="form-control" name="publish" required>
                                                <option value="Published">Yes</option>
                                                <option value="Unpublished">No</option>
                                            </select>
                                        </div>
                                        <!--</div>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 input_field_sections">

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-plus"></i>
                                                    Save
                                                </button>
                                        </div>
                                        <!--</div>-->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.inner -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <form>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="float-right" aria-hidden="true">&times;</span>
                            </button>
                            <div class="input-group search_bar_small">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
</script>
</body>
</html>