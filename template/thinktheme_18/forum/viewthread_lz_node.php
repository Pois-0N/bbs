<?PHP exit('10配色小米完美版 GBK AB模板网全网首发 - www.adminbuy.cn');?>
<!--{eval
$needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);
$postshowavatars = !($_G['setting']['bannedmessages'] & 2 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)));
}-->
<!--{block authorverifys}-->
<!--{loop $post['verifyicon'] $vid}-->
	<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank"><!--{if $_G['setting']['verify'][$vid]['icon']}--><img src="$_G['setting']['verify'][$vid]['icon']" class="vm" alt="$_G['setting']['verify'][$vid][title]" title="$_G['setting']['verify'][$vid][title]" /><!--{else}-->$_G['setting']['verify'][$vid]['title']<!--{/if}--></a>
<!--{/loop}-->
<!--{loop $post['unverifyicon'] $vid}-->
	<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank"><img src="$_G['setting']['verify'][$vid]['unverifyicon']" class="vm" alt="$_G['setting']['verify'][$vid][title]" title="$_G['setting']['verify'][$vid][title]" /></a>
<!--{/loop}-->
<!--{/block}-->

<div class="pl_t">
    <!--{if !IS_ROBOT}-->
        <span class="act_btn y">
            <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' {lang activity_member_unit}{lang thread_favorite}'" title="{lang thread_favorite}"><img class="vm" src="$_G['style']['styleimgdir']/pl_t_fav.gif" alt="{lang thread_favorite}" /></a>
        </span>

        <!--{if !$postcount && !$_G['forum_thread']['archiveid']}-->
            <span class="act_btn y" id="fj">
                <input type="text" size="2" onkeyup="$('fj_btn').href='forum.php?mod=redirect&ptid=$_G[tid]&authorid=$_GET[authorid]&postno='+this.value" onkeydown="if(event.keyCode==13) {window.location=$('fj_btn').href;return false;}" title="{lang thread_redirect_postno_tips}" />
                <a href="javascript:;" id="fj_btn" title="{lang thread_redirect_postno_tips}">
                    <img src="$_G['style']['styleimgdir']/pl_t_fj.gif" alt="{lang thread_redirect_postno_tips}" class="vm" />
                </a>
            </span>
        <!--{/if}-->

        <!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))}-->
            <span class="act_btn y"><a class="editp" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page" title="{lang edit}"><!--{if $_G['forum_thread']['special'] == 2 && !$post['message']}-->{lang post_add_aboutcounter}<!--{else}--><img src="$_G['style']['styleimgdir']/pl_t_edit.gif" alt="{lang edit}" class="vm" /></a><!--{/if}--></span>
        <!--{elseif $_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']}-->
            <span class="act_btn y"><a class="appendp" href="forum.php?mod=misc&action=postappend&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page" onClick="showWindow('postappend', this.href, 'get', 0)">{lang postappend}</a></span>
        <!--{/if}-->

    <!--{/if}-->

    <!--{if $post['first'] && $_G['forum_threadstamp']}-->
    <div id="threadstamp"><img src="{STATICURL}image/stamp/$_G[forum_threadstamp][url]" title="$_G[forum_threadstamp][text]" /></div>
    <!--{/if}-->

    <div id="recommendItemTop" class="recommendItemTop<!--{if $post['first'] && $_G['forum_threadstamp']}--> withStamp<!--{/if}-->"></div>

</div>

<!--{if empty($post['deleted'])}-->

<table id="pid$post[pid]" class="plhin post_lz" summary="pid$post[pid]" cellspacing="0" cellpadding="0">
<tr>
	<td class="plc"<!--{if $close_leftinfo}--> style="width:100%"<!--{/if}-->>

		<!--{ad ad_a_pr/thread/a_pr/3/$postcount}-->

        <div class="p_pop blk bui new_card card_gender_$post['gender'] lz_card" id="userinfo$_G[forum_thread][authorid]" style="display: none; top:200px">
            <div class="card_inner">
                <div class="m z">
                    <div class="avatar" id="userinfo$post[pid]_ma">$post[avatar]</div>
                    <!--{hook/viewthread_profileside $postcount}-->
                </div>
                <div class="c_info">
                    <div class="c_info_top">
                        <strong>
                            <a href="home.php?mod=space&uid=$post[authorid]" target="_blank" class="xi2"{if $post[groupcolor]} style="color: $post[groupcolor]"{/if}>$post[author]</a>
                            $authorverifys
                        </strong>
                        {eval viewthread_profile_node('top', $post);}
                    </div>
                    {eval viewthread_profile_node('left', $post);}
                </div>

                <!--我是楼主-->

                <div class="c_action">
                    <a class="y" href="home.php?mod=spacecp&ac=friend&op=add&uid=$post[authorid]&handlekey=addfriendhk_{$post[authorid]}" onclick="showWindow('adduser', this.href, 'get', 0);">加为好友</a>
                    <a class="y" href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$post[authorid]&touid=$post[authorid]&pmid=0&daterange=2&pid=$post[pid]&tid=$post[tid]" onclick="showWindow('sendpm', this.href);" title="发送消息">发送消息</a>
                    <a class="z" href="home.php?mod=space&uid=$post[authorid]" target="_blank">访问家园</a>
                </div>
            </div>
        </div>

		<div class="pct">
			<!--{ad/thread/a_pt/2/$postcount}-->
			<!--{if 1 || !$_G['inajax']}-->
				<!--{if empty($ad_a_pr_css)}-->
					<style type="text/css">.pcb{margin-right:0}</style>
					<!--{eval $ad_a_pr_css=1;}-->
				<!--{/if}-->
			<!--{/if}-->

			<!--{if !$post['first'] && $post['replycredit'] > 0}-->
				<div class="cm">
					<h3 class="psth xs1"><span class="icon_ring vm"></span>
						{lang replycredit} <span class="xw1 xs2 xi1">+{$post['replycredit']}</span> {$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][unit]}{$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][title]}
					</h3>
				</div>
			<!--{/if}-->

			<!--{subtemplate forum/viewthread_node_body}-->
		</div>

		<!--{if helper_access::check_module('collection') && !$_G['forum']['disablecollect']}-->
			<!--{if $post['relatecollection']}-->
				<div class="cm">
					<h3 class="psth xs1">{lang collection_related}</h3>
					<ul class="mbw xl xl2 cl">
					<!--{loop $post['relatecollection'] $var}-->
						<li>&middot; <a href="forum.php?mod=collection&action=view&ctid=$var[ctid]" title="$var[name]" target="_blank" class="xi2 xw1">$var[name]</a><span class="pipe">|</span><span class="xg1">{lang collection_threadnum}: $var[threadnum], {lang collection_follow}: $var[follownum]</span></li>
					<!--{/loop}-->
					<!--{if $post['releatcollectionmore']}-->
						<li>&middot; <a href="forum.php?mod=collection&tid=$_G[tid]" target="_blank" class="xi2 xw1">{lang more}</a></li>
					<!--{/if}-->
					</ul>
				</div>
				<!--{if $post['sourcecollection']['ctid']}-->
				<div>
					{lang collection_fromctid}
					<form action="forum.php?mod=collection&action=comment&ctid={$ctid}&tid={$_G[tid]}" method="POST" class="ptm pbm cl">
						<input type="hidden" name="ratescore" id="ratescore" />
						<span class="clct_ratestar">
							<span class="btn">
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',1)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',1,'ratescore')">1</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',2)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',2,'ratescore')">2</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',3)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',3,'ratescore')">3</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',4)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',4,'ratescore')">4</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',5)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',5,'ratescore')">5</a>
							</span>
							<span id="clct_ratestar_star" class="star star$memberrate"></span>
						</span>
						&nbsp;<button type="submit" value="submit" class="pn"><span>{lang collection_rate}</span></button>
					</form>
				</div>
				<!--{/if}-->
			<!--{/if}-->
		<!--{/if}-->
	</td>
