<?php

return array(

	'*' => array(
		'server' => 'localhost',
		'tablePrefix' => 'craft',
		'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';")
	),

	'.test' => array(
		'user' => 'root',
		'password' => '',
		'database' => 'craft_2_starter',
    ),

    'craft.test' => array(
    	'user' => 'root',
			'password' => '',
			'database' => 'craft_2_starter',
    )	

);
