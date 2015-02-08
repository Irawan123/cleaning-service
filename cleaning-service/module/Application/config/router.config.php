<?php

return array(
    'routes' => array(

        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route'    => '/',
                'defaults' => array(
                    'controller' => 'Application\SkeletonApp\Controller\Index',
                    'action'     => 'index',
                ),
            ),
        ),

        /**
        * WEB
        */
        'master' => array(
            'type'    => 'segment',
            'options' => array(
                'route'    => '/master[/][:action][/:id]',
                'constraints' => array(
                    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'id'     => '[0-9]+',
                ),
                'defaults' => array(
                    'controller' => 'Index',
                    'action'     => 'index',
                ),
            ),
        ),

        'dummy' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '/master/dummy[/:action][/:id]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ),
                'defaults' => array(
                    '__NAMESPACE__' => 'Application\SkeletonApp\Master',
                    'action'     => 'index',
                    'controller' => 'Application\SkeletonApp\Master\Dummy',
                ),
            ),
        ),

        'pegawai' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '/master/pegawai[/:action][/:id]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ),
                'defaults' => array(
                    '__NAMESPACE__' => 'Application\SkeletonApp\Master',
                    'action'     => 'index',
                    'controller' => 'Application\SkeletonApp\Master\Pegawai',
                ),
            ),
        ),

        'customer' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '/master/customer[/:action][/:id]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                ),
                'defaults' => array(
                    '__NAMESPACE__' => 'Application\SkeletonApp\Master',
                    'action'     => 'index',
                    'controller' => 'Application\SkeletonApp\Master\Customer',
                ),
            ),
        ),

        /**
        * API
        */
        'api' => array(
            'type'    => 'Literal',
            'options' => array(
                'route'    => '/api',
                'defaults' => array(
                    '__NAMESPACE__' => 'Application\SkeletonApp\Api',
                    'controller' => 'Index',
                    'action'     => 'index',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
                'master' => array(
                    'type'    => 'Segment',
                    'options' => array(
                        'route'    => '/master/[:controller[/:action][/:id]]',
                        'constraints' => array(
                            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                        ),
                        'defaults' => array(
                            '__NAMESPACE__' => 'Application\SkeletonApp\Api\Master',
                            'controller' => 'Index',
                            'action'     => 'index',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
