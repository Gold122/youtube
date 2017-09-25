<?php

	//LOGOWANIE DO SERWERA
	$c['ts3'] = array(
            'host' => 'localhost', // IP TS3
	    'login_port' => 9987, // Port Głosowy
            'query_port' => 10011, // Port Query 
            'login' => 'serveradmin', // Login Query
	    'password' => 'passowrd', // Hasło Query
            'name' => 'YouTube',  // Nazwa bota QUERY 
			'channel' => '655',  // Kanał na jakim ma siedzieć bot QUERY !!
			'interval' => '5',     // Co ile ma bot odświeżać kanał 
			);
	
	
	$c['yt'] = array(
		0 => array(
			'id' => 'UCBlvPJYoDK0MHlVx6XgQiEw',  // id youtubera
			'name' => array(
				'channel_name' => '[cspacer0]• [name] •',  // nazwa kanalu
				'channel_id' => '809', // id kanalu
			),
			'suby' => array(
				'channel_name' => 'Subskrypcji: [suby]',
				'channel_id' => '841',
			),
			'view' => array(
				'channel_name' => 'Wyswietleń: [view]', 
				'channel_id' => '842',
			),
			'video' => array(
				'channel_name' => 'Filmików: [video]', 
				'channel_id' => '844',
			),
		),
		1 => array(
			'id' => 'UCqHt69TQo2wEUPy0nf_AE6w',
			'name' => array(
				'channel_name' => '[cspacer0]• [name] •', 
				'channel_id' => '1011',
			),
			'suby' => array(
				'channel_name' => 'Subskrypcji: [suby]',
				'channel_id' => '1021',
			),
			'view' => array(
				'channel_name' => 'Wyswietleń: [view]', 
				'channel_id' => '1022',
			),
			'video' => array(
				'channel_name' => 'Filmików: [video]', 
				'channel_id' => '1023',
			),
		),
	);
	
?>
