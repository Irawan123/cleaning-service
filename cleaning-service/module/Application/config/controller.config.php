<?php

return array(
    'invokables' => array(
    	/**
    	* WEB
    	*/
        'Application\SkeletonApp\Controller\Index' => 'Application\SkeletonApp\Common\Controller\IndexController',

        'Application\SkeletonApp\Master\Dummy' => 'Application\SkeletonApp\Master\Dummy\DummyController',

        /**
    	* API
    	*/
        'Application\SkeletonApp\Api\Master\Dummy' => 'Application\SkeletonApp\Api\Master\Dummy\DummyController',        

    ),
);