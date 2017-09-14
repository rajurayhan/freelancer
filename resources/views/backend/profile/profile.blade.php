<!doctype html>
<!-- <?
    if(isset($profile)){
        $image  = url('/').'images/profile/'.$profile->image;
    }
?> -->
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Bio | Admin Panel</title>
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
                                My Profile
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
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">

                        <div class="card-block m-t-35">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" action="{{url('admin/profile')}}" method="post" files="true" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pic</label>
                                            </div>
                                            <div class="col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img src="@if(isset($profile)){{ url('/') }}{{ '/images/profile/' }}{{  $profile->image }}@endif" data-src="@if(isset($profile)){{ url('/') }}{{ '/images/profile/' }}{{  $profile->image }}@endif"  alt="not found"></div>
                                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                    <div class="m-t-20 text-center">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="profile_pic"></span>
                                                        <a href="#" class="btn btn-warning fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">
                                                    Name *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" name="name" id="u-name"
                                                           class="form-control" value="@if(isset($profile)){{$profile->name}}@endif">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="designation" class="col-form-label">Designation
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-briefcase text-primary"></i></span>
                                                    <input type="text" placeholder=" " id="designation" name="designation"
                                                           class="form-control" value="@if(isset($profile)){{$profile->designation}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" placeholder=" " id="email" name="email"
                                                           class="form-control" value="@if(isset($contact)){{$contact->email}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" placeholder=" " id="phone" name="phone"
                                                           class="form-control" value="@if(isset($contact)){{$contact->phone}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map-marker text-primary"></i></span>
                                                    <input type="text" placeholder=" "  id="address" name="address"  class="form-control" value="@if(isset($contact)){{$contact->address}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="city" class="col-form-label">City
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-map text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="city" id="city"
                                                           class="form-control" value="@if(isset($contact)){{$contact->city}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="country" class="col-form-label">Country
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-globe text-primary"></i></span>
                                                    <input type="text" placeholder=" " name="country" id="country"
                                                           class="form-control" value="@if(isset($contact)){{$contact->country}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="fb" class="col-form-label">Facebook
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook text-primary"></i></span>
                                                    <input type="text" placeholder="http://facebook.com/username" name="facebook" id="facebook"
                                                           class="form-control" required value="@if(isset($profile)){{$profile->facebook}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="linkedin" class="col-form-label">Linked In
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-linkedin text-primary"></i></span>
                                                    <input type="text" placeholder="http://linkedin.com/username" name="linkedin" id="linkedin"
                                                           class="form-control" required value="@if(isset($profile)){{$profile->linkedin}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="twitter" class="col-form-label">Twitter
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter text-primary"></i></span>
                                                    <input type="text" placeholder="http://twitter.com/username" name="twitter" id="twitter"
                                                           class="form-control" required value="@if(isset($profile)){{$profile->twitter}}@endif">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="twitter" class="col-form-label">Skype
                                                    *</label>
                                            </div>
                                            <div class="col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-skype text-primary"></i></span>
                                                    <input type="text" placeholder="http://skype.com/username" name="skype" id="skype"
                                                           class="form-control" required value="@if(isset($profile)){{$profile->skype}}@endif">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-9 push-lg-3">
                                                <button class="btn btn-primary" type="submit">
                                                    <i class="fa fa-user"></i>
                                                    Save
                                                </button>
                                                <button class="btn btn-warning" type="reset" id="clear">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button>
                                                
                                            </div>
                                        </div>
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