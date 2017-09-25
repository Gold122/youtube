<?php

	##		DON'T ALLOW EDIT		##
	##								##			
	##  Copyright by: Gold122,Anno  ##
	##								##
	##		DON'T ALLOW COPY		##



require_once("src/ts3admin.class.php");
require_once("src/functions.php");
require_once("config.php");

$ts = new ts3admin($c['ts3']['host'], $c['ts3']['query_port']);
if($ts->getElement('success', $ts->connect())){
	$ts->login($c['ts3']['login'], $c['ts3']['password']);
	$ts->selectServer($c['ts3']['login_port']);
	$ts->setName($c['ts3']['name']);
	$whoam = $ts->getElement('data',$ts->whoAmI());
    $ts->clientMove($whoam['client_id'],$c['ts3']['channel']);
	
	while(true)
	{
		foreach($c['yt'] as $config)
		{
			$channelname = curl('http://api.goldproject.pl/ytv2.php?type=name&id='.$config['id']);
			$channelstats = curl('http://api.goldproject.pl/ytv2.php?type=stats&id='.$config['id']);
			if($channelname != NULL)
			{
				if($channelname != 'bad')
				{
					if($config['name']['channel_id'] != 0)
					{
						$name['channel_name'] = replace($config['name']['channel_name'], $channelname,$channelstats);
						$ts->channelEdit($config['name']['channel_id'], $name);
					}
				}
				else
				{
					echo 'ERROR: Bad ID {'.$config['id'].'}'; 
				}
			}
			else
			{
				echo PHP_EOL;
				echo ('ERROR: API NR 1 IS DOWN');
				echo PHP_EOL;
			}
			if($channelstats != NULL)
			{
				if($channelstats != 'bad')
				{
					if($config['suby']['channel_id'] != 0)
					{
						$suby['channel_name'] = replace($config['suby']['channel_name'], $channelname,$channelstats);
						$ts->channelEdit($config['suby']['channel_id'], $suby);
					}
					if($config['view']['channel_id'] != 0)
					{
						$viev['channel_name'] = replace($config['view']['channel_name'], $channelname,$channelstats);
						$ts->channelEdit($config['view']['channel_id'], $viev);
					}
					if($config['video']['channel_id'] != 0)
					{
						$video['channel_name'] = replace($config['video']['channel_name'], $channelname,$channelstats);
						$ts->channelEdit($config['video']['channel_id'], $video);
					}
				}
				else
				{
					echo 'ERROR: Bad ID {'.$config['id'].'}'; 
				}
			}
			else
			{
				echo PHP_EOL;
				echo 'ERROR: API NR 2 IS DOWN';
				echo PHP_EOL;
			}
		}
		sleep($c['ts3']['interval']*60);
	}
}else
{
	echo 'Brak Połączenia z ts3!';
	echo PHP_EOL;
	echo 'Sprawdz config !';
	die;
}