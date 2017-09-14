<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bio | Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/components.css') }}" />
    <link type="text/css" rel="stylesheet" media="screen" href="{{ URL::asset('vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/summernote/css/summernote.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/form_elements.css') }}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css"/>
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
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <h4 class="nav_top_align">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Bio
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                            <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="{{ URL::route('admin') }}">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ URL::route('profile') }}">Profile</a>
                                </li>
                                <li class="breadcrumb-item active">Bio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row summer_note_display">
                        <div class="col-12">
                            <div class="card m-t-35 tinymce_full">
                                <div class="card-header bg-white">
                                    <i class="livicon" data-name="umbrella" data-size="16" data-loop="true"
                                       data-c="#fff"
                                       data-hc="white"></i>
                                    Biography
                                </div>
                                <form class="form-horizontal login_validator" id="tryitForm" action="{{url('admin/bio')}}" method="post" files="true" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div>
                                    <textarea name="bio" id="tinymce_full" rows="7" required>@if(isset($profile)){{ $profile->bio }}@endif
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row" style="margin-top: 20px;">
                        <div class="col-sm-9">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                        </div>
                    </div>
                    </form>

                    <!-- row - form editors ends-->
                </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
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
        </div>
        <!-- /#content -->
    </div>
    @include('backend.include.settings')
    <!-- /#content -->
    @include('backend.include.right')
    <!-- # right side -->

</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="{{ URL::asset('js/components.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<!-- end of global scripts-->
<!--Plugin scripts-->
<script type="text/javascript" src="{{ URL::asset('vendors/tinymce/js/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/summernote/js/summernote.min.js') }}"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="{{ URL::asset('js/pages/form_editors.js') }}"></script>
<!-- end page level scripts -->
</body>

</html>