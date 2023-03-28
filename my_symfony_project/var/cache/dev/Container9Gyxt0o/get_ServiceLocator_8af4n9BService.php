<?php

namespace Container9Gyxt0o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8af4n9BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8af4n9B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8af4n9B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogRepository' => ['privates', 'App\\Repository\\BlogRepository', 'getBlogRepositoryService', true],
        ], [
            'blogRepository' => 'App\\Repository\\BlogRepository',
        ]);
    }
}