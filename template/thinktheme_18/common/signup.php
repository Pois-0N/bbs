<?PHP exit('10配色小米完美版 GBK AB模板网全网首发 - www.adminbuy.cn');?>
<div id="midaben_sign">
  <div class="midaben_con">
		<span class="midaben_signpanel JD_sign " id="JD_sign" {if $qiandaodb['time'] < $tdtime && (!$var['timeopen'] || ($var['timeopen'] && ($htime >= $var['stime'] && $htime <= $var['ftime'])))} onclick="showWindow('dsu_paulsign', 'plugin.php?id=dsu_paulsign:sign')"{else}onclick="window.location.href='plugin.php?id=dsu_paulsign:sign'" {/if}>
			<div class="font">签到</div>		
		<div class="fblock">
			<a href="plugin.php?id=dsu_paulsign:sign">
			<div class="all"><!--{if $stats[todayq]>0}-->$stats[todayq] {lang dsu_paulsign:tj_03}<!--{else}-->0 {lang dsu_paulsign:tj_03}<!--{/if}--></div>
			<div class="line"><span style="font-size:12px;"><!--{if $qiandaodb['time'] < $tdtime && (!$var['timeopen'] || ($var['timeopen'] && ($htime >= $var['stime'] && $htime <= $var['ftime'])))}-->您还未签到<!--{else}-->签到看排名<!--{/if}--></span></div>
			</a>
		</div></span>
	</div>
</div>