</tr>
	<tr><td class="plc plm">
		<!--{if $locations[$post[pid]]}-->
			<div class="mobile-location">$locations[$post[pid]][location]</div>
		<!--{/if}-->

        <!--{if !IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']}-->
            <!--{if $post['invisible'] == 0}-->
            <div id="p_btn" class="hm cl">
                <!--{if !empty($_G['setting']['pluginhooks']['viewthread_share_method'])}-->
                <div class="tshare cl">
                    <b>{lang viewthread_share_to}:&nbsp;</b>
                    <!--{hook/viewthread_share_method}-->
                </div>
                <!--{/if}-->

                <a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" id="k_favorite" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('favoritenumber').innerHTML + ' {lang activity_member_unit}{lang thread_favorite}'" title="{lang fav_thread}"><img src="{IMGDIR}/fav.gif" alt="{lang thread_favorite}" />{lang thread_favorite}<span id="favoritenumber"{if !$_G['forum_thread']['favtimes']} style="display:none"{/if}>{$_G['forum_thread']['favtimes']}</span></a>
                <!--{if $_G['group']['raterange'] && $post['authorid']}-->
                <a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=$_G[tid]&pid=$post[pid]&islz=1', 'get', -1);return false;" title="{lang rate_position}"><img src="{IMGDIR}/agree.gif" alt="{lang rate}" />{lang rate}</a>
                <!--{/if}-->
                <!--{if !$post['anonymous'] && $post['first'] && helper_access::check_module('follow')}-->
                <a class="followp" href="home.php?mod=spacecp&ac=follow&op=relay&tid=$_G[tid]&from=forum" onclick="showWindow('relaythread', this.href, 'get', 0);" title="{lang follow_spread}"><img src="{IMGDIR}/rt.png" alt="{lang thread_realy}" />{lang thread_realy}<!--{if $_G['forum_thread']['relay']}--><span id="relaynumber" style="display:none">{$_G['forum_thread']['relay']}</span><!--{/if}--></a>
                <!--{/if}-->
                <!--{if $post['first'] && helper_access::check_module('share')}-->
                <a class="sharep" href="home.php?mod=spacecp&ac=share&type=thread&id=$_G[tid]" onclick="showWindow('sharethread', this.href, 'get', 0);" title="{lang share_digest}"><img src="{IMGDIR}/oshr.png" alt="{lang thread_share}" />{lang thread_share}<!--{if $_G['forum_thread']['sharetimes']}--><span id="sharenumber">{$_G['forum_thread']['sharetimes']}</span><!--{/if}--></a>
                <!--{/if}-->

                <!--{if !$_G['forum']['disablecollect'] && helper_access::check_module('collection')}-->
                <a href="forum.php?mod=collection&action=edit&op=addthread&tid=$_G[tid]" id="k_collect" onclick="showWindow(this.id, this.href);return false;" onmouseover="this.title = $('collectionnumber').innerHTML + ' {lang activity_member_unit}{lang collection}'" title="{lang thread_collect}"><img src="{IMGDIR}/collection.png" alt="{lang thread_share}" />{lang collection}<span id="collectionnumber"{if !$post['releatcollectionnum']} style="display:none"{/if}>{$post['releatcollectionnum']}</span></a>
                <!--{/if}-->
                <!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
                <!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
                <a id="recommend_add" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'" title="{lang maketoponce}"><img src="{IMGDIR}/rec_add.gif" alt="$_G['setting']['recommendthread'][addtext]" />$_G['setting']['recommendthread'][addtext]<span id="recommendv_add"{if !$_G['forum_thread']['recommend_add']} style="display:none"{/if}>$_G[forum_thread][recommend_add]</span></a>
                <!--{/if}-->
                <!--{if !empty($_G['setting']['recommendthread']['subtracttext'])}-->
                <a id="recommend_subtract" href="forum.php?mod=misc&action=recommend&do=subtract&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-{$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_subtract').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][subtracttext]'" title="{lang makebottomonce}"><img src="{IMGDIR}/rec_subtract.gif" alt="$_G['setting']['recommendthread'][subtracttext]" />$_G['setting']['recommendthread'][subtracttext]<span id="recommendv_subtract"{if !$_G['forum_thread']['recommend_sub']} style="display:none"{/if}>$_G[forum_thread][recommend_sub]</span></a>
                <!--{/if}-->
                <!--{/if}-->
                <!--{hook/viewthread_useraction}-->
            </div>
            <!--{/if}-->
			
            <!--{if !empty($lastmod['modaction']) && in_array($_G['adminid'], array(1))}-->
            <div class="modact">
                <a href="forum.php?mod=misc&action=viewthreadmod&tid=$_G[tid]" title="{lang thread_mod}" onclick="showWindow('viewthreadmod', this.href)">
                    <!--{if $lastmod['modactiontype'] == 'REB'}-->{lang thread_mod_recommend_by}<!--{else}-->{lang thread_mod_by}<!--{/if}-->
                </a>
            </div>
            <!--{/if}-->
            <!--{hook/viewthread_modaction}-->
        <!--{/if}-->

		<!--{if $post['relateitem']}-->
			<div class="mtw mbw">
				<h3 class="pbm mbm bbda">{lang related_thread}</h3>
				<ul class="xl xl2 cl">
					<!--{loop $post['relateitem'] $var}-->
					<li>&#8226; <a href="forum.php?mod=viewthread&tid=$var[tid]" title="$var[subject]" target="_blank">$var[subject]</a></li>
					<!--{/loop}-->
				</ul>
			</div>
		<!--{/if}-->
		<!--{if $post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))}-->
			<div class="sign">{lang member_signature_banned}</div>
		<!--{elseif $post['signature'] && !$post['anonymous'] && $showsignatures}-->
			<div class="sign" style="max-height:{$_G['setting']['maxsigrows']}px;maxHeightIE:{$_G['setting']['maxsigrows']}px;">$post[signature]</div>
		<!--{elseif !$post['anonymous'] && $showsignatures && $_G['setting']['globalsightml']}-->
			<div class="sign">$_G['setting']['globalsightml']</div>
		<!--{/if}-->
		<!--{hook/viewthread_postsightmlafter $postcount}-->
		<!--{ad/thread/a_pb/1/$postcount}-->
	</td>
