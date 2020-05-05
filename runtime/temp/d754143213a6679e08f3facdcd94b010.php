<?php /*a:4:{s:72:"F:\Project\DolphinPHPV1.4.5\application\index\view\project\analysis.html";i:1588525267;s:67:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\base.html";i:1588518184;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\header.html";i:1588210734;s:69:"F:\Project\DolphinPHPV1.4.5\application\index\view\public\footer.html";i:1588521994;}*/ ?>
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
    
<style type="text/css">
    /*自助投资分析*/
    .zzfx-wrap
    {
        height: 463px;
        background-color: White;
        color: Black;
    }
    .zzfx
    {
        width: 620px;
        margin: auto;
    }
    .zzfx-bt
    {
        font: normal 14px 微软雅黑;
        height: 59px;
        padding-top: 20px;
    }
    .zzfx-bt p
    {
        font-size: 30px;
        float: left;
    }
    .zzfx-bt span
    {
        font-size: 12px;
        display: block;
        margin: 0px;
        width: 320px;
        float: left;
        margin-left: 30px;
    }
    .zzfx-tab
    {
        width: 620px;
        margin-top: 20px;
    }
    .zzfx-table
    {
        width: 100%;
        border: 1px solid #3a3837;
        border-bottom: none;
        border-right: none;
    }
    .zzfx-table tr td.f16
    {
        font: normal 24px 微软雅黑;
        color: Black;
        height: 45px;
    }
    .zzfx-table tr td
    {
        height: 40px;
        width: 50%;
        border-bottom: 1px solid #3a3837;
        border-right: 1px solid #3a3837;
        padding-left: 20px;
    }
    .zzfx-table tr td span
    {
        display: inline-block;
        width: 90px;
        text-align: right;
        font: normal 12px 微软雅黑;
        margin-right: 10px;
    }
    .tzys-select, .kdcs-select, .kdcs-select1, .kdjy-select, .dm-select, .mdmj-select, .mdwz-select
    {
        width: 172px;
        border-radius: 3px;
        border: 1px solid #979797;
        height: 25px;
        padding: 2px 2px 2px 0;
    }

    .kdcs-select, .kdcs-select1
    {
        width: 80px;
    }
    .kdcs-select1
    {
        margin-left: 12px;
    }
    .kdjy-select, .dm-select
    {
        width: 70px;
    }
    .align
    {
        vertical-align: middle;
        margin-top: -2px;
        margin-right: 5px;
    }
    .mdwz-select, .mdmj-select
    {
        width: 100px;
    }
    .lxfs-text
    {
        width: 162px;
        height: 25px;
        line-height: 25px;
        border: 1px solid #979797;
        border-radius: 3px;
        padding-left: 10px;
    }
    .tjfxbb-btn
    {
        margin: 20px 0 0 0;
        overflow: hidden;
    }
    .tjfxbb-btn span
    {
        float: left;
        font: normal 14px 微软雅黑;
        display: inline-block;
        margin: 0px;
        height: 49px;
        line-height: 49px;
    }
    .tjfxbb-submit
    {
        width: 148px;
        height: 42px;
        border: 0 none;
        background: url(/static/index/image/tjfxbb-btn.jpg) no-repeat 0 0;
        text-align: center;
        cursor: pointer;
        font: bold 16px/32px 微软雅黑;
        margin-top: 0px;
    }
    .tjfxbb-submit:hover
    {
        background: url(/static/index/image/tjfxbb-btn.jpg) no-repeat 0 -42px;
    }

    #kaidianchengs .dmfg-select
    {
        margin: 0px;
        width: 70px;
    }
    .fixed
    {
        font: normal 16px 微软雅黑;
        color: #fff;
        height: 63px;
        line-height: 63px;
        background: #782818;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
        z-index: 9999;
    }
    .fixed span
    {
        font: normal 24px Arial, Helvetica, sans-serif;
        color: #ffae00;
        vertical-align: middle;
    }
    .w10001
    {
        width: 1000px;
        margin: 0 auto;
    }
