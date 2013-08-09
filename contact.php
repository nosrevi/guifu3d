<?php

/**
 * Contact Us
 * ============================================================================
 * * 版权所有 Bin Wu
 * ----------------------------------------------------------------------------
 * ============================================================================
 * $Author: Bin Wu$
 * $Id: contact.php$
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

assign_template();
$smarty->assign('page_title', '联系我们');    // 页面标题
$smarty->assign('shop_name',  $_CFG['shop_name']);
$smarty->assign('watermark', str_replace('../', './', $_CFG['watermark']));
$smarty->assign('gallery',  $gallery);
$smarty->display('contact.dwt');

?>
