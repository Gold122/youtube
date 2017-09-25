<?php

function replace($msg, $channelname,$channelstats)
{
	
	$replace = array(
			1 => array(1 => '[name]', 2 => $channelname["name"]),
			2 => array(1 => '[suby]', 2 => $channelstats["suby"]),	
			3 => array(1 => '[view]', 2 => $channelstats["viev"]),
			4 => array(1 => '[video]', 2 => $channelstats["video"]),				
			);
			
	foreach($replace as $stats)
	{
	$msg = str_replace($stats[1], $stats[2], $msg);
	}
	
	return $msg;	
}

	function curl($link)
	{
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,$link);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,3);
			$query = json_decode(curl_exec($ch),true);
			curl_close($ch);
			
			return $query;
	}


?>