<?php

return array(
	'default' => array(
		array(
			'label' => 'Home',
			'route' => 'home',
		),
		array(
			'label' => 'Master',
			'route' => 'master',
			'pages' => array(
				array(
					'label' => 'Dummy',
					'route' => 'dummy',
					'action' => 'index',
				),

			),
		),
		
	),
);