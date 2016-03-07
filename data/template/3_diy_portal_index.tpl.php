<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
block_get('401,402,403,404,405,406,407,408,409,410,411,412,413,414');?>
 <?php include template('common/header'); ?><style id="diy_style" type="text/css"></style>
<!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
<div class="deanwp top15">
    <div class="deanwpl">
        <div class="deanhdp deanshadow deanw714 deanborder deanfff">
            <div class="deanhdpc">
                <div class="deanhdpbig"><!--[diy=diydeanzdy]--><div id="diydeanzdy" class="area"><div id="frameZL28HL" class="frame move-span cl frame-1"><div id="frameZL28HL_left" class="column frame-1-c"><div id="frameZL28HL_left_temp" class="move-span temp"></div><?php block_display('401');?></div></div></div><!--[/diy]--></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="deanpiclist top15">
            <ul><!--[diy=deanpiclist]--><div id="deanpiclist" class="area"><div id="frameDh48vU" class="frame move-span cl frame-1"><div id="frameDh48vU_left" class="column frame-1-c"><div id="frameDh48vU_left_temp" class="move-span temp"></div><?php block_display('402');?></div></div></div><!--[/diy]--></ul>
        </div>
        <script type="text/javascript">
        	jq(".deanpiclist ul li").each(function(s){
jq(".deanpiclicl").hover(
function(){
jq(this).children(".deanhover").show();
},
function(){
jq(this).children(".deanhover").hide();
})
})
        </script>
        <div class="clear"></div>
        <div class="deanforumhot deanshadow deanw714 deanborder deanfff top15">
            <div class="deanforumhotc">
                <div class="deanforumtitle">
                    <h2>社区热帖</h2>
                    <ul><!--[diy=deanforumtitle]--><div id="deanforumtitle" class="area"><div id="frameN8qdA1" class="frame move-span cl frame-1"><div id="frameN8qdA1_left" class="column frame-1-c"><div id="frameN8qdA1_left_temp" class="move-span temp"></div><?php block_display('403');?></div></div></div><!--[/diy]--> 
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
                <ul class="deanforumhotlists deanxz">
                	<!--[diy=deanforumhotlists]--><div id="deanforumhotlists" class="area"><div id="frameaa981t" class="frame move-span cl frame-1"><div id="frameaa981t_left" class="column frame-1-c"><div id="frameaa981t_left_temp" class="move-span temp"></div><?php block_display('404');?></div></div></div><!--[/diy]-->
                </ul>
                <script type="text/javascript">
                	jq(".deanforumhotlists li:last").css("border-bottom","0");
                </script>
            </div>
        </div>
    </div>
    <div class="deanwpr">
        <div class="deanwprc deanshadow deanborder deanfff">
            <div class="deanp14">
                <div class="deanqd"><a id="deanpost" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">发布主题</a></div>
                <div class="clear"></div>
                <div class="deanforumhotr top15">
                    <h2>热门版块</h2>
                    <div class="clear"></div>
                    <ul><!--[diy=deanforumhotr]--><div id="deanforumhotr" class="area"><div id="frameO2Gn25" class="frame move-span cl frame-1"><div id="frameO2Gn25_left" class="column frame-1-c"><div id="frameO2Gn25_left_temp" class="move-span temp"></div><?php block_display('405');?></div></div></div><!--[/diy]-->
                        <div class="clear"></div>
                    </ul>
                </div>
                <script type="text/javascript">
                    jq(".deanforumhotr ul li:odd").css("border-left","1px solid #ddd");
                </script>
                <div class="clear"></div>
                <div class="deanactive top25">
                    <h2>最新资讯</h2>
                    <div class="clear"></div>
                    <ul><!--[diy=deanactive]--><div id="deanactive" class="area"><div id="framev746At" class="frame move-span cl frame-1"><div id="framev746At_left" class="column frame-1-c"><div id="framev746At_left_temp" class="move-span temp"></div><?php block_display('406');?></div></div></div><!--[/diy]--></ul>
                </div>
                <div class="clear"></div>
                <div class="deantabs top25">
                    <ul class="deantabname">
                        <li class="cur">企易贷</li>
                        <li>车易贷</li>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                    <ul class="deantabc top15">
                        <li style="display:block;"><!--[diy=deantabc1]--><div id="deantabc1" class="area"><div id="framebtV68T" class="frame move-span cl frame-1"><div id="framebtV68T_left" class="column frame-1-c"><div id="framebtV68T_left_temp" class="move-span temp"></div><?php block_display('407');?></div></div></div><!--[/diy]--></li>
                        <li><!--[diy=deantabc2]--><div id="deantabc2" class="area"><div id="frameeC7YYD" class="frame move-span cl frame-1"><div id="frameeC7YYD_left" class="column frame-1-c"><div id="frameeC7YYD_left_temp" class="move-span temp"></div><?php block_display('408');?></div></div></div><!--[/diy]--></li>
                    </ul>
                    
                </div>
                
                <div class="clear"></div>
                <div class="deanrank top25">
                    <h2>排行榜</h2>
                    <div class="clear"></div>
                    <ul class="deanrankc"><!--[diy=deanrank]--><div id="deanrank" class="area"><div id="frameG18GGU" class="frame move-span cl frame-1"><div id="frameG18GGU_left" class="column frame-1-c"><div id="frameG18GGU_left_temp" class="move-span temp"></div><?php block_display('409');?></div></div></div><!--[/diy]--></ul>
                </div>
                <div class="clear"></div>
                <div class="deannewdp top25">
                    <h2>随手拍</h2>
                    <div class="clear"></div>
                    <div class="deannewdpc"><!--[diy=deannewdpc]--><div id="deannewdpc" class="area"><div id="framet2WEAZ" class="frame move-span cl frame-1"><div id="framet2WEAZ_left" class="column frame-1-c"><div id="framet2WEAZ_left_temp" class="move-span temp"></div><?php block_display('410');?></div></div></div><!--[/diy]--></div>
                </div>
                <div class="clear"></div>
                <div class="deannewzd top25">
                    <h2>新手学院</h2>
                    <div class="clear"></div>
                    <div class="deannewzdc"><!--[diy=deannewzdc]--><div id="deannewzdc" class="area"><div id="frameqhWp9M" class="frame move-span cl frame-1"><div id="frameqhWp9M_left" class="column frame-1-c"><div id="frameqhWp9M_left_temp" class="move-span temp"></div><?php block_display('411');?></div></div></div><!--[/diy]--></div>
                    <div class="clear"></div>
                    <ul class="top15"><!--[diy=deannewzdc1]--><div id="deannewzdc1" class="area"><div id="frameqnv7GT" class="frame move-span cl frame-1"><div id="frameqnv7GT_left" class="column frame-1-c"><div id="frameqnv7GT_left_temp" class="move-span temp"></div><?php block_display('412');?></div></div></div><!--[/diy]--></ul>
                </div>
