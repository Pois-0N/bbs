<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if($_G['uid']) { ?>
<div class="deanloginin">
<div class="deanavartop"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>
    <div class="deanusername"><strong class="vwmy<?php if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) { ?> qq<?php } ?>"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a></strong></div>
    <div class="deantxs">
    	<a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?> >����
                <?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if(empty($_G['cookie']['ignore_notice']) && ($_G['member']['newpm'] || $_G['member']['newprompt_num']['follower'] || $_G['member']['newprompt_num']['follow'] || $_G['member']['newprompt'])) { } ?>
    </div>
    <div class="deaninfo">
    	<div class="deanhove" title="����"></div>
        <div class="clear"></div>
        <div class="deanmessage">
        	<ul>
                <li><a href="home.php?mod=spacecp">����</a></li>
                <li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ</a></li>
                <?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><li><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">�����е�����</a></li><?php } ?>
                <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a></li>
<?php } ?>
                <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?><li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a></li><?php } ?>
                <?php if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?><li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">��ƽ̨</a></li><?php } ?>
                <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?><li><a href="admin.php" target="_blank">��������</a></li><?php } ?>
<li><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: <?php echo $_G['member']['credits'];?></a></li>
                <li><a href="home.php?mod=spacecp&amp;ac=usergroup" ><?php echo $_G['group']['grouptitle'];?></a></li>
            </ul>
        </div>
    </div>
    <div class="deanexit"  title="�˳���½"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"></a></div>
    <div class="clear"></div>
</div>

<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
    <div class="deanmessage">
        <li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">����</a></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a></li>
    </div>
<?php } elseif(!$_G['connectguest']) { ?>
<ul class="deanunlogin">
        <!--li class="deanqqlogin"><a href="connect.php?mod=login&amp;op=init&amp;referer=index.php&amp;statfrom=login_simple"></a></li-->
        <li class="deanlogin"><a href="https://www.ejiandai.com/login?redirectURL=%2Faccount%2Fforum">��¼</a></li>
        <li class="deanregister"><a href="https://www.ejiandai.com/register" >ע��</a></li>
        <div class="clear"></div>
    </ul>
<?php } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a>
<span class="pipe">|</span>�û���: <?php echo $_G['group']['grouptitle'];?>
</p>
</div>
<?php } ?>
<script type="text/javascript">
jq(".deanhove").hover(
function(){
jq(this).addClass("deanhoved");
jq(this).siblings(".deanmessage").show();
},
function(){
jq(this).removeClass("deanhoved");
jq(this).siblings(".deanmessage").hide();
})
jq(".deanmessage").hover(
function(){
jq(this).siblings(".deanhove").addClass("deanhoved");
jq(this).show();
},
function(){
jq(this).siblings(".deanhove").removeClass("deanhoved");
jq(this).hide();
})
</script>