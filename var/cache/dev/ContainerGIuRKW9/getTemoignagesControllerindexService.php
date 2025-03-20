<?php

namespace ContainerGIuRKW9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTemoignagesControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..8ErHJI.App\Controller\TemoignagesController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..8ErHJI.App\\Controller\\TemoignagesController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'temoignagesRepository' => ['privates', 'App\\Repository\\TemoignagesRepository', 'getTemoignagesRepositoryService', true],
        ], [
            'temoignagesRepository' => 'App\\Repository\\TemoignagesRepository',
        ]))->withContext('App\\Controller\\TemoignagesController::index()', $container);
    }
}
