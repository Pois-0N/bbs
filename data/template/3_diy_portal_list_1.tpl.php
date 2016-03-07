<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_1');
block_get('253,254,255,256,257,258,259');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?>
</div>
</div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl deanbox">
<div class="deanwpl"><?php echo adshow("articlelist/mbm hm/1");?><?php echo adshow("articlelist/mbm hm/2");?><!--[diy=listcontenttop]--><div id="listcontenttop" class="area"></div><!--[/diy]-->
<div class="bm">
<div class="bm_h cl deanfff deanborder">
<?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="y xi2 rss" target="_blank" title="RSS">订阅</a><?php } ?>

<h1 class="xs2"><?php echo $cat['catname'];?></h1>
</div>

            <div class="deanpiclist top15">
            	<ul>
                <?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?><?php $article_url = fetch_article_url($value);?>                    <li class="deanshadow deanw714 deanborder deanfff">
                        <div class="deanpiclic">
                            <div class="deanpiclicl">
                    			<?php if($value['pic']) { ?><a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="220" height="170" /></a><?php } else { ?><a href="<?php echo $article_url;?>" target="_blank"><img src="http://bbs.ejiandai.com/bbs/template/df_meizu_141003/deancss/default.png" alt="<?php echo $value['title'];?>" width="220" height="170" /></a><?php } ?>
                    			<a href="<?php echo $article_url;?>" target="_blank" class="deanhover"></a>
                			</div>
                            <div class="deanpiclicr">
                                <h2><a href="<?php echo $article_url;?>" target="_blank" class="xi2" <?php echo $highlight;?>><?php echo $value['title'];?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?></h2>
                                <div class="clear"></div>
                                <div class="deanpicsummary"><?php echo $value['summary'];?></div>
                                <div class="clear"></div>
                                <div class="deanliicon">
                                    <div class="deanicontype"><?php if($value['catname'] && $cat['subs']) { ?><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xi2"><?php echo $value['catname'];?></a><?php } ?></div>
                                    <div class="deanicondate"><?php echo $value['dateline'];?></div>
                                    <div class="deaniconcomment"><?php $query = DB::query("SELECT t1.commentnum from ".DB::table('portal_article_count')." t1 inner join ".DB::table('portal_article_title')." t2 on t1.aid=t2.aid WHERE t2.aid=$value[aid]"); $dean = DB::fetch($query);echo $dean['commentnum'];?></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                                <a href="<?php echo $article_url;?>" target="_blank" class="deanread">开始阅读</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                	
                    <?php } ?>
                </ul>
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
            </div>
<!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
</div><?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?><?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->

</div>
<div class="deanwpr">
    	
        <div class="deanwprc deanshadow deanborder deanfff">
            <div class="deanp14">
                <div class="deanqd"><?php if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" >发布文章</a>
<?php } ?></div>
                <div class="clear"></div>
                
                <?php if($cat['subs']) { ?>
                <div class="deanforumhotr  top15" >
                    <h2><span>下级分类</span></h2>
                    <div class="clear"></div>
                    <ul>
                        <?php $i = 1;?>                        <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?>                        <?php if($i != 1) { } ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li><?php $i--;?>                        <?php } ?>
                        <div class="clear"></div>
                    </ul>
                </div>
                <script type="text/javascript">
                    jq(".deanforumhotr ul li:odd").css("border-left","1px solid #ddd");
                </script>
                <?php } ?>
                <div class="clear"></div>
                <div class="deantabs top25">
                    <ul class="deantabname">
                        <li class="cur">企易贷</li>
                        <li>车易贷</li>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                    <ul class="deantabc top15">
                        <li style="display:block;"><!--[diy=deantabc1]--><div id="deantabc1" class="area"><div id="frameenzhng" class="frame move-span cl frame-1"><div id="frameenzhng_left" class="column frame-1-c"><div id="frameenzhng_left_temp" class="move-span temp"></div><?php block_display('253');?></div></div></div><!--[/diy]--></li>
                        <li><!--[diy=deantabc2]--><div id="deantabc2" class="area"><div id="framePU955V" class="frame move-span cl frame-1"><div id="framePU955V_left" class="column frame-1-c"><div id="framePU955V_left_temp" class="move-span temp"></div><?php block_display('254');?></div></div></div><!--[/diy]--></li>
                    </ul>
                </div>
                <div class="deanactive top25">
                    <h2>最新活动</h2>
                    <div class="clear"></div>
                    <ul><!--[diy=deanactive]--><div id="deanactive" class="area"><div id="framerAmRCJ" class="frame move-span cl frame-1"><div id="framerAmRCJ_left" class="column frame-1-c"><div id="framerAmRCJ_left_temp" class="move-span temp"></div><?php block_display('255');?></div></div></div><!--[/diy]--></ul>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="deanrank top25">
                    <h2>文章排行榜</h2>
                    <div class="clear"></div>
                    <ul class="deanrankc"><!--[diy=deanrank]--><div id="deanrank" class="area"><div id="frameN4z4s4" class="frame move-span cl frame-1"><div id="frameN4z4s4_left" class="column frame-1-c"><div id="frameN4z4s4_left_temp" class="move-span temp"></div><?php block_display('256');?></div></div></div><!--[/diy]--></ul>
                </div>
                <div class="clear"></div>
                <div class="deannewdp top25">
                    <h2>文章热图</h2>
                    <div class="clear"></div>
                    <div class="deannewdpc"><!--[diy=deannewdpc]--><div id="deannewdpc" class="area"><div id="frameTMG7aX" class="frame move-span cl frame-1"><div id="frameTMG7aX_left" class="column frame-1-c"><div id="frameTMG7aX_left_temp" class="move-span temp"></div><?php block_display('257');?></div></div></div><!--[/diy]--></div>
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
                        <li style="display:block;"><!--[diy=deantabc3]--><div id="deantabc3" class="area"><div id="frameY9V1mK" class="frame move-span cl frame-1"><div id="frameY9V1mK_left" class="column frame-1-c"><div id="frameY9V1mK_left_temp" class="move-span temp"></div><?php block_display('258');?></div></div></div><!--[/diy]--></li>
                        <li style="text-align:center;"><!--[diy=deantabc4]--><div id="deantabc4" class="area"><div id="frameEgQ22g" class="frame move-span cl frame-1"><div id="frameEgQ22g_left" class="column frame-1-c"><div id="frameEgQ22g_left_temp" class="move-span temp"></div><?php block_display('259');?></div></div></div><!--[/diy]--></li>
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

<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>