</style>
<script src="/static/index/js/jquery.xdomainrequest.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function tjs() {
        var txtYs = $("#selYs").val();
        if (txtYs == "0") {
            txtYs = "未选择";
        }
        var txtFg = $("#selFg").val();
        if (txtFg == "0") {
            txtFg = "未选择";
        }
        //开店地址
        var sf = $("#Select1").val();
        if (sf == "未选择") {
            sf = "未选择";
        }
        var cs = $("#Select2").val();
        if (cs == "未选择") {
            cs = "未选择";
        }
        var txtKdjy = $("#selJy").val();
        var txtMd = $("#selMd").val();
        var txtMdmj = $("#selMdmj").val();
        var txtMdwz = $("#selWz").val();
        var txtIsZl = '';
        if ($('ckbIsZl').is(":checked")) {
            txtIsZl = 1;
        } else {
            txtIsZl = 0;
        }
        var txtQQ = $("#txtQQ").val();
        var txtPhone = $("#txtPhone").val();
        if (txtPhone == "") {
            alert("请填写联系电话");
            return false;
        }
        $("#tijiao").attr("disabled", "disabled");
        var budget = txtYs;//预算
        var address = sf + "-" + cs;//地址
        var store = txtMd;//是否有门店
        var area = txtMdmj;//门店面积
        var position = txtMdwz;//门店位置
        var style = txtFg;//风格
        var experience = txtKdjy;//是否有开店经验
        var qq = txtQQ;
        var phone = txtPhone;//联系方式
        if (phone.length == 0) {
            alert("请填写必填信息");
            return false;
        }
        else if (phone.length > 11 || phone.length < 7) {
            alert("请填写正确手机号码");
            return false;
        }
        $.ajax({
            url:"<?php echo url('index/Project/insert_message'); ?>",
            type:"POST",
            data:{
                budget:budget,//预算
                address:address,//地址
                store:store,//是否有门店
                area:area,//面积
                position:position,//门店位置
                style:style,//风格
                experience:experience,//是否有开店经验
                qq:qq,
                data:txtIsZl,//是否接收资料
                tel:phone,//联系方式
            },
            success:function(res){
                //console.log(res);
                if(res.code == 1){
                    alert(res.msg);
                    history.go(0);
                }else{
                    alert(res.msg);
                    $("#tijiao").removeAttr("disabled");
                }
            },
            error: function(message) {
                //console.log(message);
                alert(message);
                $("#tijiao").removeAttr("disabled");
            }
        });
    }

</script>

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