<div class="clear"></div>
                
                <div class="deantabs top25">
                    <ul class="deantabname">
                        <li class="cur">社区微博</li>
                        <li>官方微信</li>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                    <ul class="deantabc top15">
                        <li style="display:block;"><!--[diy=deantabc3]--><div id="deantabc3" class="area"><div id="framek6W9bY" class="frame move-span cl frame-1"><div id="framek6W9bY_left" class="column frame-1-c"><div id="framek6W9bY_left_temp" class="move-span temp"></div><?php block_display('413');?></div></div></div><!--[/diy]--></li>
                        <li style="text-align:center;"><!--[diy=deantabc4]--><div id="deantabc4" class="area"><div id="framefJVssS" class="frame move-span cl frame-1"><div id="framefJVssS_left" class="column frame-1-c"><div id="framefJVssS_left_temp" class="move-span temp"></div><?php block_display('414');?></div></div></div><!--[/diy]--></li>
                    </ul>
                </div>
            
                <script type="text/javascript">
                    jq(".deantabname li").each(function(s){
                        jq(this).hover(function(){
                            jq(this).addClass("cur").siblings().removeClass("cur");
                            jq(".deantabc li").eq(s).show().siblings().hide();
                        })
                    })
                </script>
            </div>
            
        </div>
    </div>
    <div class="clear"></div>
 </div><?php include template('common/footer'); ?>