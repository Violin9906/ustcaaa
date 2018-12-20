<?php
/** 
* PHP 中检查或过滤 IP 地址 
* 
* 支持 IP 区间、CIDR（Classless Inter-Domain Routing）及单个 IP 格式 
* @param string $network 网段，支持 IP 区间、CIDR及单个 IP 格式 
* @param string $ip 要检查的 IP 地址 
* @return boolean 
*/ 
function netMatch($network, $ip) { 
	$network = trim($network); 
	$ip = trim($ip); 
	$result = false; 
	if (false !== ($pos = strpos($network, "-"))) { 
		$from = ip2long(trim(substr($network, 0, $pos))); 
		$to = ip2long(trim(substr($network, $pos+1))); 
		$ip = ip2long($ip); 
		$result = ($ip >= $from and $ip <= $to); 
	} else if (false !== strpos($network,"/")) { 
		list ($net, $mask) = explode ('/', $network); 
		$result = (ip2long($ip) & ~((1 << (32 - $mask)) - 1)) == ip2long($net); 
	} else { 
		$result = $network === $ip; 
	} 
	return $result; 
}

$ip = $_SERVER["REMOTE_ADDR"];

session_start();

if(!(
	($_SESSION['name'])/* or 				//使用阿里云服务器时不进行IP过滤，只对注册用户开放
	*/)){
		header("Location: /astro/user/login.php");
		exit();
}
