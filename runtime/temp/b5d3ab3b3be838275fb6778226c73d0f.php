<?php /*a:4:{s:67:"F:\Project\DolphinPHPV1.4.5\application\index\view\index\index.html";i:1588581194;s:67:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\base.html";i:1588518184;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\header.html";i:1588210734;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\footer.html";i:1588521994;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo htmlentities($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <!-- 公共样式和JS -->
    <meta name="robots" content="all" />
    <meta name="author" content="成都餐协餐饮管理有限公司,蜀ICP备12020698号-3" />
    <meta name="keywords" content="<?php echo htmlentities($configuration['keywords']); ?>" />
    <meta name="description" content="<?php echo htmlentities($configuration['description']); ?>" />
    <link rel="shortcut icon" href="/static/index/favicon.ico" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/css.css" />
    <link type="text/css" rel="stylesheet" href="/static/index/css/style.css" />
    <script src="/static/index/js/jquery.min.1.8.js" type="text/javascript"></script>
    <script type="text/javascript">
        function uaredirect(f) { try { if (document.getElementById("bdmark") != null) { return } var b = false; if (arguments[1]) { var e = window.location.host; var a = window.location.href; if (isSubdomain(arguments[1], e) == 1) { f = f + "/#m/" + a; b = true } else { if (isSubdomain(arguments[1], e) == 2) { f = f + "/#m/" + a; b = true } else { f = a; b = false } } } else { b = true } if (b) { var c = window.location.hash; if (!c.match("fromapp")) { if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) { location.replace(f) } } } } catch (d) { } } function isSubdomain(c, d) { this.getdomain = function (f) { var e = f.indexOf("://"); if (e > 0) { var h = f.substr(e + 3) } else { var h = f } var g = /^www\./; if (g.test(h)) { h = h.substr(4) } return h }; if (c == d) { return 1 } else { var c = this.getdomain(c); var b = this.getdomain(d); if (c == b) { return 1 } else { c = c.replace(".", "\\."); var a = new RegExp("\\." + c + "$"); if (b.match(a)) { return 2 } else { return 0 } } } };
    </script>
    <script type="text/javascript">
        uaredirect("http://www.wap.1zhichan.com/?laiyuan=baiduziranliuliang");
    </script>
    <!-- 当前页面的样式及JS -->
    
<meta name="baidu-site-verification" content="xfB9IRbv85" />
<link href="/static/index/css/focus.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/sqhs.css" rel="stylesheet" type="text/css" />
<link href="/static/index/css/wns.css" rel="stylesheet" type="text/css" />
<script src="/static/index/js/jquery.DB_tabMotionBanner.min.js" type="text/javascript"></script>
<!--swiper-->
<link rel="stylesheet" href="/static/index/swiper/css/swiper.min.css">
<style>
    .news a:hover{color:#FF0000}

    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 12px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-pagination-bullet {
        width: 15px;
        height: 15px;
        text-align: center;
        line-height: 15px;
        font-size: 12px;
        color:#000;
        opacity: 1;
        background: rgba(0,0,0,0.2);
    }
    .swiper-pagination-bullet-active {
        color:#fff;
        background: #007aff;
    }
    .swiper-container2 {
        width: 100%;
        height: 100%;
    }
</style>

</head>
<body>
<!--头部-->
<div class="a1" align="center">
    <div class="a11" align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="164" align="left" valign="top">
                    <table width="100" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="5">
                            </td>
                        </tr>
                    </table>
                    <a href="/index.html">
                        <img alt="一纸馋" src="<?php echo htmlentities(get_file_path($configuration['logo'])); ?>" /></a>
                    <table width="100" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="5">
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="27">
                </td>
                <td width="833" align="left" valign="top">
                    <div class="wx_tips5 j_tips5" align="center">
                        <div class="tips_hd5">
                            <div class="menu sy">
                                <ul class="clearfix">
                                    <?php if(!(empty($nav_1) || (($nav_1 instanceof \think\Collection || $nav_1 instanceof \think\Paginator ) && $nav_1->isEmpty()))): if(is_array($nav_1) || $nav_1 instanceof \think\Collection || $nav_1 instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a id="active_<?php echo htmlentities($tab['id']); ?>" href="<?php echo url($tab['url_value']); if($tab['params'] != ''): ?>?<?php echo htmlentities($tab['params']); ?><?php endif; ?>">
                                            <b><?php echo htmlentities($tab['title']); ?></b><br />
                                        </a>
                                    </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="tips_bd5">
                            <div style="z-index: 9999; width: 1141px; background: url(/static/index/image/sbgs.png) repeat-x;
                                    height: 240px;">
                                <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td height="20">
                                        </td>
                                    </tr>
                                </table>
                                <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
                                    <tr>
                                        <td  align="center" valign="top" >
                                            <img style=" width:310px; height:200px" alt="首页" src="/static/index/image/tqs.png" />
                                        </td>
                                        <?php if(!(empty($nav_2) || (($nav_2 instanceof \think\Collection || $nav_2 instanceof \think\Paginator ) && $nav_2->isEmpty()))): if(is_array($nav_2) || $nav_2 instanceof \think\Collection || $nav_2 instanceof \think\Paginator): if( count($nav_2)==0 ) : echo "" ;else: foreach($nav_2 as $key=>$val): ?>
                                        <td align="left" valign="top">
                                            <div style="line-height: 28px;    text-align: center;width:119px" class="font13">
                                                <?php if(is_array($val) || $val instanceof \think\Collection || $val instanceof \think\Paginator): $i = 0; $__LIST__ = $val;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                                                <a id="active_<?php echo htmlentities($list['id']); ?>" href="<?php echo url($list['url_value']); if($list['params'] != ''): ?>?<?php echo htmlentities($list['params']); ?><?php endif; ?>"><?php echo htmlentities($list['title']); ?></a><br />
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </td>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php endif; ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="clear: both;">
</div>
<!--二级导航栏-->
<?php if(!(empty($nav_h) || (($nav_h instanceof \think\Collection || $nav_h instanceof \think\Paginator ) && $nav_h->isEmpty()))): ?>
<div class="a1" align="center" style="border-bottom: 1px solid #e0dede;">
    <div class="a11" align="center" style="border-left: 1px solid #e0dede; border-right: 1px solid #e0dede;">
        <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td width="50" height="50" align="center">
                    <a href="/">
                        <img alt="" src="/static/index/image/isy.jpg" /></a>
                </td>
                <td width="974" align="center" valign="top">
                    <table width="974" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tr>
                            <?php if(is_array($nav_h) || $nav_h instanceof \think\Collection || $nav_h instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_h;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <td id="tebs_<?php echo htmlentities($val['id']); ?>" class=" tebs cline ">
                                <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                            </td>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
<script>
    window.onload =function() {
        var nav_pid =  "<?php echo htmlentities($nav_pid); ?>";
        var nav_id =  "<?php echo htmlentities($nav_id); ?>";
        var str1 = '#active_' + nav_pid;
        //console.log(nav_pid);
        $(str1).addClass('active');
        if (nav_id != 0){
            //console.log(nav_id);
            var str2 = '#tebs_' + nav_id;
            $(str2).addClass('tebs2');
        }
    }
</script>

<!--Banner-->
<div class="DB_tab25">
    <ul class="DB_bgSet">
        <?php if(!(empty($banner_bg) || (($banner_bg instanceof \think\Collection || $banner_bg instanceof \think\Paginator ) && $banner_bg->isEmpty()))): 
                foreach($banner_bg as $key => $val){
                    $banner_bg_url = get_file_path($val['img']);
            ?>
        <li style="background: url(<?php echo htmlentities($banner_bg_url); ?>) no-repeat top center;"></li>
            <?php } ?>
        <?php endif; ?>
    </ul>
    <ul class="DB_imgSet">
        <?php if(!(empty($banner) || (($banner instanceof \think\Collection || $banner instanceof \think\Paginator ) && $banner->isEmpty()))): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $key = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key;?>
        <li>
            <a href="<?php echo url($val['url']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>">
                <img alt="<?php echo htmlentities($val['alt1']); ?>" class="DB_<?php echo htmlentities($key); ?>_1" title="<?php echo htmlentities($val['title1']); ?>" src="<?php echo htmlentities(get_file_path($val['img1'])); ?>" />
                <img alt="<?php echo htmlentities($val['alt2']); ?>" class="DB_<?php echo htmlentities($key); ?>_2" title="<?php echo htmlentities($val['title2']); ?>" src="<?php echo htmlentities(get_file_path($val['img2'])); ?>" />
            </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
    </ul>
    <div class="DB_menuWrap">
        <ul class="DB_menuSet">
        <?php if(!(empty($banner) || (($banner instanceof \think\Collection || $banner instanceof \think\Paginator ) && $banner->isEmpty()))): if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
            <li>
                <img src="/static/index/image/btn_off.png" alt="<?php echo htmlentities($key['alt']); ?>" />
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
        </ul>
        <div class="DB_next">
            <img alt="" src="/static/index/image/nextArrow.png" alt="下一页" /></div>
        <div class="DB_prev">
            <img alt="" src="/static/index/image/prevArrow.png" alt="上一页" /></div>
    </div>
</div>
<script type="text/javascript">
    $('.DB_tab25').DB_tabMotionBanner({
        key: 'b28551',
        autoRollingTime: 3000,
        bgSpeed: 500,
        motion: {
            DB_1_1: { left: -100, opacity: 0, speed: 1000, delay: 500 },
            DB_1_2: { left: 70, opacity: 0, speed: 1000, delay: 1000 },
            DB_2_1: { left: -100, opacity: 0, speed: 1000, delay: 500 },
            DB_2_2: { left: 70, opacity: 0, speed: 1000, delay: 1000 },
            DB_3_1: { left: -100, opacity: 0, speed: 1000, delay: 500 },
            DB_3_2: { left: 50, opacity: 0, speed: 1000, delay: 1000 },
            DB_4_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
            DB_4_2: { left: 50, opacity: 0, speed: 1000, delay: 1000 },

            end: null
        }
    })
</script>
<div style="clear: both;">
</div>

<div class="a12" align="center">
    <div class="a11" align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="10">
                </td>
            </tr>
        </table>
        <!--品牌介绍、媒体报道、联系我们-->
        <table width="1024" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td width="333" align="center" valign="top">
                    <div class="wx_tips2 j_tips2" align="center">
                        <div class="tips_bd2 wen1">
                            <table width="333" align="center" height="120" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="43" height="39" align="center" valign="top">
                                    </td>
                                    <td width="151" align="left" valign="top">
                                        <div class="font20" style="padding-top: 15px;">
                                            <a href="<?php echo url('index/aboutus/index'); ?>?cat=5"><b>品牌介绍</b></a></div>
                                        <div class="font16" style="padding-top: 5px;">
                                        </div>
                                        <div class="font12" style="margin-top: 15px; padding: 3px;">
                                            来自韩国的纸上烤肉</div>
                                    </td>
                                    <td width="139" align="center">
                                        <a href="<?php echo url('index/aboutus/index'); ?>?cat=5" title="品牌介绍">
                                            <img alt="" src="/static/index/image/index/20150805111800_49564.png" title="品牌介绍" /></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td width="12" align="center" valign="top">
                    <div style="padding-top: 10px;">
                        <img alt="" src="/static/index/image/lint.png" /></div>
                </td>
                <td width="333" align="center" valign="top">
                    <div class="wx_tips2 j_tips2" align="center">
                        <div class="tips_bd2 wen2">
                            <table width="333" align="center" height="120" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="43" height="39" align="center" valign="top">
                                    </td>
                                    <td width="151" align="left" valign="top">
                                        <div class="font20" style="padding-top: 15px;">
                                            <a href="<?php echo url('index/project/index'); ?>"><b>媒体报道</b></a></div>
                                        <div class="font16" style="padding-top: 5px;">
                                        </div>
                                        <div style="padding-top: 15px;">
                                            <img alt="媒体报道" src="/static/index/image/sbs.jpg" /></div>
                                    </td>
                                    <td width="139" align="center">
                                        <a href="<?php echo url('index/project/index'); ?>" title="媒体报道">
                                            <img alt="媒体报道" src="/static/index/image/index/20150805111740_91859.png" title="媒体报道" /></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td width="12" align="center" valign="top">
                    <div style="padding-top: 10px;">
                        <img alt="" src="/static/index/image/lint.png" /></div>
                </td>
                <td width="333" align="center" valign="top">
                    <div class="wx_tips2 j_tips2" align="center">
                        <div class="tips_bd2 wen3">
                            <table width="333" align="center" height="120" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="43" height="39" align="center" valign="top">
                                        <div style="padding-top: 43px;">
                                            <img alt="" src="/static/index/image/adds.png" /></div>
                                    </td>
                                    <td width="151" align="left" valign="top">
                                        <div class="font20 " style="padding-top: 15px;">
                                            <a href="<?php echo url('index/contactus/index'); ?>"><b>联系我们</b></a></div>
                                        <div class="font12" style="padding-top: 5px; line-height: 16px;">
                                            <?php echo htmlentities($configuration['address']); ?></div>
                                        <div class="font20" style="padding-top: 5px;">
                                            <?php echo htmlentities($configuration['mobile']); ?></div>
                                    </td>
                                    <td width="139" align="center">
                                        <a href="<?php echo url('index/contactus/index'); ?>" title="联系我们">
                                            <img alt="联系我们" src="/static/index/image/index/logo1.png" title="联系我们" /></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="28">
                </td>
            </tr>
        </table>
        <div style="clear: both;">
        </div>
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <!-- book -->
            <tr>
                <td width="590" valign="top" style="position: relative;">
                    <!-- Swiper -->
                    <div class="swiper-container3" style="width: 590px;height: 420px;">
                        <div class="swiper-wrapper">
                            <?php if(!(empty($album) || (($album instanceof \think\Collection || $album instanceof \think\Paginator ) && $album->isEmpty()))): if(is_array($album) || $album instanceof \think\Collection || $album instanceof \think\Paginator): $i = 0; $__LIST__ = $album;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                            <div class="swiper-slide" style="background-image:url(<?php echo htmlentities(get_file_path($val['img'])); ?>);"></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <!-- Swiper JS -->
                    <script src="/static/index/swiper/js/swiper.min.js"></script>
                    <script>
                        var swiper = new Swiper('.swiper-container3', {
                            effect: 'flip',
                            grabCursor: true,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                            autoplay: {
                                delay: 3000,
                                stopOnLastSlide: false,
                                disableOnInteraction: false,
                            },
                            loop:true,
                        });
                    </script>
                </td>
                <td width="14">
                </td>
                <td width="420" align="center" valign="top">
                    <div class="asidebox box-traveller" align="left">
                        <div class="hots">
                            <img alt="" src="/static/index/image/hots.png" />
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/static/index/image/index/20150806012606_20505.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/static/index/image/index/20150806012615_62355.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/static/index/image/index/20150806012630_10950.jpg">
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- Initialize Swiper -->
                        <script>
                            var swiper = new Swiper('.swiper-container', {
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                    renderBullet: function (index, className) {
                                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                                    },
                                },
                                autoplay: {
                                  delay: 3000,
                                  stopOnLastSlide: false,
                                  disableOnInteraction: false,
                                },
                            });
                        </script>
                    </div>
                    <table width="420" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="5">
                            </td>
                        </tr>
                    </table>
                    <table width="420" align="center" bgcolor="#f36800" cellpadding="0" cellspacing="0"
                           border="0" class="news">
                        <tr>
                            <td height="6">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">
                                <div align="center" style="width: 408px; margin: 0 auto; background: #FFFFFF;">
                                    <table width="368" align="center" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td height="6">
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="368" align="center" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="35" height="25">
                                                <img alt="" src="/static/index/image/news.png" />
                                            </td>
                                            <td width="302" class="font24" align="left">
                                                NEWS
                                            </td>
                                            <td width="31" align="right">
                                                <a href="<?php echo url('index/news/index'); ?>?cat=29" style="font-size: 38px;">+</a>
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="368" align="center" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td height="3">
                                            </td>
                                        </tr>
                                    </table>
                                    <?php if(!(empty($news) || (($news instanceof \think\Collection || $news instanceof \think\Paginator ) && $news->isEmpty()))): if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                    <table width="368" border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td width="280" align="left">
                                                <div style="width: 280px; overflow: hidden; height: 26px; line-height: 26px;" class="font13">
                                                    <a href="<?php echo url('index/news/details'); ?>?cat=<?php echo htmlentities($val['pid']); ?>&page=1&id=<?php echo htmlentities($val['id']); ?>" title="<?php echo htmlentities($val['title']); ?>">
                                                        <?php echo htmlentities($val['title']); ?>
                                                    </a>
                                                </div>
                                            </td>
                                            <td width="88" class="font12" align="right">
                                                <?php echo htmlentities($val['time']); ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                    <table width="368" align="center" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td height="9">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td height="6">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="30">
                </td>
            </tr>
        </table>
    </div>
</div>
<div style="clear: both;">
</div>
<table width="1000" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td height="460" align="center" valign="top">
        </td>
    </tr>
</table>
<script src="/static/index/js/modernizr.js" type="text/javascript"></script>
<div class="a22" align="center">
    <div class="a23" align="center">
        <table width="1400" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="52" align="center" valign="top">
                </td>
            </tr>
            <tr>
                <td align="center" valign="top">
                    <a href="<?php echo url('index/food/index'); ?>?cat=10">
                        <img alt="" src="/static/index/image/mepic.png" /></a>
                </td>
            </tr>
        </table>
    <?php if(!(empty($food) || (($food instanceof \think\Collection || $food instanceof \think\Paginator ) && $food->isEmpty()))): if(is_array($food) || $food instanceof \think\Collection || $food instanceof \think\Paginator): $key = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key;?>
        <div class="pro<?php echo htmlentities($key); ?>">
            <table width="290" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="center" valign="top">
                        <div class="hex" style="background: url(<?php echo htmlentities(get_file_path($val['img'])); ?>) no-repeat;">
                            <a href="<?php echo url($val['url']); ?>" title="<?php echo htmlentities($val['title']); ?>"></a>
                            <div class="corner-1">
                            </div>
                            <div class="corner-2">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="10">
                    </td>
                </tr>
                <tr>
                    <td valign="top" align="left">
                        <div class="wx_tips1 j_tips1" align="center">
                            <div class="tips_hd1">
                                <a href="<?php echo htmlentities($val['url']); ?>" title="<?php echo htmlentities($val['title']); ?>">
                                    <br />
                                    <font class="font30"><?php echo htmlentities($val['title']); ?></font></a>
                            </div>
                            <div class="tips_bd1">
                                <a href="<?php echo url($val['url']); ?>" title="<?php echo htmlentities($val['title']); ?>">
                                    <img src="/static/index/image/index/20150805165119_23331.png" alt="<?php echo htmlentities($val['alt']); ?>" title="<?php echo htmlentities($val['title']); ?>" /></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php endif; ?>

    </div>
</div>
<div class="a13" align="center">
    <div class="a18" align="center">
        <table width="1000" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="30" align="center" valign="top">
                </td>
            </tr>
        </table>
        <table width="1000" align="center" cellpadding="0" cellspacing="0" border="0" style="border-bottom: 2px solid #ffffff;">
            <tr>
                <td width="489" height="30" align="left">
                    <img alt="店铺实拍" src="/static/index/image/nice.png" />
                </td>
                <td width="511" align="left" class="font24 bais">

                </td>
            </tr>
            <tr>
                <td height="10" colspan="2">
                </td>
            </tr>
            <tr>
                <td height="30" colspan="2" class="font24 bais" align="left">
                    店铺实拍,成功其实并不难
                </td>
            </tr>
            <tr>
                <td height="5" colspan="2">
                </td>
            </tr>
        </table>
        <table width="1000" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="20" align="center" valign="top">
                </td>
            </tr>
        </table>
        <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
            <?php if(!(empty($store) || (($store instanceof \think\Collection || $store instanceof \think\Paginator ) && $store->isEmpty()))): if(is_array($store) || $store instanceof \think\Collection || $store instanceof \think\Paginator): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <td width="193" align="center" valign="top" height="100" bgcolor="#FFFFFF">
                    <div align="center">
                        <table width="170" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr><td height="5"></td></tr>
                            <tr>
                                <td align="center" valign="top">
                                    <a href="<?php echo url($val['url']); ?>" title="<?php echo htmlentities($val['title']); ?>">
                                        <img alt="<?php echo htmlentities($val['alt']); ?>" src="<?php echo htmlentities(get_file_path($val['img'])); ?>" title="<?php echo htmlentities($val['title']); ?>" />
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td height="10"></td>
                            </tr>
                        </table>
                        <table width="145" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td height="20" class="font16 jhs"></td>
                            </tr>
                            <tr>
                                <td height="8"></td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <div class="bhs">
                                        <a href="<?php echo url($val['url']); ?>" title="<?php echo htmlentities($val['title']); ?>"><?php echo htmlentities($val['title']); ?></a>
                                    </div>
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                            <tr>
                                <td align="left" class="font12" style="line-height: 18px;">
                                    <?php echo htmlentities($val['desc']); ?>
                                </td>
                            </tr>
                            <tr><td height="10"></td></tr>
                        </table>
                    </div>
                </td>
                <td width="76"></td>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>
            </tr>
        </table>
    </div>
</div>
<div class="a1" align="center">
    <div align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="50">
                </td>
            </tr>
        </table>
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="209">
                    <div style="width: 1100px; height: 230px;">
                        <div class="index_cp pdiv" align="center">
                            <div class="rollBox">
                                <div class="LeftBotton"></div>
                                <div class="Cont" id="ISL_Cont">
                                    <!-- Swiper .swiper-button-prev, .swiper-button-next-->
                                    <div class="swiper-container2">
                                        <div class="swiper-wrapper">
                                        <?php if(!(empty($roll) || (($roll instanceof \think\Collection || $roll instanceof \think\Paginator ) && $roll->isEmpty()))): if(is_array($roll) || $roll instanceof \think\Collection || $roll instanceof \think\Paginator): $i = 0; $__LIST__ = $roll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                            <div class="swiper-slide">
                                                <a href="<?php echo htmlentities($val['url']); ?>" target="_blank">
                                                    <img src="<?php echo htmlentities(get_file_path($val['img'])); ?>" title="<?php echo htmlentities($val['title']); ?>" alt="<?php echo htmlentities($val['alt']); ?>" height="209"
                                                     width="301" />
                                                </a>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="RightBotton"></div>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper('.swiper-container2', {
                                        slidesPerView: 3,
                                        direction: getDirection(),
                                        navigation: {
                                            nextEl: '.RightBotton',
                                            prevEl: '.LeftBotton',
                                        },
                                        on: {
                                            resize: function () {
                                                swiper.changeDirection(getDirection());
                                            }
                                        },
                                        autoplay: {
                                          delay: 3000,
                                          stopOnLastSlide: false,
                                          disableOnInteraction: false,
                                        },
                                        loop : true,
                                    });

                                    function getDirection() {
                                        var windowWidth = window.innerWidth;
                                        var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

                                        return direction;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<!--底部-->
﻿<table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td height="50">
        </td>
    </tr>
</table>
<div class="adb" align="center">
    <div class="a18" align="center" style="position: relative;">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="left" height="50" class="bais font16 ">
                    <?php if(!(empty($nav_f) || (($nav_f instanceof \think\Collection || $nav_f instanceof \think\Paginator ) && $nav_f->isEmpty()))): if(is_array($nav_f) || $nav_f instanceof \think\Collection || $nav_f instanceof \think\Paginator): $key = 0; $__LIST__ = $nav_f;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($key % 2 );++$key;?>
                    <a href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                    <?php if($key < count($nav_f)){ ?> | <?php } ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
</div>



<div class="a1" align="center" style="background: #484848;">
    <div class="a18" align="center">
        <table width="1024" align="center" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="30" colspan="5">
                </td>
            </tr>
            <tr>
                <td width="189" align="center" valign="top">
                    <div align="center">
                        <img alt="关注微博" src="<?php echo htmlentities(get_file_path($configuration['wb_img'])); ?>" title="关注微博" />
                        <div class="font14 bais" style="padding-top: 10px;">
                            关注微博</div>
                    </div>
                </td>
                <td width="175" align="center" valign="top">
                    <div align="center">
                        <img alt="关注微信" src="<?php echo htmlentities(get_file_path($configuration['wx_img'])); ?>" title="关注微信" />
                        <div class="font14 bais" style="padding-top: 10px;">
                            关注微信</div>
                    </div>
                </td>
                <td width="20">
                </td>
                <td width="310" align="left" valign="top" colspan="2">
                    <div class="font16 bais" style=" font-size:16px">
                        一纸馋总部</div>
                    <div class="font12 bais" style="padding-top: 15px; line-height: 26px;font-size:16px">
                        客服电话：<?php echo htmlentities($configuration['mobile']); ?><br />
                        400热线：<?php echo htmlentities($configuration['tel']); ?><br />
                        总部地址：<?php echo htmlentities($configuration['address']); ?><br />
                        投资有风险  选择需谨慎
                    </div>
                </td>
                <td width="20">
                </td>
                <td>
                    <div class="lyzhe" >
                        <div class="ly1">
                            <span>姓名：</span>
                            <input type="text" name="" id="txtName" value=""><br />
                        </div>
                        <div class="ly1">
                            <span>电话：</span>
                            <input type="text" name="" id="Phone" value=""><br />
                        </div>
                        <div class="ly1">
                            <span>留言：</span>
                            <textarea name="" rows="" cols="" id="txtContent"></textarea>
                        </div>
                        <input type="button" name="" id="tjly" value="在线申请" class="b4" onclick="FromSubmit2()">
                    </div>
                </td>
            </tr>
            <tr style="    float: left; width: 326%;margin-top: -116px;margin-left: 67px;">
                <td align="left" colspan="5" class="font14 bais" style="">
                    2014 ©成都餐协餐饮管理有限公司. ALL rights reservd. <a href="http://www.beian.miit.gov.cn/">蜀ICP备12020698号-3</a>
                </td>
            </tr>
            <tr style="    float: left;width: 126%; margin-top: -97px;margin-left: 65px;">
                <td height="30" colspan="5" align="center" class="font14 bais">
                    友情链接： <a href="http://www.1zhichan.com" target="_blank">纸上烤肉</a> &nbsp; &nbsp;
                    <script type="text/javascript">
                        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F7df9947f924dba11b94fe85fad935d1d' type='text/javascript'%3E%3C/script%3E"));
                    </script>

                    <script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10132959/3";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
                </td>
            </tr>
            <tr>
                <td height="20" colspan="5">
                </td>
            </tr>
        </table>
    </div>
</div>

<div id="back-to-top" style="display: block;">
    <a href="#top">
        <img alt="" src="/static/index/image/xtop.png" />
    </a>
</div>

<div id="kf_nav">
    <ul>
        <li class="kf_2"><a class="xy_53" href="https://tb.53kf.com/code/client/10132959/3"
                            target="_blank">
            <img alt="" src="/static/index/image/kf-1.jpg" /></a></li>
        <li class="qq"><a href="http://wpa.qq.com/msgrd?V=1&Uin=1434414081&Site=一纸馋烤肉&Menu=yes" target="_blank">
            <img alt="" src="/static/index/image/kf-2.jpg" /></a></li>
        <li class="tel"><a href="https://tb.53kf.com/code/client/10132959/3">
            <img alt="" src="/static/index/image/kf-3.jpg" /></a></li>
        <li class="dw"><a href="https://tb.53kf.com/code/client/10132959/3"
                          target="_blank">
            <img alt="" src="/static/index/image/kf-4.jpg"/></a></li>
    </ul>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#back-to-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $("#back-to-top").fadeIn(500);
                }
                else {
                    $("#back-to-top").fadeOut(500);
                }
            });
            $("#back-to-top").click(function () {
                $('body,html').animate({ scrollTop: 0 }, 100);
                return false;
            });
        });
    });
</script>

<script>
    function FromSubmit2() {
        $("#tjly").attr("disabled", "disabled");
        var name = $("#txtName").val();
        var phone = $("#Phone").val();
        var content = $("#txtContent").val();
        if (phone.length == 0) {
            alert("请填写必填信息");
            $("#tjly").removeAttr("disabled");
            return false;
        }
        else if (phone.length > 11 || phone.length < 7) {
            alert("请填写正确手机号码");
            $("#tjly").removeAttr("disabled");
            return false;
        }
        $.ajax({
            url:"<?php echo url('index/Home/insert_message'); ?>",
            type:"POST",
            data:{
                name:name,
                phone:phone,
                content:content,
            },
            success:function(res){
                //console.log(res);
                if(res.code == 1){
                    alert(res.msg);
                    history.go(0);
                }else{
                    alert(res.msg);
                    $("#tjly").removeAttr("disabled");
                }
            },
            error: function(message) {
                //console.log(message);
                alert(message);
                $("#tjly").removeAttr("disabled");
            }
        });
    }
</script>


</body>
</html>