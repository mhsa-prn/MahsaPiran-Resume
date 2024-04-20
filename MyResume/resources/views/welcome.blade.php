<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>RESUME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body id="top-section" data-spy="scroll" data-target="#topnav" data-offset="70">
<div class="container">
    <header>
        <!-- navbar -->
        <div id="topnav" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <!-- Collapse - Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse">
                        <!-- Main nav -->
                        <ul class="nav">
                            <li class="active"><a href="#top-section">Top</a></li>
                            <li><a href="#work-section">Work</a></li>
                            <li><a href="#info-section">Information</a></li>
{{--                            <li><a href="#contact-section">Contact</a></li>--}}
                        </ul>
                        <!-- ENDS main nav -->
                        <!-- social -->
                        <ul class="nav pull-right ">
                            <li class="divider-vertical"></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Social <b
                                        class="caret"></b> </a>
                                <ul class="dropdown-menu social-menu">
                                    <li><a href="#"><i class="social-icon twitter"></i> Twitter</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                        <!-- ENDS Social -->
                    </div>
                    <!-- ENDS Collapse -->
                </div>
            </div>
        </div>
        <!-- ENDS navbar -->
    </header>
    <!-- MAIN -->
    <div id="main" role="main">
        <!-- Hero -->
        <div class="hero-unit">
            <h2>{{$profile_data->first_name}} {{$profile_data->last_name}} <small><a href="/files/history.pdf">Download Employment
                        History
                    Record</a></small></h2>
            <p style="font-size: 15px"><span style="background: lightgray">Gender:</span>
                {{$profile_data->gender}}</p>
            <p style="font-size: 15px"><span style="background: lightgray">Birthdate:</span> {{$profile_data->birth_date}}</p>
            <p style="font-size: 15px"><span style="background: lightgray">Email:</span>
                {{$profile_data->email}}</p>
            <p style="font-size: 15px"><span style="background: lightgray">Mobile:</span>
                {{$profile_data->mobile}}</p>
            <p style="font-size: 15px"><span style="background: lightgray">Address:</span>
                {{$profile_data->address}}</p>
            <p>{{$profile_data->summary}}</p>
        </div>
        <!-- ENDS hero -->
        <!-- Work -->
        <section id="work-section">
            <div class="page-header">
                <h1>Featured Work <small>  </small></h1>
            </div>
            <table class="table experience-table">
                <tbody>
                @foreach($works as $work)
                <tr>
                    <td><h3 class="position">{{$work->title}}</h3>
                        <p class="date"> <span style="background: lightgray; font-weight: bold">Github:</span>
                            <a href="https://github.com/mhsa-prn/Offline-Webinar">{{$work->github}}</a></p>
                        <p><a href="{{$work->document}}">Download Document</a></p>
                    </td>
                    <td><p>{{$work->description}}</p>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>
        <!-- ENDS work -->
        <!-- info -->
        <section id="info-section" class="information">
            <div class="page-header">
                <h1>Information <small>Learn everything about me</small></h1>
            </div>
            <ul id="information-tabs" class="nav nav-pills ">
{{--                <li><a href="#summary" data-toggle="tab">Summary</a></li>--}}
                <li><a href="#skills" data-toggle="tab">Skills</a></li>
                <li><a href="#experience" data-toggle="tab">Experience</a></li>
                <li><a href="#education" data-toggle="tab">Education</a></li>
                <li><a href="#awards" data-toggle="tab">Awards</a></li>
            </ul>
            <!-- tab content -->
            <div class="tab-content">
                <!-- Summary -->
{{--                <div class="summary-section tab-pane active" id="summary">--}}
{{--                    <p><strong>Resume is a free template</strong> It's responsive, HTML 5 valid all of this in one--}}
{{--                        single page. It's fully documented and you can use it with no attribution or credit back--}}
{{--                        required for commercial and personal projects, redistribution is not allowed if you want to use--}}
{{--                        it in a different way please contact me.</p>--}}
{{--                    <p>Thanks to thebeaststudio.com for sharing their work as placeholder images.</p>--}}
{{--                    <p><strong>Some dummy text</strong> Pellentesque habitant morbi tristique senectus et netus et--}}
{{--                        malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor--}}
{{--                        sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.--}}
{{--                        Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum--}}
{{--                        erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget--}}
{{--                        tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim--}}
{{--                        in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque--}}
{{--                        egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt--}}
{{--                        quis, accumsan porttitor, facilisis luctus, metus </p>--}}
{{--                </div>--}}
                <!-- ENDS Summary -->
                <!-- Skills -->
                <div class="tab-pane listing" id="skills">
                    @foreach($skills as $skill)
                    <div class="entry">
                        <div class="clearfix">
                            <div class="rating p"></div>
                            <h3 class="heading pull-leasft">{{$skill->title}}</h3>
                        </div>
                        <p>{{$skill->description}}</p>
                    </div>
                    @endforeach
                </div>
                <!-- ENDS Skills -->
                <!-- Experience -->
                <div class="tab-pane" id="experience">
                    <table class="table experience-table">
                        <tbody>
                        @foreach($experiences as $experience)
                        <tr>
                            <td><h3 class="position">{{$experience->position}}</h3>
                                <span class="date"> {{$experience->begin_date}} -
                                    {{$experience->end_date}}</span><small><a
                                        href="{{$experience->company_website}}" target="_blank">{{$experience->company}}</a></small
                                ></td>
                            <td><p>{{$experience->description}}</p>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- ENDS Experience -->
                <!-- Education -->
                <div class="tab-pane listing" id="education">
                    @foreach($education_levels as $education_level)
                    <div class="entry">
                        <h3 class="heading">{{$education_level->degree}}</h3>
                        <span class="date">{{$education_level->begin_year}} – {{$education_level->end_year}}</span>
                        <p><span style="background: lightgray">Institution Name:</span>
                            {{$education_level->institution_name}}</p>
                        <p><span style="background: lightgray">GPA:</span>
                            {{$education_level->gpa}}</p>
                    </div>
                    @endforeach
                </div>
                <!-- ENDS Education -->
                <!-- Awards -->
                <div class="tab-pane" id="awards">
                    <ul class="awards-list">
                        @foreach($awards as $award)
                        <li>
                            <h3 class="heading">{{$award->title}}</h3>
                            <p>{{$award->description}}</p>
                            <a class="btn" href="{{$award->file}}">Download</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- ENDS Awards -->
            </div>
            <!-- ENDS tab content -->
        </section>
        <!-- ENDS info -->
        <!-- Contact -->
{{--        <section id="contact-section">--}}
{{--            <div class="page-header">--}}
{{--                <h1>Contact <small> Get in touch</small></h1>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <!-- Form col -->--}}
{{--                <div class="span8">--}}
{{--                    <form class="well" id="contactForm" action="#" method="post">--}}
{{--                        <label>Your Name</label>--}}
{{--                        <input type="text" class="input-xlarge" placeholder="Whats your name?" name="name" id="name">--}}
{{--                        <label>Your Email</label>--}}
{{--                        <input type="text" class="input-xlarge" placeholder="How can i contact you?" name="email"--}}
{{--                               id="email">--}}
{{--                        <label>Your Web</label>--}}
{{--                        <input type="text" class="input-xlarge" placeholder="Have a website?" name="web" id="web">--}}
{{--                        <label>Message</label>--}}
{{--                        <textarea class="input-xxlarge" rows="4" name="comments" id="comments"></textarea>--}}
{{--                        <p>--}}
{{--                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>--}}
{{--                        </p>--}}
{{--                    </form>--}}
{{--                    <div id="error" class="alert alert-error">Error</div>--}}
{{--                    <div id="sent-form-msg" class="alert alert-success">Your message was sent!</div>--}}
{{--                </div>--}}
{{--                <!-- ENDS form col -->--}}
{{--                <div class="span4">--}}
{{--                    <ul class="address-block unstyled">--}}
{{--                        <li class="address"><i class="icon-home"></i> Address line, city, state ZIP</li>--}}
{{--                        <li class="phone"><i class="icon-comment"></i> +123 456 789</li>--}}
{{--                        <li class="email"><i class="icon-envelope"></i><a href="#"> email@server.com</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- ENDS Contact -->
    </div>
    <!-- ENDS MAIN -->
{{--    <footer>--}}
{{--        <hr>--}}
{{--        <p>&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a--}}
{{--                target="_blank" href="http://www.luiszuno.com">luiszuno</a></p>--}}
{{--    </footer>--}}
</div>
<!-- JavaScript at the bottom for fast page loading -->
<script src="js/jquery-1.7.1.min.js"></script>
<!-- scripts concatenated and minified via build script -->
<script src="js/plugins.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/custom.js"></script>
<!-- end scripts -->
</body>
</html><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->

