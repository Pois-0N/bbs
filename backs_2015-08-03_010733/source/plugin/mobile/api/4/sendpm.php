<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: sendpm.php 35186 2015-01-19 01:52:52Z nemohou $
 */
//note ��Ϣpm >> sendpm(������Ϣ) @ Discuz! X2.5

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['mod'] = 'spacecp';
$_GET['ac'] = 'pm';
$_GET['op'] = 'send';
include_once 'home.php';

class mobile_api {

	//note ����ģ��ִ��ǰ��Ҫ���еĴ���
	function common() {
		$_POST = $_GET;
	}

	//note ����ģ�����ǰ���еĴ���
	function output() {
		global $_G;
		$variable = array(
			'pmid' => $GLOBALS['return']
		);
		mobile_core::result(mobile_core::variable($variable));
	}

}

?>