<div class="a1" align="center">
    <div class="a15" align="center">
        <table width="910" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td height="50">
                </td>
            </tr>
            <tr>
                <td>
                    <div align="left" class="font14" style="line-height: 0px;">
                        <div class="cnr">
                            <div class="zzfx-wrap">
                                <!-- 自助投资分析 -->
                                <div class="zzfx">
                                    <div class="zzfx-bt">
                                        <p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;自助投资分析</p>
                                        <span>（我们收到您提交的分析表后，一纸馋专业餐饮投资顾问将尽快与您取得联系，为您提供最优开店方案）</span>
                                    </div>
                                    <div class="zzfx-tab">
                                        <form name="reg2_form" action="/sumitmsg.aspx" id="reg2_form" method="post" target="_top">
                                            <table class="zzfx-table" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td colspan="2" class="f16" align="center">
                                                        一纸馋开店投资分析表
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>投资预算</span><select id="selYs" class="tzys-select">
                                                        <?php if(!(empty($budget) || (($budget instanceof \think\Collection || $budget instanceof \think\Paginator ) && $budget->isEmpty()))): if(is_array($budget) || $budget instanceof \think\Collection || $budget instanceof \think\Paginator): $i = 0; $__LIST__ = $budget;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo htmlentities($val); ?>"><?php echo htmlentities($val); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <?php endif; ?>
                                                    </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                    <td>
                                                        <span>喜欢的店面风格</span><select id="selFg" class="dmfg-select">
                                                        <?php if(!(empty($style) || (($style instanceof \think\Collection || $style instanceof \think\Paginator ) && $style->isEmpty()))): if(is_array($style) || $style instanceof \think\Collection || $style instanceof \think\Paginator): $i = 0; $__LIST__ = $style;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo htmlentities($val); ?>"><?php echo htmlentities($val); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <?php endif; ?>
                                                    </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div id="kaidianchengs">
                                                            <span>开店城市</span>
                                                            <select id="Select1" class="dmfg-select">
                                                                <option value="四川">四川</option>
                                                                <option value="北京">北京</option>
                                                                <option value="上海">上海</option>
                                                                <option value="天津">天津</option>
                                                                <option value="重庆">重庆</option>
                                                                <option value="贵州">贵州</option>
                                                                <option value="云南">云南</option>
                                                                <option value="西藏">西藏</option>
                                                                <option value="河南">河南</option>
                                                                <option value="湖北">湖北</option>
                                                                <option value="湖南">湖南</option>
                                                                <option value="广东">广东</option>
                                                                <option value="内蒙古">内蒙古</option>
                                                                <option value="江苏">江苏</option>
                                                                <option value="浙江">浙江</option>
                                                                <option value="安徽">安徽</option>
                                                                <option value="陕西">陕西</option>
                                                                <option value="甘肃">甘肃</option>
                                                                <option value="青海">青海</option>
                                                                <option value="宁夏">宁夏</option>
                                                                <option value="新疆">新疆</option>
                                                                <option value="河北">河北</option>
                                                                <option value="山西">山西</option>
                                                                <option value="福建">福建</option>
                                                                <option value="江西">江西</option>
                                                                <option value="山东">山东</option>
                                                                <option value="辽宁">辽宁</option>
                                                                <option value="吉林">吉林</option>
                                                                <option value="黑龙江">黑龙江</option>
                                                                <option value="海南">海南</option>
                                                            </select>&nbsp;&nbsp;
                                                            <select id="Select2" class="dmfg-select">
                                                                <option value="市辖区">市辖区</option>
                                                                <option value="县">县</option>
                                                            </select><font color="red">&nbsp;*</font>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>是否有开店经验</span>
                                                        <select id="selJy" class="kdjy-select">
                                                            <option value="0">否</option>
                                                            <option value="1">是</option>
                                                        </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>是否有门店</span><select id="selMd" class="dm-select">
                                                        <option value="0">否</option>
                                                        <option value="1">是</option>
                                                    </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                    <td>
                                                        <span>接收开店资料</span><input id="ckbIsZl" type="checkbox" value="" class="align" name="checkbox"
                                                                                  checked="checked" />是
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>门店面积</span><select id="selMdmj" class="mdmj-select">
                                                        <?php if(!(empty($area) || (($area instanceof \think\Collection || $area instanceof \think\Paginator ) && $area->isEmpty()))): if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo htmlentities($val); ?>"><?php echo htmlentities($val); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <?php endif; ?>
                                                    </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                    <td>
                                                        <span>接收资料QQ</span><input id="txtQQ" type="text" value="" class="lxfs-text" /><font
                                                            color="red">&nbsp;*</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>门店位置</span><select id="selWz" class="mdwz-select">
                                                        <?php if(!(empty($position) || (($position instanceof \think\Collection || $position instanceof \think\Paginator ) && $position->isEmpty()))): if(is_array($position) || $position instanceof \think\Collection || $position instanceof \think\Paginator): $i = 0; $__LIST__ = $position;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                                        <option value="<?php echo htmlentities($val); ?>"><?php echo htmlentities($val); ?></option>
                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <?php endif; ?>
                                                    </select><font color="red">&nbsp;*</font>
                                                    </td>
                                                    <td>
                                                        <span>联系方式</span><input id="txtPhone" type="text" value="" class="lxfs-text" /><font
                                                            color="red">&nbsp;*</font>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="tjfxbb-btn">
                                                <span>电话咨询：</span><span style="font-size: 30px;"><font color="red">&nbsp;&nbsp;<?php echo htmlentities($configuration['tel']); ?>&nbsp;&nbsp;</font></span>
                                                <input type="button" value="" class="tjfxbb-submit" onclick="tjs()" id="tijiao" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- 自助投资分析 end -->
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="30">
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