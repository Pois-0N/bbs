<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); if(CURMODULE != 'logging') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>logging.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<span style="width:140px;height:41px;background-color:#00a7e3;display:block;float:right;border-radius:5px;line-height:41px;color:#fff;font-size:16px;text-align:center;">
    <a href="https://www.ejiandai.com/login?redirectURL=%2Faccount%2Fforum" style="color:#fff;width: 100%;display: inline-block;height: 100%;">登录</a></span>

<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } } ?>