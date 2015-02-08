<?php

return array(
    'invokables' => array(
    	/**
    	* WEB
    	*/
        'Application\SkeletonApp\Controller\Index' => 'Application\SkeletonApp\Common\Controller\IndexController',

        'Application\SkeletonApp\Master\Dummy' => 'Application\SkeletonApp\Master\Dummy\DummyController',

        'Application\SkeletonApp\Master\Pegawai' => 'Application\SkeletonApp\Master\Pegawai\PegawaiController',

        'Application\SkeletonApp\Master\Customer' => 'Application\SkeletonApp\Master\Customer\CustomerController',

        /**
    	* API
    	*/
        'Application\SkeletonApp\Api\Master\Dummy' => 'Application\SkeletonApp\Api\Master\Dummy\DummyController',        

    ),
);