</tr>
<tr id="_postposition$post['pid']"></tr>
<!--{if !$_G['forum_thread']['archiveid']}-->
<tr>
	<td class="plc" style="overflow:visible;{if $close_leftinfo}--> width:100%{/if}">
		<div class="po hin">
				<span class="y">
                    <em>
                        <!--{if $post['invisible'] == 0}-->

                        <!--{if $_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G[timestamp] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0}-->
                        <a href="javascript:;" onclick="setanswer($post['pid'], '$_GET[from]')">{lang reward_set_bestanswer}</a>
                        <!--{/if}-->

                        <!--{if !$post['first'] && $_G['group']['raterange'] && $post['authorid']}-->
                        <a href="javascript:;" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=$_G[tid]&pid=$post[pid]&islz=1', 'get', -1);return false;">{lang rate}</a>
                        <!--{/if}-->

                        <!--{if !empty($postlist[$post[pid]]['totalrate']) && $_G['forum']['ismoderator']}-->
                        <a href="forum.php?mod=misc&action=removerate&tid=$_G[tid]&pid=$post[pid]&page=$page&islz=1" onclick="showWindow('rate', this.href, 'get', -1)">{lang removerate}</a>
                        <!--{/if}-->

                        <!--{if $post['authorid'] != $_G['uid']}-->
                        <a href="javascript:;" onclick="showWindow('miscreport$post[pid]', 'misc.php?mod=report&rtype=post&rid=$post[pid]&tid=$_G[tid]&fid=$_G[fid]', 'get', -1);return false;">{lang report}</a>
                        <!--{/if}-->

                        <!--{if $_G['setting']['magicstatus']}-->
                        <a href="javascript:;" id="mgc_post_$post[pid]" onmouseover="showMenu(this.id)" class="showmenu">{lang thread_magic}</a>
                        <!--{/if}-->

                        <!--{/if}-->
                        <!--{hook/viewthread_postaction $postcount}-->
                    </em>

                    <!--{if $_G['setting']['magicstatus']}-->
					<ul id="mgc_post_$post[pid]_menu" class="p_pop mgcmn" style="display: none;">
                        <!--{if $post['first']}-->
                        <!--{if !empty($_G['setting']['magics']['bump'])}-->
                        <li><a href="home.php?mod=magic&mid=bump&idtype=tid&id=$_G[tid]" id="a_bump" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/bump.small.gif" />$_G['setting']['magics']['bump']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['stick'])}-->
                        <li><a href="home.php?mod=magic&mid=stick&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/stick.small.gif" />$_G['setting']['magics']['stick']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['close'])}-->
                        <li><a href="home.php?mod=magic&mid=close&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/close.small.gif" />$_G['setting']['magics']['close']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['open'])}-->
                        <li><a href="home.php?mod=magic&mid=open&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/open.small.gif" />$_G['setting']['magics']['open']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['highlight'])}-->
                        <li><a href="home.php?mod=magic&mid=highlight&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/highlight.small.gif" />$_G['setting']['magics']['highlight']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['sofa'])}-->
                        <li><a href="home.php?mod=magic&mid=sofa&idtype=tid&id=$_G[tid]" id="a_stick" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/sofa.small.gif" />$_G['setting']['magics']['sofa']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['jack'])}-->
                        <li><a href="home.php?mod=magic&mid=jack&idtype=tid&id=$_G[tid]" id="a_jack" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/jack.small.gif" />$_G['setting']['magics']['jack']</a></li>
                        <!--{/if}-->
                        <!--{hook/viewthread_magic_thread}-->
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['repent']) && $post['authorid'] == $_G['uid'] && !$rushreply}-->
                        <li><a href="home.php?mod=magic&mid=repent&idtype=pid&id=$post[pid]:$_G[tid]" id="a_repent_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/repent.small.gif" />$_G['setting']['magics']['repent']</a></li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['anonymouspost']) && $post['authorid'] == $_G['uid']}-->
                        <li><a href="home.php?mod=magic&mid=anonymouspost&idtype=pid&id=$post[pid]:$_G[tid]" id="a_anonymouspost_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/anonymouspost.small.gif" />$_G['setting']['magics']['anonymouspost']</a><li>
                        <!--{/if}-->
                        <!--{if !empty($_G['setting']['magics']['namepost'])}-->
                        <li><a href="home.php?mod=magic&mid=namepost&idtype=pid&id=$post[pid]:$_G[tid]" id="a_namepost_$post[pid]" onclick="showWindow(this.id, this.href)"><img src="{STATICURL}image/magic/namepost.small.gif" />$_G['setting']['magics']['namepost']</a><li>
                        <!--{/if}-->
                        <!--{hook/viewthread_magic_post $postcount}-->
                    </ul>
					<script type="text/javascript" reload="1">checkmgcmn('post_$post[pid]')</script>
				    <!--{/if}-->

                    <!--{if !$post['first'] && $modmenu['post']}-->
                        <label for="manage$post[pid]">
                        <input type="checkbox" id="manage$post[pid]" class="pc" {if !empty($modclick)}checked="checked" {/if}onclick="pidchecked(this);modclick(this, $post[pid])" value="$post[pid]" autocomplete="off" />
                        {lang manage}
                        </label>
                    <!--{/if}-->
				</span>
			<div class="pob cl">
				<em>

					<!--{if ($_G['group']['allowedituser'] || $_G['group']['allowbanuser'] || ($_G['forum']['ismoderator'] && $_G['group']['allowviewip'])) && !getstatus($post['status'], 5)}-->
						<!--{if $_G['forum']['ismoderator'] && $_G['group']['allowviewip']}-->
						<a href="forum.php?mod=topicadmin&action=getip&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if $_G['forum_auditstatuson']}&modthreadkey=$_GET[modthreadkey]{/if}" onclick="ajaxmenu(this, 0, 0, 2);doane(event)">IP</a>
						<!--{/if}-->
						<!--{if $_G['group']['allowedituser']}-->
						<a href="{if $_G['adminid'] == 1}admin.php?frames=yes&action=members&operation=search&uid=$post[authorid]&submit=yes{else}forum.php?mod=modcp&action=member&op=edit&uid=$post[authorid]{/if}" target="_blank">{lang edit}</a>
						<!--{/if}-->
						<!--{if $_G['group']['allowbanuser']}-->
						<!--{if $_G['adminid'] == 1}-->
						<a href="admin.php?action=members&operation=ban&username=$post[usernameenc]&frames=yes" target="_blank">{lang ban_member}</a>
						<!--{else}-->
						<a href="forum.php?mod=modcp&action=member&op=ban&uid=$post[authorid]" target="_blank">{lang ban_member}</a>
						<!--{/if}-->
						<!--{/if}-->
						<a href="forum.php?mod=modcp&action=thread&op=post&do=search&searchsubmit=1&users=$post[usernameenc]" target="_blank">{lang posts}</a>
						<!--{if $_G['adminid'] == 1}-->
						<a href="forum.php?mod=ajax&action=quickclear&uid=$post[authorid]" onclick="showWindow('qclear_$post[authorid]', this.href, 'get', 0)">{lang clear}</a>
						<!--{/if}-->
					<!--{/if}-->

					<span class="pipe">|</span>
					<!--{if $post['invisible'] == 0}-->
						<!--{if $allowpostreply && $post['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])}--><a class="cmmnt" href="forum.php?mod=misc&action=comment&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page{if $_G['forum_thread']['special'] == 127}&special=$specialextra{/if}" onclick="showWindow('comment', this.href, 'get', 0)">{lang comments}</a><!--{/if}-->
                        <!--{if (!$_G['uid'] || $allowpostreply) && !$needhiddenreply}-->
                            <!--{if $post['first']}-->
                                <a class="fastre" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)">{lang reply}</a>
                            <!--{else}-->
                                <a class="fastre" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)">{lang reply}</a>
                            <!--{/if}-->
                        <!--{/if}-->
					<!--{/if}-->
					<!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))}-->
						<a class="editp" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page"><!--{if $_G['forum_thread']['special'] == 2 && !$post['message']}-->{lang post_add_aboutcounter}<!--{else}-->{lang edit}</a><!--{/if}-->
					<!--{elseif $_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']}-->
						<a class="appendp" href="forum.php?mod=misc&action=postappend&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page" onClick="showWindow('postappend', this.href, 'get', 0)">{lang postappend}</a>
					<!--{/if}-->
					<!--{if $post['first'] && $post['invisible'] == -3}-->
						<!--<a class="psave" href="forum.php?mod=misc&action=pubsave&tid=$_G[tid]">{lang published}</a>-->
					<!--{/if}-->
					<!--{if $post['invisible'] == -2 && !$post['first']}-->
						<span class="xg1">({lang moderate_need})</span>
					<!--{/if}-->
					<!--{if $post['first'] && $allowblockrecommend}--><a class="push" href="javascript:;" onclick="modaction('recommend', '$_G[forum_firstpid]', 'op=recommend&idtype={if $_G[forum_thread][isgroup]}gtid{else}tid{/if}&id=$_G[tid]&pid=$post[pid]', 'portal.php?mod=portalcp&ac=portalblock')">{lang modmenu_blockrecommend}</a><!--{/if}-->
					<!--{if !$_G['forum_thread']['special'] && !$rushreply && !$hiddenreplies && $_G['setting']['repliesrank'] && !$post['first'] && !($post['isWater'] && $_G['setting']['filterednovote'])}-->
					<a class="replyadd" href="forum.php?mod=misc&action=postreview&do=support&tid=$_G[tid]&pid=$post[pid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = ($('review_support_$post[pid]').innerHTML ? $('review_support_$post[pid]').innerHTML : 0) + ' {lang activity_member_unit} {lang support_reply}'">{lang support_reply} <span id="review_support_$post[pid]">$post[postreview][support]</span></a>
					<a class="replysubtract" href="forum.php?mod=misc&action=postreview&do=against&tid=$_G[tid]&pid=$post[pid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = ($('review_against_$post[pid]').innerHTML ? $('review_against_$post[pid]').innerHTML : 0) + ' {lang activity_member_unit} {lang against_reply}'">{lang against_reply} <span id="review_against_$post[pid]">$post[postreview][against]</span></a>
					<!--{/if}-->
					<!--{hook/viewthread_postheader $postcount}-->
					<!--{hook/viewthread_postfooter $postcount}-->
				</em>
			</div>
		</div>
	</td>
</tr>
<!--{/if}-->
<tr class="ad">
	<td class="plc">
		<!--{if $post['first'] && $_G[forum_thread][special] == 5 && $_G[forum_thread][displayorder] >= 0}-->
			<ul class="ttp cl">
				<li style="display:inline;margin-left:12px"><strong class="bw0 bg0_all">{lang debate_filter}: </strong></li>
				<li{if !isset($_GET['stand'])} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]" hidefocus="true">{lang all}</a></li>
				<li{if $_GET['stand'] == 1} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=1" hidefocus="true">{lang debate_square}</a></li>
				<li{if $_GET['stand'] == 2} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=2" hidefocus="true">{lang debate_opponent}</a></li>
				<li{if isset($_GET['stand']) && $_GET['stand'] == 0} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=0" hidefocus="true">{lang debate_neutral}</a></li>
			</ul>
		<!--{/if}-->
		<!--{if $_G['forum_thread']['replies']}--><!--{ad/interthread/a_p/$postcount}--><!--{/if}-->
	</td>
