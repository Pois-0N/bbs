<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('login');?><?php include template('common/header'); if(!empty($_GET['infloat']) && !isset($_GET['frommessage'])) { ?>
<h3 class="flb">
<em id="returnmessage_<?php echo $loginhash;?>">
<?php if(!empty($_GET['infloat'])) { if(!empty($_GET['guestmessage'])) { ?>����Ҫ�ȵ�¼���ܼ���������<?php } elseif($auth) { ?>�벹������ĵ�¼��Ϣ<?php } else { ?>�û���¼<?php } } ?>
</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>', 0, 1);" title="�ر�">�ر�</a></span>
</h3>
<?php } ?>
        
<div style="width:340px;padding:<?php if(!empty($_GET['infloat']) && !isset($_GET['frommessage'])) { ?>20px<?php } else { ?>0px<?php } ?> 100px;<?php if(!empty($_GET['infloat']) && !isset($_GET['frommessage'])) { ?>height:40px;<?php } ?>">
<span class="btncns" style="width:140px;height:41px;background-color:#00a7e3;display:block;float:left;border-radius:5px;line-height:41px;color:#fff;font-size:16px;text-align:center;">
<a href="https://www.ejiandai.com/login?redirectURL=%2Faccount%2Fforum" style="color:#fff;width: 100%;display: inline-block;height: 100%;">��¼</a></span>
<span style="width:140px;height:41px;background-color:#f58232;display:block;float:right;border-radius:5px;line-height:41px;color:#fff;font-size:16px;text-align:center;">
<a href="https://www.ejiandai.com/register" style="color:#fff;width: 100%;display: inline-block;height: 100%;">���ע��</a></span>
</div>
<div style="clear:both;"></div><?php include template('common/footer'); ?>