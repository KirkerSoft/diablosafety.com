<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="search.css"/>
    <link rel="stylesheet" href="../css/grid.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="./search.js"></script>
    <!--[if lt IE 9]>
    <div id="ie6-alert" style="width: 100%; text-align:center;">
        <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0"
             usemap="#Map" longdesc="http://die6.frontcube.com"/>
        <map name="Map" id="Map">
            <area shape="rect" coords="496,201,604,329"
                  href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
                  alt="Download Interent Explorer"/>
            <area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank"
                  alt="Download Apple Safari"/>
            <area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank"
                  alt="Download Opera"/>
            <area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank"
                  alt="Download Firefox"/>
            <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank"
                  alt="Download Google Chrome"/>
        </map>
    </div>
    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/ie.css">
    <![endif]-->
</head>
<body>
<div class="page">
    <!--============================== Header =================================-->
    <header id="header">

        <div class="panel">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="btn-wrap">
                            <a class="btn f__left" href="#"><span class="fa fa-user primary"> </span> Create an account</a>
                            <a class="btn f__left" href="#"><span class="fa fa-unlock-alt primary"> </span> Login</a>
                        </div>
                        <div class="f__right f__none-767">
                            <div class="form-wrap">
                                <form id="search" class="search" action="search.php" method="get"
                                      accept-charset="utf-8">
                                    <label class="input_wrap" for="search2">
                                        <input id="search2" onfocus="if(this.value == 'Search'){this.value = '';}"
                                               onblur="if(this.value == ''){this.value='Search';}" type="text" name="s"
                                               value="Search"/>
                                    </label>
                                    <span class="fa fa-search"></span>
                                </form>
                                <a class="btn fa fa-play primary"
                                   onclick="document.getElementById('search').submit()"
                                   href="#"></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="stuck_container">
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <div class="f__left logo-caption f__none-767">
                            <h1>
                                <a href="../index.html">Medical <span>training</span></a>
                            </h1>
                        </div>

                        <nav class="header-menu f__right f__none-767">
                            <ul class="sf-menu">
                                <li class="current">
                                    <a href="../index.html">Home</a>
                                </li>
                                <li>
                                    <a href="../index-1.html">About</a>
                                    <ul>
                                        <li>
                                            <a href="#">history</a>
                                        </li>
                                        <li>
                                            <a href="#">news</a>
                                            <ul>
                                                <li>
                                                    <a href="#">latest</a>
                                                </li>
                                                <li>
                                                    <a href="#">archive</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">testimonials</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../index-2.html">Services</a>
                                </li>
                                <li>
                                    <a href="../index-3.html">News</a>
                                </li>
                                <li>
                                    <a class="last" href="../index-4.html">Contacts</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--============================ Content ================================-->
    <div id="content">
        <div class="bg-content">
            <div class="wrapper_5 last-child">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="heading t__center">
                                <h3 class="tp">Search Results</h3>
                            </div>
                            <div id="search-results"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======================== Footer =================================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <p class="copyright">
                        Medical Training &copy;
                        <span id="copyright-year"></span>.
                        <a class="primary" href="../index-5.html">Privacy policy</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div id="toTop">
        <span class="fa fa-chevron-up"></span>
    </div>
</div>
<script src="./script.js"></script>
</body>
</html>