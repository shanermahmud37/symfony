<?php

namespace ContainerNZ87wrx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCachePoolClearer_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cache_pool_clearer.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\CachePoolClearerCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CachePoolClearerCacheWarmer.php';

        return $container->privates['cache_pool_clearer.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\CachePoolClearerCacheWarmer(($container->services['cache.system_clearer'] ?? $container->load('getCache_SystemClearerService')), ['cache.validator', 'cache.serializer']);
    }
}
