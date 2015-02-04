<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router'        => include __DIR__ . '/router.config.php',
    
    'controllers'   => include __DIR__ . '/controller.config.php',
    
    'navigation'    => include __DIR__ . '/navigation.config.php',

    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
		'factories' => array(
			'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', // <-- add this
		),
    ),

    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies'    => array(
            'ViewJsonStrategy',
        ),
    ),
    
    /**
     * Untuk mapping domain (xml)
     */
    'doctrine' => array(
        'driver' => array(
            'application_skeleton-app_mapping' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../orm/mappings',
                    __DIR__ . '/../orm/mappings/master',
                ),
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Application\SkeletonApp' => 'application_skeleton-app_mapping',
                )
            )
        ),
    ),

    /**
     * Untuk mapping validator (xml)
     */
    'Validator' => include __DIR__ . '/validator.config.php',

    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
