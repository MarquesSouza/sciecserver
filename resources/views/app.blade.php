<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>Sciec - Acompanhe seus Eventos!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body class="page-container-boxed">
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START BARRA DE NAVEGAÇÃO LATERAL -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="{{'/'}}">Sciec</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="{{asset('assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="{{asset('assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{ Auth::user()->name }}</div>
                        <div class="profile-data-title">Tipo do Usuario</div>
                    </div>
                    <div class="profile-controls">
                        <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                    </div>
                </div>
            </li>
            <li class="xn-title">Navigation</li>
            <li class="active">
                <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                <ul>
                    <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                    <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                    <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                        <ul>
                            <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                            <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                        <ul>
                            <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                            <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                            <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                        </ul>
                    </li>
                    <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                    <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                    <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                    <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                    <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                    <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file"></span> Blog</a>

                        <ul>
                            <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                            <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                        <ul>
                            <li><a href="pages-login.html">App Login</a></li>
                            <li><a href="pages-login-website.html">Website Login</a></li>
                            <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                        <ul>
                            <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                            <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                            <li><a href="pages-error-500.html"> Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                <ul>
                    <li><a href="layout-boxed.html">Boxed</a></li>
                    <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                    <li><a href="layout-nav-top.html">Navigation Top</a></li>
                    <li><a href="layout-nav-right.html">Navigation Right</a></li>
                    <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                    <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                    <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                    <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                    <li><a href="layout-search-left.html">Search Left Side</a></li>
                    <li><a href="blank.html">Blank Page</a></li>
                </ul>
            </li>
            <li class="xn-title">Components</li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
                <ul>
                    <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                    <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                    <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                    <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                    <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                    <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                    <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                    <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                    <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                    <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                    <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                <ul>
                    <li>
                        <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                        <div class="informer informer-danger">New</div>
                        <ul>
                            <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                            <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                            <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                            <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                        </ul>
                    </li>
                    <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                    <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                    <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                    <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                    <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                <ul>
                    <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                    <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                    <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                <ul>
                    <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                    <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                    <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                    <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                </ul>
            </li>
            <li>
                <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                <ul>
                    <li class="xn-openable">
                        <a href="#">Second Level</a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Third Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Fourth Level</a>
                                        <ul>
                                            <li><a href="#">Fifth Level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END BARRA DE NAVEGAÇÃO LATERAL -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- BARRA DE NAVEGAÇÃO SUPERIOR -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
            <!-- END SIGN OUT -->
        </ul>
        <!-- END BARRA DE NAVEGAÇÃO SUPERIOR -->

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            @yield('content')
        </div>
        <!-- END PAGE CONTENT WRAPPER -->

    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="{{ asset('audio/alert.mp3') }}" preload="auto"></audio>
<audio id="audio-fail" src="{{ asset('audio/fail.mp3') }}" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='{{ asset('js/plugins/icheck/icheck.min.js') }}'></script>
<script type="text/javascript" src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/morris/raphael-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/rickshaw/d3.v3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/rickshaw/rickshaw.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}'></script>
<script type="text/javascript" src="{{ asset('js/plugins/owl/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/actions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/demo_dashboard.js') }}"></script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
</body>
</html>
