<?php 
/**
 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
 * @author Tanxu
 */
//error_reporting(0);
require_once dirname(__FILE__) . '/geetest/class.geetestlib.php';
require_once dirname(__FILE__) . '/geetest/config.php';

$GtSdk = new GeetestLib(CAPTCHA_ID, PRIVATE_KEY);
session_start();
$data = array("gttest" => "gttest");

$status = $GtSdk->pre_process($data, 1);
$_SESSION['gtserver'] = $status;
$_SESSION['gttest'] = $data['gttest'];
echo $GtSdk->get_response_str();
 ?>