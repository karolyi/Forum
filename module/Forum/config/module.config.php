<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/karolyi/forum for the canonical source repository
 * @license   http://www.wtfpl.net/ WTFPL License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Forum\Controller\Api\V1\Index',
                        // 'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'forum/api/v1' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/forum/api/v1',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Forum\Controller\Api\V1',
                        'controller'    => 'Index',
                        // 'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:id]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]+',
                                'id'     => '[a-zA-Z][a-zA-Z0-9_-]+',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            // 'Forum\Controller\Index' => 'Forum\Controller\IndexController',
            'Forum\Controller\Api\V1\Index' => 'Forum\Controller\Api\V1\IndexController',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'forum_model_entities' => array(
                'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',
                'paths' => array(realpath(__DIR__ . '/../src/Forum/Model')),
            ),
            'odm_default' => array(
                'drivers' => array(
                    'Forum\Model' => 'forum_model_entities',
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
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
            'forum/index/index' => __DIR__ . '/../view/forum/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        // This way the view manager won't look for .phtml files under ../view
        'strategies' => array(
            'ViewJsonStrategy'
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'forum',
            ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array(
            'Zend\Session\Validator\RemoteAddr',
            'Zend\Session\Validator\HttpUserAgent',
        ),
    ),
);