</tr>
</table>
<!--{if !empty($aimgs[$post[pid]])}-->
<script type="text/javascript" reload="1">
	aimgcount[{$post[pid]}] = [<!--{echo dimplode($aimgs[$post[pid]]);}-->];
	attachimggroup($post['pid']);
	<!--{if empty($_G['setting']['lazyload'])}-->
		<!--{if !$post['imagelistthumb']}-->
			attachimgshow($post[pid]);
		<!--{else}-->
			attachimgshow($post[pid], 1);
		<!--{/if}-->
	<!--{/if}-->
	var aimgfid = 0;
	<!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])}-->
		aimgfid = $_G[fid];
	<!--{/if}-->
	<!--{if $post['imagelistthumb']}-->
		attachimglstshow($post['pid'], <!--{echo intval($_G['setting']['lazyload'])}-->, aimgfid, '{$_G[setting][showexif]}');
	<!--{/if}-->
</script>
<!--{/if}-->
<!--{else}-->
	<table id="pid$post[pid]" summary="pid$post[pid]" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<!--{if !$close_leftinfo}-->
			<td class="pls"></td>
			<!--{/if}-->
			<td class="plc"<!--{if $close_leftinfo}--> style="width:100%"<!--{/if}-->>
				<div class="pi">
					<strong><a><!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}--><em>{$post[number]}</em>{$postno[0]}<!--{/if}--></a></strong>
				</div>
				<div class="pct">{lang post_deleted}</div>
			</td>
		</tr>
		<tr class="ad">
			<!--{if !$close_leftinfo}-->
			<td class="pls"></td>
			<!--{/if}-->
			<td class="plc"></td>
		</tr>
	</tbody>
</table>
<!--{/if}-->
<!--{hook/viewthread_endline $postcount}-->

<div class="post_comment_top">
    <a id="comment_top" style="display: block; margin-top: -45px;"></a>
    <div style="margin-top: 45px;">
        <h2>共 {$_G['forum_thread']['replies']} 个关于本帖的回复 最后回复于 <!--{eval echo dgmdate($_G['forum_thread']['lastpost'], 'u');}--></h2>
    </div>
    <!--{if $_G['page'] > 1}-->
    <script type="text/javascript">
        if(location.href.indexOf("#") < 0) {
            location.hash = "comment_top";
        }
    </script>
    <!--{/if}-->
</div>
