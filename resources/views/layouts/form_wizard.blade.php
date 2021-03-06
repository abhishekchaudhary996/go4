@if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
@else

<!doctype html>
<html class="fixed sidebar-left-xs">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Form Wizard | Porto Admin - Responsive HTML5 Template 1.5.1</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />
        <link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />
        <link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="assets/vendor/dropzone/basic.css" />
        <link rel="stylesheet" href="assets/vendor/dropzone/dropzone.css" />
        <link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
        <link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
        <link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
        <link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />
        <link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <!-- Head Libs -->
        <script src="assets/vendor/modernizr/modernizr.js"></script>

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="assets/images/logo.png" height="35" alt="Porto Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
            
                    <span class="separator"></span>
            
                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="badge">3</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu large">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Tasks
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Generating Sales Report</span>
                                                <span class="message pull-right text-dark">60%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Importing Contacts</span>
                                                <span class="message pull-right text-dark">98%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Uploading something big</span>
                                                <span class="message pull-right text-dark">33%</span>
                                            </p>
                                            <div class="progress progress-xs light mb-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">230</span>
                                    Messages
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Doe</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joe Junior</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge">3</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Alerts
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-thumbs-down bg-danger"></i>
                                                </div>
                                                <span class="title">Server is Down!</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-lock bg-warning"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-signal bg-success"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2014</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name">
                                    @if (Auth::guest()) 
                                        administrator
                                    @else
                                    {{ Auth::user()->name }}
                                    @endif

                                </span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="/dashboard">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent nav-expanded nav-active">
                                        <a>
                                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                                            <span>Repositories</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="/new_repo">
                                                
                                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                    New Repository
                                                </a>
                                            </li>
                                            <li class="nav-parent">
                                                <a> 
                                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    Repositories
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a href="/public_repo"> 
                                                            - Public
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/private_repo">
                                                           - Private
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/repo_history">
                                                <i class="fa fa-history" aria-hidden="true"></i>
                                                    History
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span>Profile</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="pages-signup.html">
                                                     Sign Up
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-signin.html">
                                                     Sign In
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-recover-password.html">
                                                     Recover Password
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-lock-screen.html">
                                                     Locked Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-user-profile.html">
                                                     User Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-session-timeout.html">
                                                     Session Timeout
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-calendar.html">
                                                     Calendar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-timeline.html">
                                                     Timeline
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-media-gallery.html">
                                                     Media Gallery
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-invoice.html">
                                                     Invoice
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-blank.html">
                                                     Blank Page
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-404.html">
                                                     404
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-500.html">
                                                     500
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-log-viewer.html">
                                                     Log Viewer
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     Search Results
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-text-width" aria-hidden="true"></i>
                                            <span>Teams</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="ui-elements-typography.html">
                                                     Overview
                                                </a>
                                            </li>
                                            <li class="nav-parent">
                                                <a>
                                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                    Create
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a href="ui-elements-icons-elusive.html">
                                                            - Single Team
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-elements-icons-font-awesome.html">
                                                           - Multi Team
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="ui-elements-tabs.html">
                                                <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                     Settings
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/post_work">
                                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                                            <span>Post Work</span>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="mailbox-folder.html">
                                            <span class="pull-right label label-primary">182</span>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Inbox</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span>Maps</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="maps-google-maps.html">
                                                     Basic
                                                </a>
                                            </li>
                                            <li>
                                                <a href="maps-google-maps-builder.html">
                                                     Map Builder
                                                </a>
                                            </li>
                                            <li>
                                                <a href="maps-vector.html">
                                                     Vector
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                            <span>Settings</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a href="extra-changelog.html">
                                                     Changelog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="extra-ajax-made-easy.html">
                                                     Ajax Made Easy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
                                            <i class="fa fa-external-link" aria-hidden="true"></i>
                                            <span>Front-End <em class="not-included">(Not Included)</em></span>
                                        </a>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                            <span>Menu Levels</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a>First Level</a>
                                            </li>
                                            <li class="nav-parent">
                                                <a>Second Level</a>
                                                <ul class="nav nav-children">
                                                    <li class="nav-parent">
                                                        <a>Third Level</a>
                                                        <ul class="nav nav-children">
                                                            <li>
                                                                <a>Third Level Link #1</a>
                                                            </li>
                                                            <li>
                                                                <a>Third Level Link #2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Second Level Link #1</a>
                                                    </li>
                                                    <li>
                                                        <a>Second Level Link #2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                
                            <hr class="separator" />
                
                            <div class="sidebar-widget widget-tasks">
                                <div class="widget-header">
                                    <h6>Projects</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled m-none">
                                        <li><a href="#">Porto HTML5 Template</a></li>
                                        <li><a href="#">Tucson Template</a></li>
                                        <li><a href="#">Porto Admin</a></li>
                                    </ul>
                                </div>
                            </div>
                
                            <hr class="separator" />
                
                            <div class="sidebar-widget widget-stats">
                                <div class="widget-header">
                                    <h6>Company Stats</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li>
                                            <span class="stats-title">Stat 1</span>
                                            <span class="stats-complete">85%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                                    <span class="sr-only">85% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="stats-title">Stat 2</span>
                                            <span class="stats-complete">70%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="stats-title">Stat 3</span>
                                            <span class="stats-complete">2%</span>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                    <span class="sr-only">2% Complete</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                
                </aside>
                <!-- end: sidebar -->

               <!--  <section role="main" class="content-body"> -->


                    <!-- start: page -->
                        @yield('content')


                        
                    <!-- end: page -->
               <!--  </section> -->
            </div>

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
            
                        <div class="sidebar-right-wrapper">
            
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
            
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
            
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                                <ul>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-online">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <figure class="profile-picture">
                                            <img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
                                        </figure>
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
            
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
        
        <!-- Specific Page Vendor -->
        <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
        <script src="assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="assets/vendor/pnotify/pnotify.custom.js"></script>
        <script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
        <script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
        <script src="assets/vendor/select2/js/select2.js"></script>
        <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
        <script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script src="assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="assets/vendor/fuelux/js/spinner.js"></script>
        <script src="assets/vendor/dropzone/dropzone.js"></script>
        <script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
        <script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
        <script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
        <script src="assets/vendor/codemirror/lib/codemirror.js"></script>
        <script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
        <script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
        <script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
        <script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="assets/vendor/codemirror/mode/css/css.js"></script>
        <script src="assets/vendor/summernote/summernote.js"></script>
        <script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="assets/vendor/ios7-switch/ios7-switch.js"></script>
        <script src="assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>
        
        <!-- Theme Custom -->
        <script src="assets/javascripts/theme.custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="assets/javascripts/theme.init.js"></script>

        <!-- Examples -->
        <script src="assets/javascripts/forms/examples.wizard.js"></script>
    </body>
</html>

@endif