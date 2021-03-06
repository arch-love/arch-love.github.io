<?php
require_once("./app/includes/config.php");
require_once("./app/core/core_showsettings.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title><?php echo $show_settings['gt_name']; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <!-- START SITE -->
    <div id="wrapper">

        <nav class="hidden-xs cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
            <h3><i class="fa fa-star-o"></i> علاقه مندی ها</h3>
            <ul>
                <li>
                    <img src="upload/item_01.jpg" alt="" class="alignleft img-responsive">
                    <h4><a href="single-item.html">طرح پروفایل کاربر</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 221</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 05</a></small>
                </li>
                <li>
                    <img src="upload/item_02.jpg" alt="" class="alignleft img-responsive">
                    <h4><a href="single-item.html">قالب برنامه ایمیل</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 435</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 13</a></small>
                </li>
                <li>
                    <img src="upload/item_03.jpg" alt="" class="alignleft img-responsive">
                    <h4><a href="single-item.html">نمایش پادکست</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 551</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 12</a></small>
                </li>
                <li>
                    <img src="upload/item_04.jpg" alt="" class="alignleft img-responsive">
                    <h4><a href="single-item.html">صفحه ورود</a></h4>
                    <small><a href="single-item.html"><i class="fa fa-eye"></i> 412</a></small>
                    <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 55</a></small>
                </li>
            </ul>
            <a href="shop-favorites.html" class="btn btn-primary">برو به علاقه مندی ها</a>
        </nav>

        <header class="header">
            <div class="container-menu">
                <nav class="navbar navbar-default yamm">
                    <div class="container">
                        <div class="navbar-table">
                            <div class="navbar-cell">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="index.html"><i class="fa fa-download"></i> شــایــا</a>
                                    <div class="open-menu">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                            <span class="sr-only">نمایش منو</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                </div><!-- end navbar-header -->
                            </div><!-- end navbar-cell -->
                            <div class="navbar-cell stretch">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                    <div class="navbar-cell">
                                        <ul class="nav navbar-nav navbar-center">
                                            <li><a class="active" href="index.html" title="">خانه</a></li>
            
                                            <li><a href="forum.html" title="">فروم</a></li>
                                            <li><a href="blog.html" title="">وبلاگ</a></li>
                                            <li><a href="contact.html" title="">تماس با ما</a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="dropdown membermenu hovermenu">
                                                <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="upload/member.png" alt="" class="img-circle"> <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-header">پروفایل</li>
                                                    <li><a href="edit-account.html">ویرایش حساب</a></li>
                                                    <li><a href="index.html#">خروج</a></li>
                                                    <li><hr></li>
                                                    <li class="dropdown-header">داشبورد</li>
                                                    <li><a href="public-profile.html">پروفایل عمومی</a></li>
                                                    <li><a href="sales.html">فروش های من</a></li>
                                                    <li><a href="messages.html">پیام ها</a></li>
                                                    <li><a href="upload-item.html">بارپذاری محصول</a></li>
                                                    <li><a href="downloads.html">دانلود ها</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- end navbar-cell -->
                                </div><!-- /.navbar-collapse -->        
                            </div><!-- end navbar cell -->
                        </div><!-- end navbar-table -->
                    </div><!-- end container fluid -->
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section class="section single-wrap">
            <div class="container">
                <div class="page-title public-profile-title">
                    <div class="row">
                        <div class="col-sx-12 text-center">
                            <h3>شایا | قالب حرفه ای فروش فایل </h3>
                            <p>هزاران طرح PSD، اپلیکیشن اندروید، قالب سایت آماده ! <br> </p>
                            <a href="index.html#" class="followbtn">ایجاد فروشگاه</a> <span>-</span> <a href="index.html#" class="followbtn">بارگذاری کار</a> <span>-</span> <a href="index.html#" class="followbtn">همکاری در فروش</a>
                        </div>
                    </div>
                </div>

                <div class="content-top">
                    <div class="row">
                        <div class="col-sx-6 col-sm-6">
                            <div class="custommenu hidden-xs">
                                <a id="showLeft" href="index.html#" title="" class="bt-menu-trigger"><i class="fa fa-bars"></i> <img src="upload/fav.png" alt=""></a>
                            </div>
                        </div> 

                        <div class="col-sm-6 col-xs-12 cen-xs text-left">
                            <ul class="list-inline social">
                                <li><a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-title="فیس بوک"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-title="توییتر"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-title="گوگل پلاس"></i></a></li>
                                <li><a href="#"><i class="fa fa-paper-plane" data-toggle="tooltip" data-title="تلگرام"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-title="یوتیوب"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" data-toggle="tooltip" data-title="پین ترست"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end row -->
                </div><!-- end content top -->

                <div class="content-before">
                    <div class="row">
                        <div class="col-md-6 col-sx-12 cen-xs">
                            <form class="dropForm">
                                <div class="input-prepend">
                                    <div class="btn-group">
                                        <select name="orderby" class="selectpicker">
                                          <option>همه دسته ها</option>
                                          <option>اپلیکیشن iOS</option>
                                          <option>اپلیگیشن اندروید</option>
                                          <option>طرح های PSD</option>
                                          <option>قالب HTML</option>
                                          <option>قالب وردپرس</option>
                                      </select>
                                    </div>
                                    <input type="text" class="form-control" placeholder="کلمه کلیدی ...">
                                    <button class="btn btn-primary" tabindex="-1"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 text-left hidden-xs">
                            <div class="catalog-order">
                                <select name="orderby" class="selectpicker">
                                    <option value="popularity">مرتب سازی بر اساس</option>
                                    <option value="rating">رتبه بندی</option>
                                    <option value="date" selected='selected'>جدیدترین ها</option>
                                    <option value="price">قیمت</option>
                                    <option value="price-desc">محبوبیت</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end content before -->

                <div class="content">
                    <div class="row">
                        <div class="col-md-12 general-title">
                            <h4>جدیدترین محصولات <span class="hidden-xs"><a href="shop-four.html">نمایش همه</a></span></h4>
                            <hr>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="item-box">
                                <div class="item-media entry">
                                    <img src="upload/item_01.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <div class="item-author">
                                            <a href="public-profile.html"><img src="upload/member_01.jpg" class="img-circle" alt=""> نادیا</a>
                                        </div><!-- end author -->
                                    </div>
                                    <div class="theme__button">
                                        <p><a href="single-item.html" title="">21</a></p>
                                    </div>
                                </div><!-- end item-media -->
                                <h4><a href="single-item.html">پیش بینی آب و هوا</a></h4>
                                <small><a href="single-item.html"><i class="fa fa-eye"></i> 893</a></small>
                                <small><a href="single-item.html"><i class="fa fa-comment-o"></i> 12</a></small>
                            </div><!-- end item-box -->
                        </div><!-- end col -->

                       

                <div class="content-after text-center boxs">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="pagination-wrapper">
                                <ul class="pagination">
                                    <li><a href="index.html#">1</a></li>
                                    <li><a href="index.html#">2</a></li>
                                    <li><a href="index.html#">3</a></li>
                                    <li><a href="index.html#">4</a></li>
                                    <li><a href="index.html#">5</a></li>
                                    <li>
                                        <a href="index.html#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- end row -->
                </div><!-- end content after -->

                <div class="stores boxs">
                    <div class="row">
                        <div class="col-md-12 general-title">
                            <h4>فروشنده برتر <span class="hidden-xs"><p>فروشگاه جی تی پرس</p></span></h4>
                            <hr>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row homefeatured">
                        <div class="col-md-12">
                            <div class="storelist panel panel-info">
                                <div class="panel-body">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-xs-12">
                                            <img alt="" class="img-responsive img-thumbnail" src="upload/store_09.jpg">
                                        </div>
                                        <div class="col-sm-2 col-xs-12">
                                            <h4><a href="public-profile.html">GTpress SHOP</a></h4>
                                            <ul>
                                                <li><a href="index.html#"><i class="fa fa-envelope-o"></i> پشتیبانی</a></li>
                                                <li><a href="public-profile.html"><i class="fa fa-image"></i> 0 محصول</a></li>
                                                <li><a href="single-item.html"><i class="fa fa-shopping-cart"></i> 0 فروش</a></li>
                                                <li><i class="fa fa-map-marker"></i> لرستان - خرم آباد</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-md-5 col-xs-12">
                                           <ul class="list-inline">
                                                <li><a href="single-item.html" class="screenshot" data-gal="upload/item_01.jpg" title="20000 تومان "><img class="img-responsive img-thumbnail" src="upload/item_01.jpg" alt=""></a></li>
                                                <li><a href="single-item.html" class="screenshot" data-gal="upload/item_02.jpg" title="20000 تومان"><img class="img-responsive img-thumbnail" src="upload/item_02.jpg" alt=""></a></li>
                                                <li><a href="single-item.html" class="screenshot" data-gal="upload/item_03.jpg" title="20000 تومان"><img class="img-responsive img-thumbnail" src="upload/item_03.jpg" alt=""></a></li>
                                                <li><a href="single-item.html" class="screenshot" data-gal="upload/item_04.jpg" title="20000 تومان"><img class="img-responsive img-thumbnail" src="upload/item_04.jpg" alt=""></a></li>
                                                <li><a href="single-item.html" class="screenshot" data-gal="upload/item_05.jpg" title="20000 تومان"><img class="img-responsive img-thumbnail" src="upload/item_05.jpg" alt=""></a></li>
                                            </ul>
                                        </div><!-- end col -->
                                        <div class="col-sm-2 col-xs-12 text-center">
                                            <ul>
                                                <li><a href="index.html#" class="btn btn-primary btn-block">دنبال کردن</a></li>
                                                <li><a href="public-profile.html" title="">0 دنبال کننده</a></li>
                                                <li><a href="public-profile.html" title="">0 دنبال شونده</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end form-group -->   
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end r0w -->
                </div><!-- end stores -->

            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <div class="media cen-xs">
                            <p>
                                &copy; تمامی حقوق نزد گروه GT محفوظ می باشد !<br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <ul class="list-inline text-left cen-xs">
                            <li><a href="index.html#">خانه</a></li>
                            <li><a href="index.html#">قوانین سایت</a></li>
                            <li><a href="index.html#">حریم خصوصی</a></li>
                            <li><a href="index.html#">درباره ما</a></li>
                            <li><a href="index.html#">پشتیبانی</a></li>
                            <li><a class="topbutton" href="index.html#">بازگشت به بالا <i class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->
    </div><!-- end wrapper -->
    <!-- END SITE -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>