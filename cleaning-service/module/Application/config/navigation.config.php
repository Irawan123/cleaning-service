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
				array(
					'label' => 'Customer',
					'route' => 'customer',
					'action' => 'index',
				),
				array(
					'label' => 'Pegawai',
					'route' => 'pegawai',
					'action' => 'index',
				),

			),
		),
		
	),
);