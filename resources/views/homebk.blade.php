<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Nexa :: Basic Form Elements</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
<!-- Wait Me Css -->
<link href="{{asset('plugins/waitme/waitMe.css')}}" rel="stylesheet" />
<!-- Bootstrap Select Css -->
<link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<!-- Custom Css -->
<link  rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/color_skins.css')}}">

</head>
<body class="theme-orange">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">        
        <div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
        <p>Please wait...</p>
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Nexa"></div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div><!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="material-icons">search</i> </div>
    <input type="text" placeholder="Explore Nexa...">
    <div class="close-search"> <i class="material-icons">close</i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">Nexa</a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="mail-inbox.html" class="inbox-btn hidden-sm-down" data-close="true"><i class="zmdi zmdi-email"></i></a></li>
            <li class="dropdown menu-app hidden-sm-down"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"> <i class="zmdi zmdi-apps"></i> </a>
                <ul class="dropdown-menu slideDown">
                    <li class="body">
                        <ul class="menu">
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                            <li><a href="contact.html"><i class="zmdi zmdi-accounts-list"></i><span>Contacts</span></a></li>
                            <li><a href="chat.html"><i class="zmdi zmdi-comment-text"></i><span>Chat</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">            
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle xs-hide" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-coral"> <i class="material-icons">person_add</i> </div>
                                <div class="menu-info">
                                    <h4>12 new members joined</h4>
                                    <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-turquoise"> <i class="material-icons">add_shopping_cart</i> </div>
                                <div class="menu-info">
                                    <h4>4 sales made</h4>
                                    <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle g-bg-cyan"> <i class="material-icons">delete_forever</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle g-bg-blue"> <i class="material-icons">mode_edit</i> </div>
                                <div class="menu-info">
                                    <h4><b>Nancy</b> changed name</h4>
                                    <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-slategray"> <i class="material-icons">comment</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> commented your post</h4>
                                    <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-seagreen"> <i class="material-icons">cached</i> </div>
                                <div class="menu-info">
                                    <h4><b>John</b> updated status</h4>
                                    <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <div class="icon-circle l-blue"> <i class="material-icons">settings</i> </div>
                                <div class="menu-info">
                                    <h4>Settings updated</h4>
                                    <p> <i class="material-icons">access_time</i> Yesterday </p>
                                </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Notifications</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li><a href="javascript:void(0);">
                                <h4> Footer display issue <small>72%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Make new buttons <small>56%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Create new dashboard <small>68%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Solve transition issue <small>77%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                            <li><a href="javascript:void(0);">
                                <h4> Answer GitHub questions <small>87%</small> </h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                </a></li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                </ul>
            </li>
            
            <li><a href="sign-in.html" class="mega-menu xs-hide" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar"> 
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="assets/images/xs/avatar1.jpg" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info --> 
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li><a href="index.html">Main Dashboard</a></li>
                    <li><a href="dashboard-rtl.html">RTL Dashboard</a></li>
                    <li><a href="index2.html">Horizontal Menu</a></li>
                    <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                    <li><a href="ec-dashboard.html">Ecommerce Dashboard</a></li>
                    <li><a href="iot-dashboard.html">Iot Dashboard</a></li>
                </ul>
            </li>
            <li><a href="widgets.html"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a></li>
    <li><a href="mail-inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span> </a></li>
                <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a></li>
    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                <ul class="ml-menu">
                    <li><a href="ec-dashboard.html">Dashboard</a></li>
                    <li><a href="ec-product.html">Product</a></li>
                    <li><a href="ec-product-List.html">Product List</a></li>
                    <li><a href="ec-product-detail.html">Product detail</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="helper-classes.html">Helper Classes</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="animations.html">Animations</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="dialogs.html">Dialogs</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="labels.html">Labels</a></li>
                    <li><a href="list-group.html">List Group</a></li>
                    <li><a href="media-object.html">Media Object</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="preloaders.html">Preloaders</a></li>
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="range-sliders.html">Range Sliders</a></li>
                    <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="waves.html">Waves</a></li>
                </ul>
            </li>
            <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                <ul class="ml-menu">
                    <li class="active"><a href="basic-form-elements.html">Basic Form Elements</a></li>
                    <li><a href="advanced-form-elements.html">Advanced Form Elements</a></li>
                    <li><a href="form-examples.html">Form Examples</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editors.html">Editors</a></li>
                    <li><a href="form-summernote.html">Summernote</a></li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                <ul class="ml-menu">                        
                    <li><a href="normal-tables.html">Normal Tables</a></li>
                    <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                    <li><a href="editable-table.html">Editable Tables</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Medias</span> </a>
                <ul class="ml-menu">
                    <li><a href="image-gallery.html">Image Gallery</a></li>
                    <li><a href="carousel.html">Carousel</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li><a href="echart.html">E Chart</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="sparkline.html">Sparkline</a></li>
                    <li><a href="jquery-knob.html">Jquery Knob</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a></li>
                    <li><a href="sign-up.html">Sign Up</a></li>
                    <li><a href="forgot-password.html">Forgot Password</a></li>
                    <li><a href="404.html">Page 404</a></li>
                    <li><a href="500.html">Page 500</a></li>
                    <li><a href="page-offline.html">Page Offline</a></li>
                    <li><a href="locked.html">Locked Screen</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="contact.html">Contact list</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li><a href="google.html">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-down"></i><span>Multi Level Menu</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);"> <span>Menu Item</span> </a></li>
                    <li><a href="javascript:void(0);"> <span>Menu Item - 2</span> </a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"> <span>Level - 2</span> </a>
                        <ul class="ml-menu">
                            <li><a href="javascript:void(0);"> <span>Menu Item</span> </a></li>
                            <li><a href="javascript:void(0);" class="menu-toggle"> <span>Level - 3</span> </a>
                                <ul class="ml-menu">
                                    <li><a href="javascript:void(0);"> <span>Level - 4</span> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="changelogs.html"><i class="zmdi zmdi-time-restore"></i><span>Changelogs</span> </a></li>
            <li class="header">LABELS</li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a></li>
            <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a></li>
        </ul>
    </div>
    <!-- #Menu --> 
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane in active in active slideRight" id="skins">
                <div class="slim_scroll">
                <h6>Flat Color</h6>
                <ul class="choose-skin">                   
                    <li data-theme="purple"><div class="purple"></div><span>Purple</span></li>
                    <li data-theme="blue"><div class="blue"></div><span>Blue</span></li>
                    <li data-theme="cyan"><div class="cyan"></div><span>Cyan</span></li>
                </ul>                    
                <h6>Multi Color</h6>
                <ul class="choose-skin">                        
                    <li data-theme="black"><div class="black"></div><span>Black</span></li>
                    <li data-theme="deep-purple"><div class="deep-purple"></div><span>Deep Purple</span></li>
                    <li data-theme="red"><div class="red"></div><span>Red</span></li>                        
                </ul>                    
                <h6>Gradient Color</h6>
                <ul class="choose-skin">                    
                    <li data-theme="green"><div class="green"></div><span>Green</span> </li>
                    <li data-theme="orange" class="active"><div class="orange"></div><span>Orange</span></li>
                    <li data-theme="blush"><div class="blush"></div><span>Blush</span></li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane pullUp" id="chat">
            <div class="right_chat slim_scroll">
                <div class="search">
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search..." required autofocus>
                        </div>
                    </div>
                </div>
                <h6>Recent</h6>
                <ul class="list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Sophia</span>
                                    <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Grayson</span>
                                    <span class="message">All the Lorem Ipsum generators on the</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="me">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">John</span>
                                    <span class="message">It is a long established fact that a reader</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Richard McClintock, a Latin professor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                        
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline inlineblock">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane slideLeft" id="settings">
            <div class="settings slim_scroll">
                <p class="text-left">General Settings</p>
                <ul class="setting-list">
                    <li><span>Report Panel Usage</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Email Redirect</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">System Settings</p>
                <ul class="setting-list">
                    <li><span>Notifications</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Auto Updates</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">Account Settings</p>
                <ul class="setting-list">
                    <li><span>Offline</span>
                        <div class="switch">
                            <label><input type="checkbox"><span class="lever"></span></label>
                        </div>
                    </li>
                    <li><span>Location Permission</span>
                        <div class="switch">
                            <label><input type="checkbox" checked><span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Basic Form Elements
                <small class="text-muted">Welcome to Nexa Application</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Nexa</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Basic Form Elements</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> INPUT <small>Different sizes and widths</small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Different Widths</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-6" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-4" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-sm-3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Different Sizes</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Large Input" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Default Input" />
                                    </div>
                                </div>
                                <div class="form-group form-group-sm">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Small Input" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Floating Label Examples</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Large Input</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Default Input</label>
                                    </div>
                                </div>
                                <div class="form-group form-float form-group-sm">
                                    <div class="form-line">
                                        <input type="text" class="form-control" />
                                        <label class="form-label">Small Input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title">Input Status</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line focused">
                                        <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line disabled">
                                        <input type="text" class="form-control" placeholder="Disabled" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input --> 
        <!-- Textarea -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>TEXTAREA</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Example</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="card-inside-title"> Auto Growing Vertical Direction <small>Taken from <a href="https://github.com/jackmoore/autosize/tree/master" target="_blank">github.com/jackmoore/autosize/tree/master</a></small> </h2>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea rows="1" class="form-control no-resize auto-growth" placeholder="Please type what you want... And please don't forget the ENTER key press multiple times :)"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Textarea --> 
        <!-- Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> SELECT <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick selectpicker">
                                    <option value="">-- Please select --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" disabled>
                                    <option value="">Disabled</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Select --> 
        <!-- Checkbox -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> CHECKBOX <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="basic_checkbox_1" checked />
                            <label for="basic_checkbox_1">Default</label>
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                            <label for="basic_checkbox_2">Filled In</label>
                            <input type="checkbox" id="basic_checkbox_3" checked disabled />
                            <label for="basic_checkbox_3">Default - Disabled</label>
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in" checked disabled />
                            <label for="basic_checkbox_4">Filled In - Disabled</label>
                        </div>
                        <h2 class="card-inside-title">With Material Design Colors</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
                            <label for="md_checkbox_1">RED</label>
                            <input type="checkbox" id="md_checkbox_2" class="chk-col-pink" checked />
                            <label for="md_checkbox_2">PINK</label>
                            <input type="checkbox" id="md_checkbox_3" class="chk-col-purple" checked />
                            <label for="md_checkbox_3">PURPLE</label>
                            <input type="checkbox" id="md_checkbox_4" class="chk-col-deep-purple" checked />
                            <label for="md_checkbox_4">DEEP PURPLE</label>
                            <input type="checkbox" id="md_checkbox_5" class="chk-col-indigo" checked />
                            <label for="md_checkbox_5">INDIGO</label>
                            <input type="checkbox" id="md_checkbox_6" class="chk-col-blue" checked />
                            <label for="md_checkbox_6">BLUE</label>
                            <input type="checkbox" id="md_checkbox_7" class="chk-col-light-blue" checked />
                            <label for="md_checkbox_7">LIGHT BLUE</label>
                            <input type="checkbox" id="md_checkbox_8" class="chk-col-cyan" checked />
                            <label for="md_checkbox_8">CYAN</label>
                            <input type="checkbox" id="md_checkbox_9" class="chk-col-teal" checked />
                            <label for="md_checkbox_9">TEAL</label>
                            <input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked />
                            <label for="md_checkbox_10">GREEN</label>
                            <input type="checkbox" id="md_checkbox_11" class="chk-col-light-green" checked />
                            <label for="md_checkbox_11">LIGHT GREEN</label>
                            <input type="checkbox" id="md_checkbox_12" class="chk-col-lime" checked />
                            <label for="md_checkbox_12">LIME</label>
                            <input type="checkbox" id="md_checkbox_13" class="chk-col-yellow" checked />
                            <label for="md_checkbox_13">YELLOW</label>
                            <input type="checkbox" id="md_checkbox_14" class="chk-col-amber" checked />
                            <label for="md_checkbox_14">AMBER</label>
                            <input type="checkbox" id="md_checkbox_15" class="chk-col-orange" checked />
                            <label for="md_checkbox_15">ORANGE</label>
                            <input type="checkbox" id="md_checkbox_16" class="chk-col-deep-orange" checked />
                            <label for="md_checkbox_16">DEEP ORANGE</label>
                            <input type="checkbox" id="md_checkbox_17" class="chk-col-brown" checked />
                            <label for="md_checkbox_17">BROWN</label>
                            <input type="checkbox" id="md_checkbox_18" class="chk-col-grey" checked />
                            <label for="md_checkbox_18">GREY</label>
                            <input type="checkbox" id="md_checkbox_19" class="chk-col-blue-grey" checked />
                            <label for="md_checkbox_19">BLUE GREY</label>
                            <input type="checkbox" id="md_checkbox_20" class="chk-col-black" checked />
                            <label for="md_checkbox_20">BLACK</label>
                        </div>
                        <h2 class="card-inside-title">With Material Design Colors - Filled In</h2>
                        <div class="demo-checkbox">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red" checked />
                            <label for="md_checkbox_21">RED</label>
                            <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-pink" checked />
                            <label for="md_checkbox_22">PINK</label>
                            <input type="checkbox" id="md_checkbox_23" class="filled-in chk-col-purple" checked />
                            <label for="md_checkbox_23">PURPLE</label>
                            <input type="checkbox" id="md_checkbox_24" class="filled-in chk-col-deep-purple" checked />
                            <label for="md_checkbox_24">DEEP PURPLE</label>
                            <input type="checkbox" id="md_checkbox_25" class="filled-in chk-col-indigo" checked />
                            <label for="md_checkbox_25">INDIGO</label>
                            <input type="checkbox" id="md_checkbox_26" class="filled-in chk-col-blue" checked />
                            <label for="md_checkbox_26">BLUE</label>
                            <input type="checkbox" id="md_checkbox_27" class="filled-in chk-col-light-blue" checked />
                            <label for="md_checkbox_27">LIGHT BLUE</label>
                            <input type="checkbox" id="md_checkbox_28" class="filled-in chk-col-cyan" checked />
                            <label for="md_checkbox_28">CYAN</label>
                            <input type="checkbox" id="md_checkbox_29" class="filled-in chk-col-teal" checked />
                            <label for="md_checkbox_29">TEAL</label>
                            <input type="checkbox" id="md_checkbox_30" class="filled-in chk-col-green" checked />
                            <label for="md_checkbox_30">GREEN</label>
                            <input type="checkbox" id="md_checkbox_31" class="filled-in chk-col-light-green" checked />
                            <label for="md_checkbox_31">LIGHT GREEN</label>
                            <input type="checkbox" id="md_checkbox_32" class="filled-in chk-col-lime" checked />
                            <label for="md_checkbox_32">LIME</label>
                            <input type="checkbox" id="md_checkbox_33" class="filled-in chk-col-yellow" checked />
                            <label for="md_checkbox_33">YELLOW</label>
                            <input type="checkbox" id="md_checkbox_34" class="filled-in chk-col-amber" checked />
                            <label for="md_checkbox_34">AMBER</label>
                            <input type="checkbox" id="md_checkbox_35" class="filled-in chk-col-orange" checked />
                            <label for="md_checkbox_35">ORANGE</label>
                            <input type="checkbox" id="md_checkbox_36" class="filled-in chk-col-deep-orange" checked />
                            <label for="md_checkbox_36">DEEP ORANGE</label>
                            <input type="checkbox" id="md_checkbox_37" class="filled-in chk-col-brown" checked />
                            <label for="md_checkbox_37">BROWN</label>
                            <input type="checkbox" id="md_checkbox_38" class="filled-in chk-col-grey" checked />
                            <label for="md_checkbox_38">GREY</label>
                            <input type="checkbox" id="md_checkbox_39" class="filled-in chk-col-blue-grey" checked />
                            <label for="md_checkbox_39">BLUE GREY</label>
                            <input type="checkbox" id="md_checkbox_40" class="filled-in chk-col-black" checked />
                            <label for="md_checkbox_40">BLACK</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Checkbox --> 
        <!-- Radio -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> RADIO <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="demo-radio-button">
                            <input name="group1" type="radio" id="radio_1" checked />
                            <label for="radio_1">Radio - 1</label>
                            <input name="group1" type="radio" id="radio_2" />
                            <label for="radio_2">Radio - 2</label>
                            <input name="group1" type="radio" class="with-gap" id="radio_3" />
                            <label for="radio_3">Radio - With Gap</label>
                            <input name="group1" type="radio" id="radio_4" class="with-gap" />
                            <label for="radio_4">Radio - With Gap</label>
                            <input name="group2" type="radio" id="radio_5" checked disabled />
                            <label for="radio_5">Radio - Disabled</label>
                            <input name="group3" type="radio" id="radio_6" class="with-gap" checked disabled />
                            <label for="radio_6">Radio - Disabled</label>
                        </div>
                        <h2 class="card-inside-title"> With Material Design Colors <small>You can use material design colors which examples are <code>.radio-col-pink, .radio-col-cyan</code> class</small> </h2>
                        <div class="demo-radio-button">
                            <input name="group4" type="radio" id="radio_7" class="radio-col-red" checked />
                            <label for="radio_7">RED</label>
                            <input name="group4" type="radio" id="radio_8" class="radio-col-pink" />
                            <label for="radio_8">PINK</label>
                            <input name="group4" type="radio" id="radio_9" class="radio-col-purple" />
                            <label for="radio_9">PURPLE</label>
                            <input name="group4" type="radio" id="radio_10" class="radio-col-deep-purple" />
                            <label for="radio_10">DEEP PURPLE</label>
                            <input name="group4" type="radio" id="radio_11" class="radio-col-indigo" />
                            <label for="radio_11">INDIGO</label>
                            <input name="group4" type="radio" id="radio_12" class="radio-col-blue" />
                            <label for="radio_12">BLUE</label>
                            <input name="group4" type="radio" id="radio_13" class="radio-col-light-blue" />
                            <label for="radio_13">LIGHT BLUE</label>
                            <input name="group4" type="radio" id="radio_14" class="radio-col-cyan" />
                            <label for="radio_14">CYAN</label>
                            <input name="group4" type="radio" id="radio_15" class="radio-col-teal" />
                            <label for="radio_15">TEAL</label>
                            <input name="group4" type="radio" id="radio_16" class="radio-col-green" />
                            <label for="radio_16">GREEN</label>
                            <input name="group4" type="radio" id="radio_17" class="radio-col-light-green" />
                            <label for="radio_17">LIGHT GREEN</label>
                            <input name="group4" type="radio" id="radio_18" class="radio-col-lime" />
                            <label for="radio_18">LIME</label>
                            <input name="group4" type="radio" id="radio_19" class="radio-col-yellow" />
                            <label for="radio_19">YELLOW</label>
                            <input name="group4" type="radio" id="radio_20" class="radio-col-amber" />
                            <label for="radio_20">AMBER</label>
                            <input name="group4" type="radio" id="radio_21" class="radio-col-orange" />
                            <label for="radio_21">ORANGE</label>
                            <input name="group4" type="radio" id="radio_22" class="radio-col-deep-orange" />
                            <label for="radio_22">DEEP ORANGE</label>
                            <input name="group4" type="radio" id="radio_23" class="radio-col-brown" />
                            <label for="radio_23">BROWN</label>
                            <input name="group4" type="radio" id="radio_24" class="radio-col-grey" />
                            <label for="radio_24">GREY</label>
                            <input name="group4" type="radio" id="radio_25" class="radio-col-blue-grey" />
                            <label for="radio_25">BLUE GREY</label>
                            <input name="group4" type="radio" id="radio_26" class="radio-col-black" />
                            <label for="radio_26">BLACK</label>
                        </div>
                        <h2 class="card-inside-title"> With Material Design Colors - With Gap <small>Add to <code>.with-gap</code> class</small> </h2>
                        <div class="demo-radio-button">
                            <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked />
                            <label for="radio_30">RED</label>
                            <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-pink" />
                            <label for="radio_31">PINK</label>
                            <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-purple" />
                            <label for="radio_32">PURPLE</label>
                            <input name="group5" type="radio" id="radio_33" class="with-gap radio-col-deep-purple" />
                            <label for="radio_33">DEEP PURPLE</label>
                            <input name="group5" type="radio" id="radio_34" class="with-gap radio-col-indigo" />
                            <label for="radio_34">INDIGO</label>
                            <input name="group5" type="radio" id="radio_35" class="with-gap radio-col-blue" />
                            <label for="radio_35">BLUE</label>
                            <input name="group5" type="radio" id="radio_36" class="with-gap radio-col-light-blue" />
                            <label for="radio_36">LIGHT BLUE</label>
                            <input name="group5" type="radio" id="radio_37" class="with-gap radio-col-cyan" />
                            <label for="radio_37">CYAN</label>
                            <input name="group5" type="radio" id="radio_38" class="with-gap radio-col-teal" />
                            <label for="radio_38">TEAL</label>
                            <input name="group5" type="radio" id="radio_39" class="with-gap radio-col-green" />
                            <label for="radio_39">GREEN</label>
                            <input name="group5" type="radio" id="radio_40" class="with-gap radio-col-light-green" />
                            <label for="radio_40">LIGHT GREEN</label>
                            <input name="group5" type="radio" id="radio_41" class="with-gap radio-col-lime" />
                            <label for="radio_41">LIME</label>
                            <input name="group5" type="radio" id="radio_42" class="with-gap radio-col-yellow" />
                            <label for="radio_42">YELLOW</label>
                            <input name="group5" type="radio" id="radio_43" class="with-gap radio-col-amber" />
                            <label for="radio_43">AMBER</label>
                            <input name="group5" type="radio" id="radio_44" class="with-gap radio-col-orange" />
                            <label for="radio_44">ORANGE</label>
                            <input name="group5" type="radio" id="radio_45" class="with-gap radio-col-deep-orange" />
                            <label for="radio_45">DEEP ORANGE</label>
                            <input name="group5" type="radio" id="radio_46" class="with-gap radio-col-brown" />
                            <label for="radio_46">BROWN</label>
                            <input name="group5" type="radio" id="radio_47" class="with-gap radio-col-grey" />
                            <label for="radio_47">GREY</label>
                            <input name="group5" type="radio" id="radio_48" class="with-gap radio-col-blue-grey" />
                            <label for="radio_48">BLUE GREY</label>
                            <input name="group5" type="radio" id="radio_49" class="with-gap radio-col-black" />
                            <label for="radio_49">BLACK</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Radio --> 
        <!-- Switch Button -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> SWITCH BUTTON <small>Taken from <a href="http://materializecss.com/" target="_blank">materializecss.com</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Examples</h2>
                        <div class="demo-switch">
                            <div class="switch">
                                <label>OFF
                                    <input type="checkbox" checked>
                                    <span class="lever"></span>ON</label>
                            </div>
                            <div class="switch">
                                <label>DISABLED
                                    <input type="checkbox" disabled>
                                    <span class="lever"></span></label>
                            </div>
                        </div>
                        <h2 class="card-inside-title"> With Material Design Colors <small>You can use material design colors which examples are <code>.switch-col-pink, .switch-col-teal</code> class</small> </h2>
                        <div class="demo-switch">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">RED</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-red"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">PINK</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-pink"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">PURPLE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-purple"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">DEEP PURPLE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-deep-purple"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">INDIGO</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-indigo"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">BLUE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">LIGHT BLUE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-light-blue"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">CYAN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-cyan"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">TEAL</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-teal"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">GREEN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-green"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">LIGHT GREEN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-light-green"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">LIME</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-lime"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">YELLOW</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-yellow"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">AMBER</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-amber"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">ORANGE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-orange"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">DEEP ORANGE</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-deep-orange"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">BROWN</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-brown"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">GREY</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-grey"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">BLUE GREY</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-blue-grey"></span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="demo-switch-title">BLACK</div>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span class="lever switch-col-black"></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# Switch Button --> 
        <!--DateTime Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> DATETIME PICKER <small>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="timepicker form-control" placeholder="Please choose a time...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# DateTime Picker --> 
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="{{asset('bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{asset('plugins/autosize/autosize.js')}}"></script> <!-- Autosize Plugin Js --> 
<script src="{{asset('plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js --> 
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 

<script src="{{asset('bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script> 
</body>
</html>