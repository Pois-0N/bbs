<?PHP exit('10��ɫС�������� GBK ABģ����ȫ���׷� - www.adminbuy.cn');?>
<!--{if $_G['uid']}-->
<ul class="tt_userinfo">
	<li class="tt_author"><a href="home.php?mod=space&uid=$_G[uid]" class="br4"><span>{$_G[member][username]}</span><!--{avatar($_G[uid],small)}--></a>
		<div class="son br4">			
			<ul>
                <!--{hook/global_usernav_extra1}-->
                <!--{hook/global_usernav_extra4}-->
                <a href="home.php?mod=spacecp">{lang setup}</a>
                
                <!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
                <!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
			<a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
		<!--{/if}-->
                <!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
                <!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->
			<a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a>
		<!--{/if}-->
                <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
			<a href="admin.php" target="_blank">{lang admincp}</a>
		<!--{/if}-->
        		<!--{hook/global_usernav_extra2}-->
              <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
			</ul>
		</div>
	</li>
</ul>

<div class="tt_newst">
<a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a><span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt" class="a {if $_G[member][newprompt]} new{/if}">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
</div>
                
<div id="um" style="display:none">
<div class="avt y"><a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></div>
	<p>
		<strong class="vwmy{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}"><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a></strong>
		<!--{if $_G['group']['allowinvisible']}-->
		<span id="loginstatus">
			<a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onclick="ajaxget(this.href, 'loginstatus');return false;" class="xi2"></a>
		</span>
		<!--{/if}-->
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><!--{hook/global_usernav_extra4}--><a href="home.php?mod=spacecp">{lang setup}</a>
		<span class="pipe">|</span><a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>
		<span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new"{/if} onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
		<!--{if empty($_G['cookie']['ignore_notice']) && ($_G[member][newpm] || $_G[member][newprompt_num][follower] || $_G[member][newprompt_num][follow] || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}-->
		<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
		<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
			<span class="pipe">|</span><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
		<!--{/if}-->
		<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->
			<span class="pipe">|</span><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
			<span class="pipe">|</span><a href="admin.php" target="_blank">{lang admincp}</a>
		<!--{/if}-->
		<!--{hook/global_usernav_extra2}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	</p>
	<p>
		<!--{hook/global_usernav_extra3}-->
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1" id="extcreditmenu"{if !$_G[setting][bbclosed]} onmouseover="delayShow(this, showCreditmenu);" class="showmenu"{/if}>{lang credits}: $_G[member][credits]</a>
		<span class="pipe">|</span><a href="home.php?mod=spacecp&ac=usergroup" id="g_upmine" class="showmenu" onmouseover="delayShow(this, showUpgradeinfo)">{lang usergroup}: $_G[group][grouptitle]</a>
	</p>
</div>
<!--{elseif !empty($_G['cookie']['loginuser'])}-->
<p>
	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
</p>
<!--{elseif !$_G[connectguest]}-->
	<!--{template member/login_simple}-->
<!--{else}-->
<div id="um">
	<div class="avt y"><!--{avatar(0,small)}--></div>
	<p>
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	</p>
	<p>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
	</p>
</div>
<!--{/if}-->